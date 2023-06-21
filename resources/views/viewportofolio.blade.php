@extends('template')
@section('konten')
<a href="{{ url('viewpo/add') }}"><button class="btn btn-success mb-3 btn-sm">Tambah</button></a>

<table id="example" class="table table-striped text-center" style="width:100%">
    <thead>
        <tr>
            <th>No</th>
            <th>Judul Portofolio</th>
            <th>Kategori</th>
            <th>Deskripsi</th>
            <th>Foto</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ( $portofolio as $key => $item)
        <tr>
            <td>{{ $key+1 }}</td>
            <td>{{ $item -> namaPortofolio }}</td>
            <td>{{ $item -> kategori }}</td>
            <td>{{ $item -> Deskripsi }}</td>
            <td><img src="/storage/{{ $item -> foto }}" alt="" width="80" height="60"></td>
            <td>
            <a href="viewpo/edit/{{ $item -> id }}"><button class="btn btn-success"><i class="fa fa-edit"></i></button></a>
            <a href="viewpo/delete/{{ $item -> id }}"><button class="btn btn-danger"><i class="fa fa-trash"></i></button></a>
            </td>
    
        </tr>
        @endforeach
    </tbody>
</table

@endsection