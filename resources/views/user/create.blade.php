@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading"><center><h3> Tambah Data User</h3></center> 
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('user.store') }}" method="post" >
			  		{{ csrf_field() }}
			  		<div class="form-group {{ $errors->has('username') ? ' has-error' : '' }}">
			  			<label class="control-label">Username</label>	
			  			<input type="text" name="username" class="form-control"  required>
			  			@if ($errors->has('username'))
                            <span class="help-block">
                                <strong>{{ $errors->first('username') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
			  			<label class="control-label">Name</label>	
			  			<input type="text" name="name" class="form-control"  required>
			  			@if ($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
			  			<label class="control-label">Password</label>	
			  			<input type="password" name="password" class="form-control"  required>
			  			@if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group">
                    <label for="password-confirm" class="control-label">Confirm Password</label>
					<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
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