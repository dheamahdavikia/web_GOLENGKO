@extends('layouts.app')

@section('content')
<h4>Ubah</h4>
<form action="{{ route('pelanggan.update', $pelanggan->id) }}" method="post">
    {{csrf_field()}}
    {{ method_field('PUT') }}
    <div class="form-group {{ $errors->has('nama') ? 'has-error' : '' }}">
        <label for="nama" class="control-label">nama</label>
        <input type="text" class="form-control" name="nama" placeholder="nama" value="{{ $pelanggan->nama }}">
        @if ($errors->has('nama'))
            <span class="help-block">{{ $errors->first('nama') }}</span>
        @endif
    </div>
    <div class="form-group {{ $errors->has('alamat') ? 'has-error' : '' }}">
        <label for="alamat" class="control-label">alamat</label>
        <textarea name="alamat" cols="30" rows="5" class="form-control">{{ $pelanggan->alamat }}</textarea>
        @if ($errors->has('alamat'))
            <span class="help-block">{{ $errors->first('alamat') }}</span>
        @endif
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-info">Simpan</button>
        <a href="{{ route('pelanggan.index') }}" class="btn btn-default">Kembali</a>
    </div>
</form>
@endsection