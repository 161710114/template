@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading"><center><h3>Tambah Data Surat Masuk</h3></center> 
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('sm.store') }}" method="post" >
			  		{{ csrf_field() }}
			  		<div class="form-group {{ $errors->has('no_surat') ? ' has-error' : '' }}">
			  			<label class="control-label">Nomor Surat</label>	
			  			<input type="number" name="no_surat" class="form-control"  required>
			  			@if ($errors->has('no_surat'))
                            <span class="help-block">
                                <strong>{{ $errors->first('no_surat') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('tgl_surat') ? ' has-error' : '' }}">
			  			<label class="control-label">Tanggal Surat</label>	
			  			<input type="date" name="tgl_surat" class="form-control"  required>
			  			@if ($errors->has('tgl_surat'))
                            <span class="help-block">
                                <strong>{{ $errors->first('tgl_surat') }}</strong>
                            </span>
                        @endif
			  		</div>
			  	
			  			<div class="form-group {{ $errors->has('id_instansi') ? ' has-error' : '' }}">
			  			<label class="control-label">Instansi</label>	
			  			<select name="id_instansi" class="form-control">
			  				@foreach($instansi as $data)
			  				<option value="{{ $data->id }}">{{ $data->nama_instansi }}</option>
			  				@endforeach
			  			</select>
			  			@if ($errors->has('id_instansi'))
                            <span class="help-block">
                                <strong>{{ $errors->first('id_instansi') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('perihal') ? ' has-error' : '' }}">
			  			<label class="control-label">Perihal</label>	
			  			<input type="text" name="perihal" class="form-control"  required>
			  			@if ($errors->has('perihal'))
                            <span class="help-block">
                                <strong>{{ $errors->first('perihal') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		
			  			<div class="form-group {{ $errors->has('id_disposisi') ? ' has-error' : '' }}">
			  			<label class="control-label">Disposisi</label>	
			  			<select name="id_disposisi" class="form-control">
			  				@foreach($disposisi as $data)
			  				<option value="{{ $data->id }}">{{ $data->disposisi }}</option>
			  				@endforeach
			  			</select>
			  			@if ($errors->has('id_disposisi'))
                            <span class="help-block">
                                <strong>{{ $errors->first('id_disposisi') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('ket_disposisi') ? ' has-error' : '' }}">
			  			<label class="control-label">Ket. Disposisi</label>	
			  			<input type="text" name="ket_disposisi" class="form-control"  required>
			  			@if ($errors->has('ket_disposisi'))
                            <span class="help-block">
                                <strong>{{ $errors->first('ket_disposisi') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('file') ? ' has-error' : '' }}">
			  			<label class="control-label">File</label>	
			  			<input type="file" name="file" class="form-control"  required>
			  			@if ($errors->has('file'))
                            <span class="help-block">
                                <strong>{{ $errors->first('file') }}</strong>
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