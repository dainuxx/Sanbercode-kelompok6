@extends('layout.master')

@section('content')
<div class="container">
    <h1>Tambah Dokter</h1>
    <form action="{{ route('dokter.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">id</label>
            <input type="text" class="form-control" id="name" name="id" required>
        </div>
        
        <div class="mb-3">
            <label for="name" class="form-label">Nama :</label>
            <input type="text" class="form-control" id="name" name="nama" required>
        </div>
        <div class="mb-3">
            <label for="specialization" class="form-label">Spesialis :</label>
            <input type="text" class="form-control" id="specialization" name="spesialis" required>
        </div>
        <div class="mb-3">
            <label for="specialization" class="form-label">Telepon :</label>
            <input type="text" class="form-control" id="specialization" name="telepon" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
