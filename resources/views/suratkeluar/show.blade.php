@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading"><center><h3>Show Data Surat Keluar</h3></center> 
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
        			<div class="form-group">
			  			<label class="control-label">Nomor Surat</label>	
			  			<input type="number" name="no_surat" class="form-control" value="{{ $sk->no_surat }}"  readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">Tanggal Surat</label>
						<input type="date" name="tgl_surat" class="form-control" value="{{ $sk->tgl_surat }}"  readonly>
			  		</div>
			  		<div class="form-group">
			  			<label class="control-label">Pengirim</label>
						<input type="text" name="pengirim" class="form-control" value="{{ $sk->pengirim }}"  readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">Perihal</label>
						<input type="text" name="perihal" class="form-control" value="{{ $sk->perihal }}"  readonly>
			  		</div>


			  				<div class="form-group">
			  			<label class="control-label">Instansi</label>
						<input type="text" name="id_instansi" class="form-control" value="{{ $sk->Instansi->nama_instansi }}"  readonly>


			  		<div class="form-group">
			  			<label class="control-label">Alamat</label>
						<input type="text" name="alamat" class="form-control" value="{{ $sk->alamat }}"  readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">Disposisi</label>
						<input type="text" name="disposisi" class="form-control" value="{{ $sk->Disposisi->disposisi }}"  readonly>

			  		<div class="form-group">
			  			<label class="control-label">Ket. Disposisi</label>
						<input type="text" name="ket_disposisi" class="form-control" value="{{ $sk->ket_disposisi }}"  readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">File</label>
						<input type="text" name="file" class="form-control" value="{{ $sk->file }}"  readonly>
			  		</div>
			  	</div>
			</div>	
		</div>
	</div>
</div>
@endsection