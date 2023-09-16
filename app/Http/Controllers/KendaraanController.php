<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\Models\m_kendaraan;
class KendaraanController extends Controller
{
    public function create()
{
    return view('kendaraan.create');
}

public function store(Request $request)
{
    // Validasi input
    $request->validate([
        'merk' => 'required',
        'jenis' => 'required',
        'nama' => 'required',
        'nopol' => 'required',
    ]);

    // Simpan data ke database
    m_kendaraan::create($request->all());

    return redirect()->route('kendaraan.index')->with('success', 'Data kendaraan telah ditambahkan!');
}
public function index()
{
    $kendaraans = m_kendaraan::all();
    return view('kendaraan.index', compact('kendaraans'));
}
public function edit(m_kendaraan $kendaraan)
{
    return view('kendaraan.edit', compact('kendaraan'));
}

public function update(Request $request, m_kendaraan $kendaraan)
{
    // Validasi input
    $request->validate([
        'merk' => 'required',
        'jenis' => 'required',
        'nama' => 'required',
        'nopol' => 'required',
    ]);

    // Update data dalam database
    $kendaraan->update($request->all());

    return redirect()->route('kendaraan.index')->with('success', 'Data kendaraan telah diperbarui!');
}
public function destroy(m_kendaraan $kendaraan)
{
    $kendaraan->delete();
    return redirect()->route('kendaraan.index')->with('success', 'Data kendaraan telah dihapus!');
}

}
