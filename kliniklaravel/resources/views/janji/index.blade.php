@extends('layout.master')

@section('judul')
Halaman List Data Janji
@endsection

@push('script')
<script src="{{ asset('/klinik/plugins/datatables/jquery.dataTables.js') }}"></script>
<script src="{{ asset('/klinik/plugins/datatables-bs4/js/dataTables.bootstrap4.js') }}"></script>
<script>
$(document).ready(function() {
    $('#janji').DataTable();
});
</script>
@endpush

@push('style')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.11.3/datatables.min.css" />
@endpush

@section('content')
<a href="/janji/create" class="btn btn-primary mb-3">Tambah</a>
<table class="table" id="janji">
    <thead class="thead-light">
        <tr>
            <th scope="col">No</th>
            <th scope="col">Jadwal</th>
            <th scope="col">Dokter ID</th>
            <th scope="col">Pasien ID</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($janji as $key => $item)
        <tr>
            <td>{{ $key + 1 }}</td>
            <td>{{ $item->jadwal }}</td>
            <td>{{ $item->dokter_id }}</td>
            <td>{{ $item->pasien_id }}</td>
            <td>
                <form action="/janji/{{ $item->id }}" method="POST">
                    <a href="/janji/{{ $item->id }}" class="btn btn-info">Show</a>
                    <a href="/janji/{{ $item->id }}/edit" class="btn btn-primary">Edit</a>
                    @csrf
                    @method('DELETE')
                    <input type="submit" class="btn btn-danger my-1" value="Delete">
                </form>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="5">Belum Ada Data Janji</td>
        </tr>
        @endforelse
    </tbody>
</table>

@endsection
