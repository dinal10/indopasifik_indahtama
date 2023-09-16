<?php

namespace App\Http\Controllers;

use App\Models\trans_titip;
use Illuminate\Http\Request;
class TransTitipController extends Controller
{

public function index()
{
    $transTitip = trans_titip::all();
    return view('transTitip.index', compact('transTitip'));
}

public function create()
{
    return view('transTitip.create');
}

public function store(Request $request)
{
    $request->validate([
        'id_kendaraan' => 'required',
        'tgl_titip' => 'required',
        'harga_sewa' => 'required',
    ]);

    $transTitip = trans_titip::create($request->all());

    // Set tanggal berakhir ke null jika tidak diisi
    if (!$request->has('tgl_berakhir')) {
        $transTitip->tgl_berakhir = null;
        $transTitip->save();
    }

    return redirect()->route('transTitip.index')->with('success', 'Data penitipan berhasil ditambahkan!');
}

public function edit(trans_titip $transTitip)
{
    return view('transTitip.edit', compact('transTitip'));
}

public function update(Request $request, trans_titip $transTitip)
{
    $request->validate([
        'id_kendaraan' => 'required',
        'tgl_titip' => 'required',
        'harga_sewa' => 'required',
    ]);

    $transTitip->update($request->all());

    // Set tanggal berakhir ke null jika tidak diisi
    if (!$request->has('tgl_berakhir')) {
        $transTitip->tgl_berakhir = null;
        $transTitip->save();
    }

    return redirect()->route('transTitip.index')->with('success', 'Data penitipan berhasil diperbarui!');
}

public function destroy(trans_titip $transTitip)
{
    $transTitip->delete();
    return redirect()->route('transTitip.index')->with('success', 'Data penitipan berhasil dihapus!');
}

}
