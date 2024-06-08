@extends('layout.master')

@section('judul')
Halaman Detail Data Janji
@endsection

@section('content')
<a href="/janji" class="btn btn-primary mb-3">Kembali</a>

<p>Jadwal: {{ $janji->jadwal }}</p>
<p>Dokter ID: {{ $janji->dokter_id }}</p>
<p>Pasien ID: {{ $janji->pasien_id }}</p>

@endsection
