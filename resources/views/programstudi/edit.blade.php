@extends('layouts.admin')
@section('content')

<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Edit Program Studi
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('program_studis.update',$programstudi->id) }}" method="post" >
			  		<input name="_method" type="hidden" value="PATCH">
        			{{ csrf_field() }}
			  		
			  		<div class="form-group {{ $errors->has('nama_program') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama</label>	
			  			<input type="text" name="nama_program" class="form-control" value="{{ $programstudi->nama_program }}" required>
			  			@if ($errors->has('nama_program'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nama_program') }}</strong>
                            </span>
                        @endif
			  		</div>

					<div class="form-group {{ $errors->has('ket') ? ' has-error' : '' }}">
			  			<label class="control-label">Keterangan</label>	
			  			<input type="text" name="ket" class="form-control" value="{{ $programstudi->ket }}" required>
			  			@if ($errors->has('ket'))
                            <span class="help-block">
                                <strong>{{ $errors->first('ket') }}</strong>
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