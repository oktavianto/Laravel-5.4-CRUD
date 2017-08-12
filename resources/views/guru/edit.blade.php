<!-- edit.blade.php -->

@extends('layouts.app')
@section('content')
<div class="container">
	<form method="post" action="{{action('GuruController@update', $id_guru)}}">
		<div class="form-group row">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Nama Guru</label>
			<div class="col-sm-10">
				<input type="text" class="form-control form-control-lg" id="lgFormGroupInput" value="{{$guru->nama_guru}}" name="nama_guru">
			</div>
			<label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">NIP</label>
			<div class="col-sm-10">
				<input type="text" class="form-control form-control-lg" value="{{$guru->nip}}" id="lgFormGroupInput" placeholder="NIP" name="nip">
			</div>
			<label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Password</label>
			<div class="col-sm-10">
				<input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="Password" name="password" value="{{$guru->password}}">
			</div>
			<label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Tempat Lahir</label>
			<div class="col-sm-10">
				<input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="Tempat Lahir" name="tempat_lahir" value="{{$guru->tempat_lahir}}">
			</div>
			<label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Tanggal Lahir</label>
			<div class="col-sm-10">
				<input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="Tanggal Lahir" name="tanggal_lahir" value="{{$guru->tempat_lahir}}">
			</div>
			<label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">No Telp</label>
			<div class="col-sm-10">
				<input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="No Telp" name="no_telp" value="{{$guru->tanggal_lahir}}">
			</div>
			<label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Email</label>
			<div class="col-sm-10">
				<input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="Email" name="email" value="{{$guru->email}}">
			</div>
			<label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Level</label>
			<div class="col-sm-10">
				<input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="Level" name="level" value="{{$guru->level}}">
			</div>
		</div>
		<div class="form-group row">
			<label for="smFormGroupInput" class="col-sm-2 col-form-label col-form-label-sm">Alamat</label>
			<div class="col-sm-10">
				<textarea name="alamat" rows="8" cols="80">{{$guru->alamat}}</textarea>
			</div>
		</div>
		<div class="form-group row">
			<div class="col-md-2"></div>
			<input type="submit" value="update" class="btn btn-primary">
		</div>
	</form>
</div>
@endsection