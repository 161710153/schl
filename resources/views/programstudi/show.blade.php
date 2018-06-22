@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Show Program Studi
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
        			<div class="form-group {{ $errors->has('nama_program') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama</label>	
			  			<input type="text" name="nama_program" class="form-control" value="{{ $programstudi->nama_program }}" readonly>
			  			@if ($errors->has('nama_program'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nama_program') }}</strong>
                            </span>
                        @endif
			  		</div>

					<div class="panel-body">
        			<div class="form-group {{ $errors->has('ket') ? ' has-error' : '' }}">
			  			<label class="control-label">Keterangan</label>	
			  			<input type="text" name="ket" class="form-control" value="{{ $programstudi->ket }}" readonly>
			  			@if ($errors->has('ket'))
                            <span class="help-block">
                                <strong>{{ $errors->first('ket') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		
			  	</div>
			</div>	
		</div>
	</div>
</div>
@endsection