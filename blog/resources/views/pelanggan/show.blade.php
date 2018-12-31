@extends('pelanggan.app')

@section('content')
<h4>{{ $pelanggan->nama }}</h4>
<p>{{ $pelanggan->alamat }}</p>
<a href="{{ route('pelanggan.index') }}" class="btn btn-default">Kembali</a>
@endsection