@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Edit Industri
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('industris.update',$industri->id) }}" method="post" >
			  		<input name="_method" type="hidden" value="PATCH">
        			{{ csrf_field() }}
			  		
			  		<div class="form-group {{ $errors->has('nama') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama Industri</label>	
			  			<input type="text" name="nama" class="form-control" value="{{ $industri->nama }}" required>
			  			@if ($errors->has('nama'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nama') }}</strong>
                            </span>
                        @endif
			  		</div>

					<div class="form-group {{ $errors->has('tahun_kerjasama') ? ' has-error' : '' }}">
			  			<label class="control-label">Tahun Kerjasama</label>	
			  			<input type="text" name="tahun_kerjasama" class="form-control" value="{{ $industri->tahun_kerjasama }}" required>
			  			@if ($errors->has('tahun_kerjasama'))
                            <span class="help-block">
                                <strong>{{ $errors->first('tahun_kerjasama') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		
					  <div class="form-group {{ $errors->has('programstudis_id') ? ' has-error' : '' }}">
			  			<label class="control-label">Program Studi</label>	
			  			<select name="programstudis_id" class="form-control">
			  				@foreach($programstudi as $data)
			  				<option value="{{ $data->id }}" {{ $selectedProgramstudi == $data->id ? 'selected="selected"' : '' }} >{{ $data->nama_program }}</option>
			  				@endforeach
			  			</select>
			  			@if ($errors->has('programstudis_id'))
                            <span class="help-block">
                                <strong>{{ $errors->first('programstudis_id') }}</strong>
                            </span>
                        @endif
			  		</div>
					  
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