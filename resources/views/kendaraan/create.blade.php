<!-- resources/views/kendaraan/create.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Tambah Kendaraan</h2>
        <form method="POST" action="{{ route('kendaraan.store') }}">
            @csrf
            <div class="form-group">
                <label for="merk">Merk:</label>
                <input type="text" class="form-control" id="merk" name="merk" required>
            </div>
            <div class="form-group">
                <label for="jenis">Jenis:</label>
                <input type="text" class="form-control" id="jenis" name="jenis" required>
            </div>
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
            </div>
            <div class="form-group">
                <label for="nopol">No. Polisi:</label>
                <input type="text" class="form-control" id="nopol" name="nopol" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection
