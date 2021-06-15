<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class ProfileController extends Controller
{
    public function editprofile($id, Request $req){
        $device= User::find($id);
        $device->name = $req->nama;
        $device->email = $req->email;
        $device->nohp = $req->nohp;
        $device->save();
        return redirect(route('profile'))->with('success', 'Success Update Tools'); 
    }
    public function userpassword($id, Request $req){
        $user = User::find($id);
        $req->validate([
            'password' => 'required',
            'new_password' => 'required|min:8|different:password',
        ]);
        if (Hash::check($req->password, $user->password)) {
            $req->user()->fill([
                'password' => Hash::make($req->new_password)
            ])->save();
        return redirect(route('security'))->with('success', 'Success Update password'); 
        }
        else {
            return redirect(route('security'))->with('danger', 'Password Lama belum sesuai'); 
        }
    }
}
