@extends('layout.master')

@section('judul')
Halaman Tambah Data dokter
@endsection

@section('content')
<form action="/dokter" method="POST"> 
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
   
    <label>Nama:</label>
        <input type="text" name="nama" class="form-control">
        
    <label>spesialis</label>
        <input type="text" name="spesialis" class="form-control">
        
    <label>Telepon:</label>
        <input type="number" name="telepon" class="form-control">
        
    <button type="submit" class="btn btn-primary">Tambah</button>
</form>

@endsection
