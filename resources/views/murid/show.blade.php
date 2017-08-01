@extends('layouts.master')
@section('isi')
<div class="row">
	<center><h1>Show Data Murid</h1></center>
	<div class="panel panel-primary">
	<div class="panel-heading">Data Murid
	<div class="panel-title pull-right">
		<a href="{{ URL::previous() }}">Kembali</a>
	</div></div>

	<div class="panel-body">
	{{csrf_field()}}
			<div class="form-group">
				<label class="control-lable">Nama Murid</label>
				<input type="text" name="a" class="form-control" value="{{$murid->nama}}" readonly="">
			</div>
		
			<div class="form-group">
				<label class="control-lable">Nama Orangtua</label>
					<input type="text" name="b" readonly="" class="form-control" value="{{$murid->orangtua->nama_ayah}} dan {{$murid->orangtua->nama_ibu}}">
			</div>

			<div class="form-group">
				<label class="control-lable">Umur</label>
				<input type="number" name="c" class="form-control" value="{{$murid->umur}}" readonly="">
			</div>

			<div class="form-group">
				<label class="control-lable">Jenis Kelamin</label>
				<input type="text" name="d" class="form-control" value="{{$murid->jk}}" readonly="">
			</div>


			<div class="form-group">
				<label class="control-lable">Alamat</label>
				<input type="text" name="e" class="form-control" value="{{$murid->alamat}}" readonly="">
			</div>

				
		
	</div>
	</div>
</div>
@endsection