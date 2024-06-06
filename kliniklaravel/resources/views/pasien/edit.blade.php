@extends('layout.master')

@section('judul')
Halaman Edit Pemanin Film
@endsection

@section('content')
<a href="/pasien" class="btn btn-primary mb-3">Kembali</a>
<div>
    <h2>Edit Data Pasien {{$pasien->id}}</h2>
    <form action="/pasien/{{$pasien->id}}" method="POST">
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
        <label>Nama:</label>
        <input type="text" name="nama" class="form-control" value="{{$pasien->nama}}">
        
        <label>Umur:</label>
        <input type="number" name="umur" class="form-control" value="{{$pasien->umur}}">
        
        <label>Alamat:</label>
        <textarea name="alamat" rows="10" cols="30" class="form-control">{{$pasien->alamat}}</textarea>

        <label>Umur:</label>
        <input type="number" name="telepon" class="form-control" value="{{$pasien->telepon}}">
       
        </div>
        <button type="submit" class="btn btn-primary">Edit</button>
    </form>
</div>

@endsection