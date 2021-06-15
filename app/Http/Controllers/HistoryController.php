<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\history_daily;
use App\Models\history_hours;
use App\Models\device;
use Carbon\Carbon;
class HistoryController extends Controller
{
    public function history(Request $request)
    {
    # relasi user ke table device
    $user_id=auth()->user()->device; 
    $id_device=[];
    # Ambil data id_device yang dimiliki user yang sedang login dan dimasukan ke array
    foreach($user_id as $user_ids){
        $id_device[]=$user_ids-> id;
    }
    # Set Time untuk penanggalan dari hari senin-minggu
    Carbon::setWeekStartsAt(Carbon::MONDAY);
    Carbon::setWeekEndsAt(Carbon::SUNDAY);
    $pemakaian_sebelum=[];
    if($request->sort=="hours"){
        
        $hours=history_hours::whereIn('device_id',$id_device)->whereDay('tanggal_pemakaian',today())->get();
        $pemakaian=[];
        $tanggal=[];  
        foreach($hours as $datas){
            $pemakaian[]= $datas ->pemakaian_energi;
            $tanggal[]= $datas ->jam_pemakaian;
        }
        $dropdown_item="by hours";
        if($request->filter=="averages"){
        
            $banding=history_hours::whereIn('device_id',$id_device)->whereDay('tanggal_pemakaian',today()->subDays(7))->get();
            foreach($banding as $datas){
                $pemakaian_sebelum[]= $datas ->pemakaian_energi;
            }
            // dd($pemakaian_sebelum); 
            $before="Konsumsi Listrik /Jam 1 hari yang lalu";
        }
    }

    elseif($request->sort=="week"){
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
          foreach ($week_first_day as $key => $value) {
              $tanggal[] = date('d F Y',strtotime($value))." (week- $key)";
          }
        #associative array into an indexed array
        $pemakaian = array_values($MonthData);
          
        $dropdown_item="by weeks";
            if($request->filter=="averages"){
                $MonthData=history_daily::whereIn('device_id',$id_device)
                ->whereYear('tanggal_pemakaian',now()->year)
                ->WhereMonth('tanggal_pemakaian',now()->subMonth()->month)
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
                #associative array into an indexed array
                $pemakaian_sebelum = array_values($MonthData);
                $before="Konsumsi Listrik Mingguan 1 bulan yang lalu";
            }
        
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

        foreach($YearData as $index => $person) {
            $tanggal[] = date('F', strtotime("2021-".$index."-28")) ;
        }
        #associative array into an indexed array
        $pemakaian = array_values($YearData);
    
        $dropdown_item="by months";

        if($request->filter=="averages"){
            $MonthData=history_daily::whereIn('device_id',$id_device)
            ->whereYear('tanggal_pemakaian',now()->subYear()->year)
            ->orderBy('tanggal_pemakaian','ASC')
            ->get()
            # Grouping by week
            ->groupBy(function($date) {
                return Carbon::parse($date->tanggal_pemakaian)->format('m');
            })
            # Summing a value and grouping by date on a eloquent into collection
            ->map(function ($row) {
                return $row->sum('pemakaian_energi');
            })
            # laravel collection to array
            ->toArray();
            #associative array into an indexed array
            $pemakaian_sebelum = array_values($MonthData);
            // dd($pemakaian_sebelum);
            $before="Konsumsi Listrik Bulanan 1 Tahun yang lalu";
        }
    }
            else{
                #Query tanggal dari senin-minggu pada minggu ini
                $data=history_daily::whereIn('device_id',$id_device)
                ->whereBetween('tanggal_pemakaian',[now()->startOfWeek(), now()->endOfWeek()])
                ->orderBy('tanggal_pemakaian','ASC')
                ->get();
                
                $pemakaian=[];
                $tanggal=[];  
                foreach($data as $datas){
                    $pemakaian[]= $datas ->pemakaian_energi;
                    $tanggal[]= date('d F Y', strtotime($datas->tanggal_pemakaian));
                }
                $dropdown_item="by days";
                if($request->filter=="averages"){
        
                    $banding=history_daily::whereIn('device_id',$id_device)
                    ->whereBetween('tanggal_pemakaian',[now()->startOfWeek()->subDays(7), now()->endOfWeek()->subDays(7)])
                    ->orderBy('tanggal_pemakaian','ASC')
                    ->get();
                    foreach($banding as $datas){
                        $pemakaian_sebelum[]= $datas ->pemakaian_energi;
                    }
                    // dd($pemakaian_sebelum); 
                $before="Konsumsi Listrik 1 Minggu yang lalu";
                }
            }
        #################################################################
            $avg_year=history_daily::whereIn('device_id',$id_device)
            ->whereBetween('tanggal_pemakaian',[now()->subYear(1), now()])
            ->orderBy('tanggal_pemakaian','ASC')
            ->get()
            #Grouping by week
            ->groupBy(function($date) {
                return Carbon::parse($date->tanggal_pemakaian)->format('m');
            })
            #Summing a value and grouping by date on a eloquent into collection
            ->map(function ($row) {
                return $row->sum('pemakaian_energi');
            })->avg();
            // dd($avg_year);
            return view('dashboard.history',['pemakaian'=> $pemakaian, 'tanggal'=> $tanggal, 'dropdown_item'=>$dropdown_item,'pemakaian_sebelum'=> $pemakaian_sebelum,'avg_year'=> $avg_year, 'before'=> $before ?? 0,]);
        }
}