<!-- resources/views/kendaraan/index.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Daftar Kendaraan</h2>
        <a href="{{ route('kendaraan.create') }}" class="btn btn-primary">Tambah Kendaraan</a>
        <table class="table">
            <thead>
                <tr>
                    <th>Merk</th>
                    <th>Jenis</th>
                    <th>Nama</th>
                    <th>No. Polisi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($kendaraans as $kendaraan)
                    <tr>
                        <td>{{ $kendaraan->merk }}</td>
                        <td>{{ $kendaraan->jenis }}</td>
                        <td>{{ $kendaraan->nama }}</td>
                        <td>{{ $kendaraan->nopol }}</td>
                        <td>
                            <a href="{{ route('kendaraan.edit', $kendaraan->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('kendaraan.destroy', $kendaraan->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus kendaraan ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
