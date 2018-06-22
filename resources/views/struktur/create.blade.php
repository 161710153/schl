@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Struktur
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('strukturs.store') }}" method="post" >
			  		{{ csrf_field() }}
			  		
			  		<div class="form-group {{ $errors->has('nama') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama Struktur Organisasi </label>	
			  			<input type="text" name="nama" class="form-control"  required>
			  			@if ($errors->has('nama'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nama') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		
			  		<div class="form-group {{ $errors->has('bidang') ? ' has-error' : '' }}">
			  			<label class="control-label">Bidang</label>	
			  			<input type="text" name="bidang" class="form-control"  required>
			  			@if ($errors->has('bidang'))
                            <span class="help-block">
                                <strong>{{ $errors->first('bidang') }}</strong>
                            </span>
                        @endif
			  		</div>

					  <div class="form-group {{ $errors->has('programstudis_id') ? ' has-error' : '' }}">
			  			<label class="control-label">Program Studi</label>	
			  			<select name="programstudis_id" class="form-control">
			  				@foreach($programstudi as $data)
			  				<option value="{{ $data->id }}">{{ $data->nama }}</option>
			  				@endforeach
			  			</select>
			  			@if ($errors->has('programstudis_id'))
                            <span class="help-block">
                                <strong>{{ $errors->first('programstudis_id') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		</div
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