<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\history_daily;
use App\Models\history_hours;
use App\Models\device;
use Carbon\Carbon;

class dashboard extends Controller
{
    public function home (Request $request)
    {
        if(auth()->user()->role_id == 2){
        # relasi user ke table device
        $user_id=auth()->user()->device; 
        $id_device=[];
        $id_device_name=[];
        # Ambil data id_device yang dimiliki user yang sedang login dan dimasukan ke array
        foreach($user_id as $user_ids){
            $id_device[]=$user_ids-> id;
            $id_device_name[]=$user_ids->deskripsi;
        }
        $pemakaian_per_device=history_daily::Wherein('device_id',$id_device)->get()
        ->groupBy(function($date) {
            return $date->device_id;
        })
        # Summing a value and grouping by date on a eloquent into collection
        ->map(function ($row) {
            return $row->sum('pemakaian_energi');
        })
        # laravel collection to array
        ->toArray();
        $pemakaian_per_devices = array_values($pemakaian_per_device);
        // dd($pemakaian_per_devices);
        Carbon::setWeekStartsAt(Carbon::MONDAY);
        Carbon::setWeekEndsAt(Carbon::SUNDAY);
        # Set Time untuk penanggalan dari hari senin-minggu
        if($request->sort == "hours"){
            $hours=history_hours::whereIn('device_id',$id_device)->whereDay('tanggal_pemakaian',today())->get();
            $pemakaian=[];
            $tanggal=[];  
            foreach($hours as $datas){
                $pemakaian[]= $datas ->pemakaian_energi;
                $tanggal[]= $datas ->jam_pemakaian;
            }
            $dropdown_item="by hours";

        }elseif($request->sort=="week"){
            $MonthData=history_daily::whereIn('device_id',$id_device)
            ->whereYear('tanggal_pemakaian',now()->year)
            ->WhereMonth('tanggal_pemakaian',now()->month)
            ->orderBy('tanggal_pemakaian','ASC')
            ->get()
            # Grouping by week
            ->groupBy(function($date) {
                return Carbon::parse($date->tanggal_pemakaian)->format('W');
            })
            # Summing a value and grouping by date on a eloquent into collection
            ->map(function ($row) {
                return $row->sum('pemakaian_energi');
            })
            # laravel collection to array
            ->toArray();
            $pemakaian = array_values($MonthData);

            #get data first date
            $week_first_day=history_daily::whereIn('device_id',$id_device)->whereYear('tanggal_pemakaian',now()->year)
            ->WhereMonth('tanggal_pemakaian',now()->month)
            ->orderBy('tanggal_pemakaian','ASC')
            ->get()
            ->groupBy(function($date) {
                return Carbon::parse($date->tanggal_pemakaian)->format('W');
            })->map(function ($row) {
                return $row->pluck('tanggal_pemakaian')->first();
            })
            ->toArray();
            $tanggal=[];
            $r = 1;
            foreach ($week_first_day as $key => $value) {
                $tanggal[] = date('d F Y',strtotime($value))." (week- $r)";
            $r++;
            }
            // dd($pemakaian);

            $dropdown_item="by weeks";

        }elseif($request->sort=="month"){
        $YearData=history_daily::whereIn('device_id',$id_device)
        ->whereYear('tanggal_pemakaian',now()->year)
        ->orderBy('tanggal_pemakaian','ASC')
        ->get()
        #Grouping by week
        ->groupBy(function($date) {
            return Carbon::parse($date->tanggal_pemakaian)->format('m');
        })
        #Summing a value and grouping by date on a eloquent into collection
        ->map(function ($row) {
            return $row->sum('pemakaian_energi');
        })
        # laravel collection to array
        ->toArray();

        $tanggal=[];
        foreach ($YearData as $index => $person) {
            $tanggal[] = date('F', strtotime("2021-".$index."-28")) ;
        }
        #associative array into an indexed array
        $pemakaian = array_values($YearData);

        $dropdown_item="by months";
        }
        else{
            #Query tanggal dari senin-minggu pada minggu ini
            $data=history_daily::whereIn('device_id',$id_device)
            ->whereBetween('tanggal_pemakaian',[now()->startOfWeek(), now()->endOfWeek()])
            ->orderBy('tanggal_pemakaian','ASC')
            ->get();

            
            $pemakaian=[];
            $tanggal=[]; 
            $days=['Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday'];
            $r=0;
            foreach($data as $datas){
                $pemakaian[]= $datas ->pemakaian_energi;
                $tanggal[]= "$days[$r] (".date('d F', strtotime($datas->tanggal_pemakaian)).")";
                $r++;
            }
            $dropdown_item="by days";
        }
      
        $today=history_daily::whereIn('device_id',$id_device)->whereDate('tanggal_pemakaian',today())->pluck('pemakaian_energi')[0] ?? 0;
        
        $month=history_daily::whereIn('device_id',$id_device)->whereMonth('tanggal_pemakaian',now()->month)->sum('pemakaian_energi') ?? 0;

        $week=history_daily::whereIn('device_id',$id_device)
        ->whereBetween('tanggal_pemakaian',[now()->startOfWeek(), now()->endOfWeek()])
        ->get()->sum('pemakaian_energi') ?? 0;
        
        // $weekeuy = array_values($weekeuy);

        #membuat notif perhitungan naik turun dalam persentase
        $banding_today=history_daily::whereIn('device_id',$id_device)->whereDate('tanggal_pemakaian',today()->subDays())->pluck('pemakaian_energi')[0] ?? 0;
        $banding_week=history_daily::whereIn('device_id',$id_device)
        ->whereBetween('tanggal_pemakaian',[now()->startOfWeek(7), now(7)->endOfWeek()])
        ->get()->sum('pemakaian_energi') ??0;
        $banding_month=history_daily::whereIn('device_id',$id_device)->whereMonth('tanggal_pemakaian',now()->subMonth()->month)->sum('pemakaian_energi') ??0;


        if($today != 0 && $banding_today !=0  && $week != 0 && $banding_week !=0 && $month != 0 && $banding_month !=0){
        $notif_today = round((($today - $banding_today)/$banding_today*100),1);
        $notif_week = round((($week - $banding_week)/$banding_week*100),1);
        $notif_month = round((($month - $banding_month)/$banding_month*100),1);
        }
        // dd($banding_today, $today, $notif_today);
    
        return view('dashboard.home',['pemakaian'=> $pemakaian, 'tanggal'=> $tanggal,'today'=>$today, 'month'=>$month, 'week'=>$week, 'dropdown_item'=>$dropdown_item, 'user_id' =>$user_id,
        'notif_today' => $notif_today ?? 0,'notif_month' => $notif_month ?? 0,'notif_week' => $notif_week ?? 0, 'id_device' => $id_device,'id_device_name'=> $id_device_name,'pemakaian_per_devices'=> $pemakaian_per_devices]);
    }

    else{
        return redirect()->route('dashboard-admin');
    }
    }
    

    public function profile()
    {
        return view('dashboard.profile');
    }
    public function tools()
    {
        $user_device=auth()->user()->device;
        return view('dashboard.tools', compact('user_device'));
    }
    public function security()
    {
        return view('dashboard.security');
    }

}