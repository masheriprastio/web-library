@extends('master')

@section('content')

<div class="card">
	<div class="card-header">Edit Data</div>
	<div class="card-body">
		<form method="post" action="{{ route('activity.update', $activity->id) }}" enctype="multipart/form-data">
			@csrf
			@method('PUT')
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Nama Kegiatan</label>
				<div class="col-sm-10">
					<input type="text" name="activity_name" class="form-control" value="{{ $activity->nama_kegiatan }}" />
				</div>
			</div>
			<div class="text-center">
				<input type="hidden" name="hidden_id" value="{{ $activity->id }}" />
				<input type="submit" class="btn btn-primary" value="Edit" />
			</div>
		</form>
	</div>
</div>
<script>
</script>

@endsection('content')