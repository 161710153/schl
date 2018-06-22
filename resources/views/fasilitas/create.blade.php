@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Fasilitas
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('fasilitas.store') }}" method="post" >
			  		{{ csrf_field() }}
			  		
			  		<div class="form-group {{ $errors->has('nama') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama Fasilitas</label>	
			  			<input type="text" name="nama" class="form-control"  required>
			  			@if ($errors->has('nama'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nama') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		
			  		<div class="form-group {{ $errors->has('jumlah') ? ' has-error' : '' }}">
			  			<label class="control-label">Jumlah Fasilitas</label>	
			  			<input type="text" name="jumlah" class="form-control"  required>
			  			@if ($errors->has('jumlah'))
                            <span class="help-block">
                                <strong>{{ $errors->first('jumlah') }}</strong>
                            </span>
                        @endif
			  		</div>

					  <div class="form-group {{ $errors->has('programstudis_id') ? ' has-error' : '' }}">
			  			<label class="control-label">Program Studi</label>	
			  			<select name="programstudis_id" class="form-control">
			  				@foreach($programstudi as $data)
			  				<option value="{{ $data->id }}">{{ $data->nama_program }}</option>
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
			  			<button type="submit" class="btn btn-primary">Tambah</button>
			  		</div>
			  	</form>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection