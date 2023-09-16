<!-- resources/views/transSewa/create.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Tambah Penyewaan</h2>
        <form method="POST" action="{{ route('transSewa.store') }}">
            @csrf
            <div class="form-group">
                <label for="id_titip">ID Titip:</label>
                <select class="form-control" id="id_titip" name="id_titip" required>
                    <option value="">Pilih ID Titip</option>
                    @foreach($transTitip as $titip)
                        <option value="{{ $titip->id }}">{{ $titip->id }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="tgl_awal">Tanggal Awal:</label>
                <input type="date" class="form-control" id="tgl_awal" name="tgl_awal" required>
            </div>
            <div class="form-group">
                <label for="tgl_akhir">Tanggal Akhir:</label>
                <input type="date" class="form-control" id="tgl_akhir" name="tgl_akhir" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection
