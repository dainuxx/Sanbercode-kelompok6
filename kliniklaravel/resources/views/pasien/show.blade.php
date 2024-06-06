@extends('layout.master')

@section('judul')
Halaman Detail Data Pasien
@endsection

@section('content')
<a href="/pasien" class="btn btn-primary mb-3">Kembali</a>

<h4>Nama :{{$pasien->nama}}</h4>
<p>Umur :{{$pasien->umur}} Tahun</p>
<p>Alamat :{{$pasien->alamat}}</p>
<p>Telepon :{{$pasien->telepon}}</p>

@endsection