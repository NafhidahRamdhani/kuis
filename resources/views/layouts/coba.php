@extends('layouts.main')

@section('title', 'coba')

@section('content')

<div class="container" style="padding-top: 90px">
    <div class="textCake text-warning" style="padding-top: 10px">
        <p>TABEL</p>
      </div>
    <table class="table table-bordered table-striped text-warning" style="text-align: center" >
        <thead>
        <tr>
        <th>No</th>
        <th>Judul</th>
        <th>Tanggal</th>
        <th><i class="fas fa-sliders-h"></i></th>
        </tr>
        </thead>
        <tbody>
        @foreach($article as $a)
        <tr>
        <td>{{$a->id}}</td>
        <td>{{$a->title}}</td>
        <td>{{$a->created_at}}</td>
        <td><img src="{{asset('/storage/'.$a->featured_image) }}" alt="imageCap"></td>
        <td><a href="editUser/edit/{{ $a->id }}" class="badge badge-warning">Edit</a>
            <a href="User/delete/{{ $a->id }}" class="badge badge-danger">Hapus</a>
        </td>

        </tr>
        @endforeach
        </tbody>
    </table>
    <a href="addUser/add" class="btn btn-warning float-right">Tambah Data</a>
    <a href="/user/coba_pdf" class="btn btn-warning" target="_blank">CETAK PDF</a>
</div>
@endsection 