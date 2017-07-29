@extends('layouts.master')
@section('isi')

		@foreach($ortu as $data) <hr>
		Nama Ayah : {{$data->nama_ayah}} <br>
		Umur Ayah : {{$data->umur_ayah}} <br>
		Nama Ibu  : {{$data->nama_ibu}} <br>
		Umur Ibu  : {{$data->umur_ibu}} <br>
		Nama Anak :
		@foreach($data->siswa as $key)
		<li>{{ $key->nama}}</li>
		@endforeach
		<hr>
		@endforeach

@endsection