@extends('layouts.master')
@section('isi')
<div class="row">
	<center><h1>Create Data Murid</h1></center>
	<div class="panel panel-primary">
	<div class="panel-heading">Data Murid
	<div class="panel-title pull-right">
		<a href="{{ URL::previous() }}">Kembali</a>
	</div></div>

	<div class="panel-body">
		<form action="{{route('murid.store')}}" method="post">{{csrf_field()}}
			<div class="form-group">
				<label class="control-lable">Nama Murid</label>
				<input type="text" name="a" class="form-control" required="">
			</div>
		
			<div class="form-group">
				<label class="control-lable">Nama Orangtua</label>
				<select class="form-control" name="b">
					@foreach($ortu as $data)
					<option value="{{$data->id}}">{{$data->nama_ayah}} dan {{$data->nama_ibu}}</option>
					@endforeach
				</select>
			</div>

			<div class="form-group">
				<label class="control-lable">Umur</label>
				<input type="number" name="c" class="form-control" required="">
			</div>

			<div class="form-group">
				<label class="control-lable">Jenis Kelamin</label>
				<input type="radio" name="jk" value="Laki-Laki">Laki-Laki
				<input type="radio" name="jk" value="Perempuan">Perempuan
			</div>

			<div class="form-group">
				<label class="control-lable">Alamat</label>
				<textarea class="form-control" rows="10" name="e" required=""></textarea>
			</div>

			<div class="form-group">
				<button type="submit" class="btn btn-success">Simpan</button>
				<button type="reset" class="btn btn-danger">Reset</button>
			</div>
		</form>
		
		
	</div>
	</div>
</div>
@endsection