<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers;

class PegawaiController extends Controller
{
  public function index(){
    // mengambil data dari database
    $pegawai = DB::table('pegawai')->get();
    //megirim data pegawai ke view index
    return view('index', ['pegawai'=>$pegawai]);
  }
  public function tambah(){
    //menampilkan view tambah
    return view('tambah');
  }
  public function store (Request $request){
    DB::table('pegawai')->insert([
      'pegawai_nama'=> $request->nama,
      'pegawai_jabatan'=> $request->jabatan,
      'pegawai_umur'=> $request->umur,
      'pegawai_alamat'=> $request->alamat
    ]);
    //alihkan ke halaman pegawai
    return redirect('/pegawai');
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