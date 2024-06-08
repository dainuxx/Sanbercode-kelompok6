@extends('layout.master')

@section('judul')
Halaman List Data dokter
@endsection

@push('script')
<script src="{{asset('/klinik/plugins/datatables/jquery.dataTables.js')}}"></script>
<script src="{{asset('/klinik/plugins/datatables-bs4/js/dataTables.bootstrap4.js')}}"></script>
<script>
$(document).ready( function () {
    $('#dokter').DataTable();
} );
</script>
@endpush

@push('style')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.11.3/datatables.min.css"/>
@endpush

@section('content')
<a href="/dokter/create" class="btn btn-primary mb-3">Tambah</a>
        <table class="table" id="dokter">
            <thead class="thead-light">
              <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
                @forelse ($dokter as $key=>$item)
                    <tr>
                        <td>{{$key + 1}}</th>
                        <td>{{$item->nama}}</td>
                        <td>
                            <form action="/dokter/{{$item->id}}" method="POST">
                            <a href="/dokter/{{$item->id}}" class="btn btn-info">Show</a>
                            <a href="/dokter/{{$item->id}}/edit" class="btn btn-primary">Edit</a>
                                @csrf
                                @method('DELETE')
                                <input type="submit" class="btn btn-danger my-1" value="Delete">
                            </form>
                            
                        </td>
                    </tr>
                @empty
                    <tr colspan="3">
                        <td>Belum Ada Data dokter</td>
                    </tr>  
                @endforelse              
            </tbody>
        </table>

@endsection