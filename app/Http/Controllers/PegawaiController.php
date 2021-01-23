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
  public function edit($id){
    //mengambil data pegawai berdasar id nya
    $pegawai = DB::table('pegawai')->where('pegawai_id', $id)->get();
    //passing data pegawai ke view edit.blade.php
    return view('edit',['pegawai'=>$pegawai]);
  }
  public function update(Request $request){
    DB::table('pegawai')->where('pegawai_id', $request->id)->update([
      'pegawai_nama'=> $request->nama,
      'pegawai_jabatan'=> $request->jabatan,
      'pegawai_umur'=> $request->umur,
      'pegawai_alamat'=> $request->alamat
    ]);
    //alihkan ke halaman pegawai
    return redirect('/pegawai');
  }
  public function hapus($id){
    //Menghapus data pegawai berdasarkan id yang dipilih
    DB::table('pegawai')->where('pegawai_id', $id)->delete();
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