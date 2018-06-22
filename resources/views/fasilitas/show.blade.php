@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Show Fasilitas
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
        			<div class="form-group {{ $errors->has('nama') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama Fasilitas</label>	
			  			<input type="text" name="nama" class="form-control" value="{{ $fasilitas->nama }}" readonly>
			  			@if ($errors->has('nama'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nama') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('jumlah') ? ' has-error' : '' }}">
			  			<label class="control-label">Jumlah Fasilitas</label>	
			  			<input type="text" name="jumlah" class="form-control" value="{{ $fasilitas->jumlah }}" readonly>
			  			@if ($errors->has('jumlah'))
                            <span class="help-block">
                                <strong>{{ $errors->first('jumlah') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		
					<div class="form-group {{ $errors->has('programstudis_id') ? ' has-error' : '' }}">
			  			<label class="control-label">Program Studi</label>
						<input type="text" name="programstudis_id" class="form-control" value="{{ $fasilitas->programstudi->nama_program }}"  readonly>
			  			@if ($errors->has('programstudis_id'))
                            <span class="help-block">
                                <strong>{{ $errors->first('programstudis_id') }}</strong>
                            </span>
                        @endif
			  		</div>
					  
			  	</div>
			</div>	
		</div>
	</div>
</div>
@endsection