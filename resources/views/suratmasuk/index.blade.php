@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading"><center><h3> Data Surat Masuk</h3></center> 
			  	<div class="panel-title pull-right"> <a href="{{ route('sm.create') }}" class="btn btn-outline-info">
                <i class="fa fa-pencil-square-o"></i> Tambah Data</a>
			  </div>

			
			  <div class="panel-body"> 
			  	<div class="table-responsive table--no-card m-b-40">
				  <table class="table table-borederless table-striped table-earning">
				  	<thead>
			  		<tr>
			  		  <th>No</th>
					  <th>Nomor Surat</th>
					  <th>Tanggal Surat</th>
					  <th>Instansi</th>
					  <th>Perihal</th>
					  <th>Disposisi</th>
					  <th>Ket. Disposisi</th>
					  
					  <th colspan="3">Action</th>
			  		</tr>
				  	</thead>
				  	<tbody>
				  		<?php $nomor = 1; ?>
				  		@php $no = 1; @endphp
				  		@foreach($sm as $data)
				  	  <tr>
				    	<td>{{ $no++ }}</td>
				    	<td>{{ $data->no_surat }}</td>
				    	<td>{{ $data->tgl_surat }}</td>
						<td><p>{{ $data->Instansi->nama_instansi }}</p></td>
				    	<td>{{ $data->perihal }}</td>
				    	<td><p>{{ $data->Disposisi->disposisi }}</p></td>
				    	<td><p>{{ $data->ket_disposisi }}</p></td>
				    	

						<td>
							<a class="btn btn-warning" href="{{ route('sm.edit',$data->id) }}">Edit</a>
						</td>
					
						<td>
							<a href="{{ route('sm.show',$data->id) }}" class="btn btn-success">Show</a>
						</td>

						<td>
							<form method="post" action="{{ route('sm.destroy',$data->id) }}">
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