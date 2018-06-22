@extends('layouts.admin')
@section('content')

<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Edit Jabatan
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('jabatans.update',$jabatan->id) }}" method="post" >
			  		<input name="_method" type="hidden" value="PATCH">
        			{{ csrf_field() }}
			  		
			  		<div class="form-group {{ $errors->has('nm_jabatan') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama Jabatan</label>	
			  			<input type="text" name="nm_jabatan" class="form-control" value="{{ $jabatan->nm_jabatan }}" required>
			  			@if ($errors->has('nm_jabatan'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nm_jabatan') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		
			  		<div class="form-group">
			  			<button type="submit" class="btn btn-primary">Perbarui</button>
			  		</div>
			  	</form>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection