@extends('home')
@section('content')
<table id="example" class="table table-striped text-center" style="width:100%">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Pengirim</th>
            <th>Email</th>
            <th>Pesan</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ( $kontak as $key => $item)
        <tr>
            <td>{{ $key+1 }}</td>
            <td>{{ $item -> nama }}</td>
            <td>{{ $item -> email }}</td>
            <td>{{ $item -> pesan }}</td>
            <td>
            <a href="www.gmail.com"><button class="btn btn-primary"><i class="fa fa-message"></i></button></a>
            <a href="kontak/delete/{{ $item -> id }}"><button class="btn btn-danger"><i class="fa fa-trash"></i></button></a>
            </td>
    
        </tr>
        @endforeach
    </tbody>
</table
@endsection