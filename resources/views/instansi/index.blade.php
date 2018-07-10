@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading"><center><h3>Data Instansi</h3></center>
			  	<div class="panel-title pull-right"> <a href="{{ route('instansi.create') }}" class="btn btn-outline-info">
                        <i class="fa fa-pencil-square-o"></i>    
                        Tambah Data
                    </a>
			  </div>
			  <div class="panel-body">
			  <div class="table-responsive table--no-card m-b-40">
				  <table class="table table-borederless table-striped table-earning">
				  	<thead>
			  		<tr>
			  		  <th>No</th>
					  <th>Instansi</th>
					  <th>Kabupaten/Kota</th>
					  <th>Telepon</th>
					  <th>E-mail</th>
					  <th>Alamat</th>
					  <th>Kepala </th>
					  <th>NIP Kepala</th>
					  <th colspan="3">Action</th>
			  		</tr>
				  	</thead>
				  	<tbody>
				  		<?php $nomor = 1; ?>
				  		@php $no = 1; @endphp
				  		@foreach($a as $data)
				  	  <tr>
				    	<td>{{ $no++ }}</td>
				    	<td>{{ $data->nama_instansi }}</td>
				    	<td>{{ $data->kab_kota }}</td>
				    	<td>0{{ $data->telp }}</td>
				    	<td>{{ $data->email }}</td>
				    	<td>{{ $data->alamat }}</td>
				    	<td>{{ $data->kepala }}</td>
				    	<td>{{ $data->nip_kepala }}</td>

<td>
	<a class="btn btn-warning" href="{{ route('instansi.edit',$data->id) }}">Edit</a>
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
</div>
@endsection










