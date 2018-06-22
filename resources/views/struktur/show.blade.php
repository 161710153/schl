@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Show Struktur
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
        			<div class="form-group {{ $errors->has('nama') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama truktur Organisasi</label>	
			  			<input type="text" name="nama" class="form-control" value="{{ $struktur->nama }}" readonly>
			  			@if ($errors->has('nama'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nama') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('bidang') ? ' has-error' : '' }}">
			  			<label class="control-label">Bidang</label>	
			  			<input type="text" name="bidang" class="form-control" value="{{ $struktur->bidang }}" readonly>
			  			@if ($errors->has('bidang'))
                            <span class="help-block">
                                <strong>{{ $errors->first('bidang') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		
			  	</div>
			</div>	
		</div>
	</div>
</div>
@endsection