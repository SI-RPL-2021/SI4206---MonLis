<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\history;
class dashboard extends Controller
{
    public function home()
    {
        $user_id=auth()->user()->id;
        $data=history::where('user_id',$user_id )->get();
        // $data=history::all();
        $pemakaian=[];
        $tanggal=[];  
        foreach($data as $datas){
            $pemakaian[]= $datas ->pemakaian;
            $tanggal[]= date('d F Y', strtotime($datas->tanggal_pemakaian));
        }

        return view('dashboard.home',['pemakaian'=> $pemakaian, 'tanggal'=> $tanggal]);
    }

    public function history()
    {
        return view('dashboard.history');
    }
    public function profile()
    {
        return view('dashboard.profile');
    }
    public function tools()
    {
        return view('dashboard.tools');
    }
    public function security()
    {
        return view('dashboard.security');
    }

}
