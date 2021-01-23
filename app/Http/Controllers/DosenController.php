<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function Index($namadosen=null){
        $nama= "Solehudin";
        $pelajaran = ["Matematika", "Kimia", "Fisika"];
        return view('biodata', ['nama'=> $nama, 'matkul'=>$pelajaran, 'namadosen'=>$namadosen]);
    }
}
