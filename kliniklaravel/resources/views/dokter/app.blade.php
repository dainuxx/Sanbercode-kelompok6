@extends('layout.master')

@section('judul')
Halaman Detail Data dokter
@endsection

@section('content')
<a href="/dokter" class="btn btn-primary mb-3">Kembali</a>


<p>nama :{{$dokter->nama}} </p>
<p>spesialis :{{$dokter->spesialis}}</p>
<p>Telepon :{{$dokter->telepon}}</p>

@endsection