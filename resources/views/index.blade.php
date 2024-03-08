@extends('master')

@section('content')

@if($message = Session::get('success'))

<div class="alert alert-success">
	{{ $message }}
</div>

@endif

<div class="card">
	<div class="card-header">
		<div class="row">
			<div class="col col-md-6"><b>Nama Kegiatan</b></div>
			<div class="col col-md-6">
				<a href="{{ route('activity.create') }}" class="btn btn-success btn-sm float-end">Add</a>
			</div>
		</div>
	</div>
	<div class="card-body">
		<table class="table table-bordered">
			<tr>
				<th>#</th>
				<th>Nama Kegiatan</th>
				<th>Lihat Detail</th>
				<th>Edit</th>
				<th>Hapus</th>
			</tr>
			@if(count($data) > 0)

			@foreach($data as $row)

			<tr>
				<td>{{$i+=1}}</td>
				<td>{{ $row->nama_kegiatan }}</td>
				<td>
					<a href="{{ route('activity.show', $row->id) }}" class="btn btn-info fa fa-eye btn-sm">View</a>
				</td>
				<td>
					<a href="{{ route('activity.edit', $row->id) }}" class="btn btn-warning btn-sm">Edit</a>
				</td>
				<td>
					<form method="post" action="{{ route('activity.destroy', $row->id) }}">
						@csrf
						@method('DELETE')
						<input type="submit" class="btn btn-danger btn-sm" value="Delete" />
					</form>


				</td>
			</tr>

			@endforeach

			@else
			<tr>
				<td colspan="5" class="text-center">No Data Found</td>
			</tr>
			@endif
		</table>
		{!! $data->links() !!}
	</div>
</div>

@endsection