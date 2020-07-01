<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //
    public function form(){
        return view('form');
    }

    public function sapa(Request $request){
        dd($request);
        return "Halo";
    }

    public function sapa_post(Request $request){
        $nama = $request['nama'];
        return $nama;
    }
    public function greeting(Request $request){
        $fsname = $request['fsname'];
        $lsname = $request['lsname'];
        // dd($request->all());
        return view('welcome', ['fsname'=>$fsname, 'lsname'=>$lsname]);
    }
}
