<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DeviceController extends Controller
{
    //
    public function addtools() {
        return view ('dashboard.addtools');
    }
}
