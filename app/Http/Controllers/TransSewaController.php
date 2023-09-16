<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\trans_sewa;
use App\Models\trans_titip;

class TransSewaController extends Controller
{
   
public function index()
{
    $transSewa = trans_sewa::all();
    return view('transSewa.index', compact('transSewa'));
}

public function create()
{
    // Ambil semua trans titip yang tidak memiliki trans sewa aktif
    $transTitip = trans_titip::get();

    return view('transSewa.create', compact('transTitip'));
}

public function store(Request $request)
{
    $request->validate([
        'id_titip' => 'required',
        'tgl_awal' => 'required',
        'tgl_akhir' => 'required',
    ]);

    // Cek apakah kendaraan sudah memiliki trans sewa aktif
    $kendaraan = trans_titip::findOrFail($request->id_titip)->kendaraan;
    if ($kendaraan->transSewaAktif()) {
        return redirect()->route('transSewa.create')->with('error', 'Kendaraan sedang dalam status sewa aktif.');
    }

    trans_sewa::create($request->all());

    return redirect()->route('transSewa.index')->with('success', 'Data penyewaan berhasil ditambahkan!');
}

}
