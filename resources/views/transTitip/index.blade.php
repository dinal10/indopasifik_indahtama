<!-- resources/views/transTitip/index.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Daftar Penitipan</h2>
        <a href="{{ route('transTitip.create') }}" class="btn btn-success">Tambah Penitipan</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID Kendaraan</th>
                    <th>Tanggal Titip</th>
                    <th>Harga Sewa</th>
                    <th>Tanggal Berakhir</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($transTitip as $penitipan)
                    <tr>
                        <td>{{ $penitipan->id_kendaraan }}</td>
                        <td>{{ $penitipan->tgl_titip }}</td>
                        <td>{{ $penitipan->harga_sewa }}</td>
                        <td>{{ $penitipan->tgl_berakhir }}</td>
                        <td>
                            <a href="{{ route('transTitip.edit', $penitipan->id) }}" class="btn btn-primary">Edit</a>
                            <form action="{{ route('transTitip.destroy', $penitipan->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus penitipan ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
