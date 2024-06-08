@extends('layout.master')

@section('judul')
Halaman Edit Janji
@endsection

@section('content')
<a href="/janji" class="btn btn-primary mb-3">Kembali</a>
<div>
    <h2>Edit Data Janji {{ $janji->id }}</h2>
    <form action="/janji/{{ $janji->id }}" method="POST">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        @csrf
        @method('PUT')
        <div class="form-group">
       
        <label>Jadwal:</label>
        <input type="text" name="jadwal" class="form-control" value="{{ $janji->jadwal }}">
        
        <label>Dokter ID:</label>
        <input type="text" name="dokter_id" class="form-control" value="{{ $janji->dokter_id }}">

        <label>Pasien ID:</label>
        <input type="text" name="pasien_id" class="form-control" value="{{ $janji->pasien_id }}">
       
        </div>
        <button type="submit" class="btn btn-primary">Edit</button>
    </form>
</div>

@endsection
