<!-- resources/views/transSewa/index.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Daftar Penyewaan</h2>
        <a href="{{ route('transSewa.create') }}" class="btn btn-success">Tambah Penyewaan</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID Titip</th>
                    <th>Tanggal Awal</th>
                    <th>Tanggal Akhir</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($transSewa as $penyewaan)
                    <tr>
                        <td>{{ $penyewaan->id_titip }}</td>
                        <td>{{ $penyewaan->tgl_awal }}</td>
                        <td>{{ $penyewaan->tgl_akhir }}</td>
                        <td>
                            <a href="{{ route('transSewa.edit', $penyewaan->id) }}" class="btn btn-primary">Edit</a>
                            <form action="{{ route('transSewa.destroy', $penyewaan->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus penyewaan ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
