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
        $user_id=$id;
        // dd($name);
        // dd($data_device);
        return view('admin.userdevice', compact('data_device','name','user_id'));
    }
    public function addtoolsuser($id) {
        $name=User::where('id', $id)->pluck('name')->first();
        $user_id=$id;
        return view ('admin.addtools',compact('name','user_id'));
    }
    public function addtoolsuserdata($id,Request $req) {
        $device=new device();
        $device->user_id = $id;
        $device->device_id = $req->device_id;
        $device->device_name = $req->device_name;
        $device->device_version = $req->device_version;
        $device->deskripsi = $req->deskripsi;
        $device->save();
        return redirect(route('userdevice', $id))->with('success', 'Success Adding New Tools'); 
    }
    public function deletetoolsuser($id,Request $req){
        $device= device::find($req->id);
        $device -> delete();
        return redirect(route('userdevice', $id))->with('success', 'Berhasil Delete Tools'); 
    }
    public function edittoolsuser($id){
        $device= device::find($id);
        $user_id=$device->user_id;
        // dd($user_id);
        return view ('admin.edittools',compact('device','user_id'));
    }
    public function edittoolsuserdata($id, Request $req){
        $user_id=$req->user_id;
        $device= device::find($id);
        $device->device_id = $req->device_id;
        $device->device_name = $req->device_name;
        $device->device_version = $req->device_version;
        $device->deskripsi = $req->deskripsi;
        $device->save();
        return redirect(route('userdevice', $user_id))->with('success', 'Success Update Tools'); 
    }
}
