@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading"><center><h3> Tambah Data Instansi</h3></center>
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('instansi.store') }}" method="post" >
			  		{{ csrf_field() }}
			  		<div class="form-group {{ $errors->has('nama_instansi') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama Instansi</label>	
			  			<input type="text" name="nama_instansi" class="form-control"  required>
			  			@if ($errors->has('nama_instansi'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nama_instansi') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('kab_kota') ? ' has-error' : '' }}">
			  			<label class="control-label">Kabupaten/Kota</label>	
			  			<input type="text" name="kab_kota" class="form-control"  required>
			  			@if ($errors->has('kab_kota'))
                            <span class="help-block">
                                <strong>{{ $errors->first('kab_kota') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('telp') ? ' has-error' : '' }}">
			  			<label class="control-label">Telepon</label>	
			  			<input type="number" name="telp" class="form-control"  required>
			  			@if ($errors->has('telp'))
                            <span class="help-block">
                                <strong>{{ $errors->first('telp') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
			  			<label class="control-label">E-mail</label>	
			  			<input type="text" name="email" class="form-control"  required>
			  			@if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('alamat') ? ' has-error' : '' }}">
			  			<label class="control-label">Alamat</label>	
			  			<input type="text" name="alamat" class="form-control"  required>
			  			@if ($errors->has('alamat'))
                            <span class="help-block">
                                <strong>{{ $errors->first('alamat') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('kepala') ? ' has-error' : '' }}">
			  			<label class="control-label">Kepala Instansi</label>	
			  			<input type="text" name="kepala" class="form-control"  required>
			  			@if ($errors->has('kepala'))
                            <span class="help-block">
                                <strong>{{ $errors->first('kepala') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('nip_kepala') ? ' has-error' : '' }}">
			  			<label class="control-label">NIP Kepala</label>	
			  			<input type="number" name="nip_kepala" class="form-control"  required>
			  			@if ($errors->has('nip_kepala'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nip_kepala') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group">
			  			<button type="submit" class="btn btn-primary">Tambah</button>
			  		</div>
			  	</form>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection