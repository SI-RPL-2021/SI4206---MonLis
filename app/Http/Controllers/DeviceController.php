<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DeviceController extends Controller
{
    //
    public function addtools() {
        return view ('dashboard.addtools');

    }

    public function addToolsData(Request $req) {
        $user_id=auth()->user()->id;
        $device=new device();
        $device->user_id = $user_id;
        $device->device_name = $req->device_name;
        $device->device_version = $req->device_version;
        $device->deskripsi = $req->deskripsi;
        $device->save();

        return redirect(route('tools'))->with('success', 'Success Adding New Tools'); 
    }

    public function deleteTools(Request $req){
        $device= device::find($req->id);
        $device -> delete();

        return redirect(route('tools'))->with('success', 'Success Delete Tools'); 
    }
    public function edittools($id){
        $device= device::find($id);
        return view ('dashboard.edittools',compact('device'));
    }
    public function edittoolsData($id, Request $req){
        $device= device::find($id);
        $device->device_name = $req->device_name;
        $device->device_version = $req->device_version;
        $device->deskripsi = $req->deskripsi;
        $device->save();
        return redirect(route('tools'))->with('success', 'Success Update Tools'); 
    }
}
