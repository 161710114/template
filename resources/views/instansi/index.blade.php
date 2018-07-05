@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Data Instansi
			  	<div class="panel-title pull-right"><a href="{{ route('instansi.create') }}">Tambah</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<div class="table-responsive">
				  <table class="table">
				  	<thead>
			  		<tr>
			  		  <th>No</th>
					  <th>Nama Instansi</th>
					  <th>Kabuaten/Kota</th>
					  <th>Telepon</th>
					  <th>E-mail</th>
					  <th>Alamat</th>
					  <th>Kepala Instansi</th>
					  <th>NIP Kepala Instansi</th>
					  <th colspan="3">Action</th>
			  		</tr>
				  	</thead>
				  	<tbody>
				  		<?php $nomor = 1; ?>
				  		@php $no = 1; @endphp
				  		@foreach($a as $data)
				  	  <tr>
				    	<td>{{ $no++ }}</td>
				    	<td>{{ $data->namainstansi }}</td>
				    	<td>{{ $data->kabkot }}</td>
				    	<td>{{ $data->telp }}</td>
				    	<td>{{ $data->email }}</td>
				    	<td>{{ $data->alamat }}</td>
				    	<td>{{ $data->kepala }}</td>
				    	<td>{{ $data->nipkepala }}</td>

<td>
	<a class="btn btn-warning" href="{{ route('instansi.edit',$data->id) }}">Edit</a>
</td>
<td>
	<a href="{{ route('instansi.show',$data->id) }}" class="btn btn-success">Show</a>
</td>
<td>
	<form method="post" action="{{ route('instansi.destroy',$data->id) }}">
		<input name="_token" type="hidden" value="{{ csrf_token() }}">
		<input type="hidden" name="_method" value="DELETE">

		<button type="submit" class="btn btn-danger">Delete</button>
	</form>
</td>
				      </tr>
				      @endforeach	
				  	</tbody>
				  </table>
				</div>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection