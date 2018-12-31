@extends('layouts.app')

@section('content')
    <a href="{{ route('pelanggan.create') }}" class="btn btn-info btn-sm">Pelanggan</a>
    
    @if ($message = Session::get('message'))
        <div class="alert alert-success martop-sm">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-responsive martop-sm">
        <thead>
            <th>ID</th>
            <th>NAMA</th>
            <th>ALAMAT</th>
            <th>OPSI</th>
        </thead>
        <tbody>
            @foreach ($pelanggans as $pelanggan)
                <tr>
                    <td>{{ $pelanggan->id }}</td>
                    <td><a href="{{ route('pelanggan.show', $pelanggan->id) }}">{{ $pelanggan->nama }}</a></td>
                    <td><a href="{{ route('pelanggan.show', $pelanggan->id) }}">{{ $pelanggan->alamat }}</a></td>
                    <td>
                        <form action="{{ route('pelanggan.destroy', $pelanggan->id) }}" method="post">
                            {{csrf_field()}}
                            {{ method_field('DELETE') }}
                            <a href="{{ route('pelanggan.edit', $pelanggan->id) }}" class="btn btn-warning btn-sm">Ubah</a>
                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection