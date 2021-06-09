<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\device;

class AdminController extends Controller
{
    //
    public function home(){
        $data_user=User::where('role_id', 2)->count();
        $data_device=device::all()->count();
        
        return view('admin.admin', compact('data_user','data_device'));
    }
    public function listuser(){
        $data_user=User::where('role_id', 2)->get();

        return view('admin.listuser', compact('data_user'));
    }
    public function listdevice(){
        $data_device=device::get();

        return view('admin.listdevice', compact('data_device'));
    }
    public function userdevice($id){
        $data_device=device::where('user_id', $id)->get();
        $name=User::where('id', $id)->pluck('name')->first();
        // dd($name);
        // dd($data_device);
        return view('admin.userdevice', compact('data_device','name'));
    }



}
