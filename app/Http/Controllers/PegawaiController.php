<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers;

class PegawaiController extends Controller
{
  public function Index($nama){
    return $nama;
  }
  public function formulir (){
    return view('formulir');
  }
  public function proses(Request $request){
    $nama = $request->input('nama');
    $alamat = $request->input('alamat');
    $data = [$nama, $alamat];
    return view('proses', ['dataForm'=>$data]);
  }
}