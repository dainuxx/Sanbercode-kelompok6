@extends('layout.master')

@section('judul')
Halaman Tambah Data Pasien
@endsection

@section('content')
<form action="/pasien" method="POST"> 
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
        
    <label>Umur:</label>
        <input type="number" name="umur" class="form-control">
       
    <label>Alamat:</label>
        <textarea name="alamat" rows="10" cols="30" class="form-control"></textarea>
        
    <label>Telepon:</label>
        <input type="number" name="telepon" class="form-control">
        
    <button type="submit" class="btn btn-primary">Tambah</button>
</form>

@endsection
