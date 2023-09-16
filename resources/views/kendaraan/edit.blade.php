<!-- resources/views/kendaraan/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Edit Kendaraan</h2>
        <form method="POST" action="{{ route('kendaraan.update', $kendaraan->id) }}">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="merk">Merk:</label>
                <input type="text" class="form-control" id="merk" name="merk" value="{{ $kendaraan->merk }}" required>
            </div>
            <div class="form-group">
                <label for="jenis">Jenis:</label>
                <input type="text" class="form-control" id="jenis" name="jenis" value="{{ $kendaraan->jenis }}" required>
            </div>
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" class="form-control" id="nama" name="nama" value="{{ $kendaraan->nama }}" required>
            </div>
            <div class="form-group">
                <label for="nopol">No. Polisi:</label>
                <input type="text" class="form-control" id="nopol" name="nopol" value="{{ $kendaraan->nopol }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        </form>
    </div>
@endsection
