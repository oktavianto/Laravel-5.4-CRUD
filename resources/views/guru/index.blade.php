<!-- index.blade.php -->
@extends('layouts.app')
@section('content')
  <div class="container-fluid">
    <table class="table table-striped table-responsive table-bordered">
    <thead>
      <tr>
        <th>NIP</th>
        <th>Nama Guru</th>
        <th>Edit</th>
        <th>Hapus</th>
      </tr>
    </thead>
    <tbody>
      @foreach($guru as $post)
      <tr>
        <td>{{$post['nip']}}</td>
        <td>{{$post['nama_guru']}}</td>
        <td><a href="{{action('GuruController@edit', $post['id_guru'])}}" class="btn btn-warning">Edit</a></td>
        <td><a href="{{action('GuruController@destroy', $post['id_guru'])}}" class="btn btn-danger">Delete</a></td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
@endsection