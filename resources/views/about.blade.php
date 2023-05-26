@extends('layouts.main')

@section('container')
    <h1>Daftar Sepeda</h1>

    {{-- <a href="{{ route('pelanggan.create') }}">Tambah Pelanggan</a> --}}

    <table>
        <tr>
            <th>ID</th>
            <th>Merek</th>
            <th>Model</th>
            <th>Tahun</th>
            <th>Nomor Seri</th>
            <th>Catatan Lainnya</th>
            <th>Aksi</th>
        </tr>
        @foreach ($bikes as $bike)
            <tr>
                <td>{{ $bike->id }}</td>
                <td>{{ $bike->merek }}</td>
                <td>{{ $bike->model }}</td>
                <td>{{ $bike->tahun }}</td>
                <td>{{ $bike->nomor_seri }}</td>
                <td>{{ $bike->catatan_lainnya }}</td>
                {{-- <td>
                    <a href="{{ route('pelanggan.edit', $bike->id) }}">Edit</a>
                    <form onsubmit="return confirm('Data pengguna akan dihapus ?')"
                        action="{{ route('pelanggan.destroy', $bike->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Hapus</button>
                    </form>
                </td> --}}
            </tr>
        @endforeach
    </table>
@endsection
