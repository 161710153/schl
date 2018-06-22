@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading"> Jabatan
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('jabatans.store') }}" method="post" >
			  		{{ csrf_field() }}
			  		
			  		<div class="form-group {{ $errors->has('nm_jabatan') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama Jabatan</label>	
			  			<input type="text" name="nm_jabatan" class="form-control"  required>
			  			@if ($errors->has('nm_jabatan'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nm_jabatan') }}</strong>
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