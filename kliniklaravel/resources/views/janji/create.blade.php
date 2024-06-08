@extends('layout.master')

@section('judul')
Halaman Tambah Data Janji
@endsection

@section('content')
<form action="/janji" method="POST"> 
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
   
    <label>Jadwal:</label>
    <input type="text" name="jadwal" class="form-control">
        
    <label>Dokter ID:</label>
    <input type="text" name="dokter_id" class="form-control">
        
    <label>Pasien ID:</label>
    <input type="text" name="pasien_id" class="form-control">
        
    <button type="submit" class="btn btn-primary">Tambah</button>
</form>

@endsection
