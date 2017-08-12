<!-- index.blade.php -->
@extends('layouts.app')
@section('content')
  <div class="container-fluid">
    <a href="{{url('/home/create')}}" class="btn btn-success btn-block">+ Add Guru</a>
    <br>
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
        <td><a href="{{action('GuruController@edit', $post['id_guru'])}}" class="btn btn-primary btn-block">Edit</a></td>
        <td>
        <form action="{{action('GuruController@destroy', $post['id_guru'])}}" method="post">
            {{csrf_field()}}
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger btn-block" type="submit">Delete</button>
        </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
@endsection