@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Industri
			  	<div class="panel-title pull-right"><a href="{{ route('industris.create') }}">Tambah</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<div class="table-responsive">
				  <table class="table">
				  	<thead>
			  		<tr>
			  		  <th>No</th>
					  <th>NAMA INDUSTRI</th>
					  <th>TAHUN KERJASAMA</th>
						<th>PROGRAM STUDI</th>
					  <th colspan="3">Action</th>
			  		</tr>
				  	</thead>
				  	<tbody>
				  		@php $no = 1; @endphp
				  		@foreach($industri as $data)
				  	  <tr>
				    	<td>{{ $no++ }}</td>
				    	<td>{{ $data->nama }}</td>
				    	<td>{{ $data->tahun_kerjasama }}</td>
							<td>{{ $data->programstudi->nama_program }}</td>
						<td>
							<a class="btn btn-warning" href="{{ route('industris.edit',$data->id) }}">Edit</a>
						</td>
						<td>
							<a href="{{ route('industris.show',$data->id) }}" class="btn btn-success">Show</a>
						</td>
						<td>
							<form method="post" action="{{ route('industris.destroy',$data->id) }}">
								<input name="_token" type="hidden" value="{{ csrf_token() }}">
								<input type="hidden" name="_method" value="DELETE">

								<button type="submit" class="btn btn-danger">Delete</button>
							</form>
						</td>
				      </tr>
				      @endforeach	
				  	</tbody>
				  </table>
				</div>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection