<?php

namespace App\Http\Controllers;

use App\Models\PegawaiNew;

class PegawaiNewController extends Controller
{
    public function index()
    {
        // $pegawainew = PegawaiNew::where('nama', 'like', '%a%')->get();
        $pegawainew = PegawaiNew::paginate(3);
        return view('pegawainew', ['pegawainew' => $pegawainew]);
    }
}
