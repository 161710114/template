@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Edit Data Surat Masuk 
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('sm.update',$sm->id) }}" method="post" >
			  		<input name="_method" type="hidden" value="PATCH">
        			{{ csrf_field() }}
			  		<div class="form-group {{ $errors->has('no_surat') ? ' has-error' : '' }}">
			  			<label class="control-label">Nomor Surat</label>	
			  			<input type="text" name="no_surat" class="form-control" value="{{ $sm->no_surat }}" required>
			  			@if ($errors->has('no_surat'))
                            <span class="help-block">
                                <strong>{{ $errors->first('no_surat') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('tgl_surat') ? ' has-error' : '' }}">
			  			<label class="control-label">Tanggal Surat</label>	
			  			<input type="date" value="{{ $sm->tgl_surat }}" name="tgl_surat" class="form-control"  required>
			  			@if ($errors->has('tgl_surat'))
                            <span class="help-block">
                                <strong>{{ $errors->first('tgl_surat') }}</strong>
                            </span>
                        @endif
			  		</div>

			  			<div class="form-group {{ $errors->has('pengirim') ? ' has-error' : '' }}">
			  			<label class="control-label">Pengirim</label>	
			  			<input type="text" value="{{ $sm->pengirim }}" name="pengirim" class="form-control"  required>
			  			@if ($errors->has('pengirim'))
                            <span class="help-block">
                                <strong>{{ $errors->first('pengirim') }}</strong>
                            </span>
                        @endif
			  		</div>

			  			<div class="form-group {{ $errors->has('perihal') ? ' has-error' : '' }}">
			  			<label class="control-label">Perihal</label>	
			  			<input type="text" value="{{ $sm->perihal }}" name="perihal" class="form-control"  required>
			  			@if ($errors->has('perihal'))
                            <span class="help-block">
                                <strong>{{ $errors->first('perihal') }}</strong>
                            </span>
                        @endif

			  		<div class="form-group {{ $errors->has('id_disposisi') ? ' has-error' : '' }}">
			  			<label class="control-label">Disposisi</label>	
			  			<select name="id_disposisi" class="form-control">
			  				@foreach($disposisi as $data)
			  				<option value="{{ $data->id }}" {{ $selectedDisposisi == $data->id ? 'selected="selected"' : '' }} >{{ $data->disposisi }}</option>
			  				@endforeach
			  			</select>
			  			@if ($errors->has('id_disposisi'))
                            <span class="help-block">
                                <strong>{{ $errors->first('id_disposisi') }}</strong>
                            </span>
                        @endif
			  		</div>

			  			<div class="form-group {{ $errors->has('ket_disposisi') ? ' has-error' : '' }}">
			  			<label class="control-label">Keterangan Disposisi</label>	
			  			<input type="text" value="{{ $sm->ket_disposisi }}" name="ket_disposisi" class="form-control"  required>
			  			@if ($errors->has('ket_disposisi'))
                            <span class="help-block">
                                <strong>{{ $errors->first('ket_disposisi') }}</strong>
                            </span>
                        @endif
			  		</div>

			  			<div class="form-group {{ $errors->has('file') ? ' has-error' : '' }}">
			  			<label class="control-label">Filet</label>	
			  			<input type="file" value="{{ $sm->file }}" name="file" class="form-control"  required>
			  			@if ($errors->has('file'))
                            <span class="help-block">
                                <strong>{{ $errors->first('file') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group">
			  			<button type="submit" class="btn btn-primary">Simpan</button>
			  		</div>
			  	</form>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection