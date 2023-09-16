<!-- resources/views/transTitip/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Edit Penitipan</h2>
        <form method="POST" action="{{ route('transTitip.update', $penitipan->id) }}">
            @csrf
            @method('PATCH')
            <div class="form-group">
                <label for="id_kendaraan">ID Kendaraan:</label>
                <input type="text" class="form-control" id="id_kendaraan" name="id_kendaraan" value="{{ $penitipan->id_kendaraan }}" required>
            </div>
            <div class="form-group">
                <label for="tgl_titip">Tanggal Titip:</label>
                <input type="date" class="form-control" id="tgl_titip" name="tgl_titip" value="{{ $penitipan->tgl_titip }}" required>
            </div>
            <div class="form-group">
                <label for="harga_sewa">Harga Sewa:</label>
                <input type="text" class="form-control" id="harga_sewa" name="harga_sewa" value="{{ $penitipan->harga_sewa }}" required>
            </div>
            <div class="form-group">
                <label for="tgl_berakhir">Tanggal Berakhir:</label>
                <input type="date" class="form-control" id="tgl_berakhir" name="tgl_berakhir" value="{{ $penitipan->tgl_berakhir }}">
            </div>
            <button type="submit
