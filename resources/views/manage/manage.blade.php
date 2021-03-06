@extends('layouts.main')

@section('title', 'Manage')

@section('content')

<div class="container" style="padding-top: 90px">
    <div class="textCake text-warning" style="padding-top: 70px">
        <p>TABEL</p>
      </div>
    <table class="table table-bordered table-striped text-black" style="text-align: center" bgcolor='DAA520'>
        <thead>
        <tr>
        <th>No</th>
        <th>JUDUL</th>
        <th>TANGGAL</th>
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
        <td><a href="manage/edit/{{ $a->id }}" class="badge badge-warning">Edit</a>
            <a href="manage/delete/{{ $a->id }}" class="badge badge-danger">Hapus</a>
        </td>

        </tr>
        @endforeach
        </tbody>
    </table>
    <a href="manage/add" class="btn btn-warning float-right">Tambah Data</a>
    <a href="/manage/cetak_pdf" class="btn btn-warning" target="_blank">CETAK PDF</a>
</div>
@endsection 