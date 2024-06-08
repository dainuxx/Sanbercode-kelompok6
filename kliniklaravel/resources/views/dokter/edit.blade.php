@extends('layout.master')

@section('judul')
Halaman Edit dokter
@endsection

@section('content')
<a href="/dokter" class="btn btn-primary mb-3">Kembali</a>
<div>
    <h2>Edit Data dokter {{$dokter->id}}</h2>
    <form action="/dokter/{{$dokter->id}}" method="POST">
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
       
        <label>nama:</label>
        <input type="text" name="nama" class="form-control" value="{{$dokter->nama}}">
        
        <label>spesialis</label>
        <textarea name="spesialis" rows="10" cols="30" class="form-control">{{$dokter->spesialis}}</textarea>

        <label>telefon:</label>
        <input type="number" name="telepon" class="form-control" value="{{$dokter->telepon}}">
       
        </div>
        <button type="submit" class="btn btn-primary">Edit</button>
    </form>
</div>

@endsection