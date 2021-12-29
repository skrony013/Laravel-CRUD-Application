
@extends('layouts.admin_layout')

@section('content')

<div class="page-wrapper">
	<div class="content container-fluid">

		<div class="page-header">
			<div class="row align-items-center">
				<div class="col">
					<h3 class="page-title">Edit Slider</h3>
					<ul class="breadcrumb">
						<li class="breadcrumb-item"><a href="{{ url('/sliders') }}">Sliders</a>
						</li>
						<li class="breadcrumb-item active">Edit Slider</li>
					</ul>
				</div>
			</div>
		</div>


		<div id="filter_inputs" class="card filter-card">
			<div class="card-body pb-0">
				<div class="row">
					<div class="col-sm-6 col-md-3">
						<div class="form-group">
							<label>Name</label>
							<input type="text" class="form-control">
						</div>
					</div>
					<div class="col-sm-6 col-md-3">
						<div class="form-group">
							<label>Email</label>
							<input type="text" class="form-control">
						</div>
					</div>
					<div class="col-sm-6 col-md-3">
						<div class="form-group">
							<label>Phone</label>
							<input type="text" class="form-control">
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-xl-8 offset-1">
				@if(session('status'))
				<h6 class="alert alert-success">{{ session('status') }}</h6>
				@endif
			</div>
		</div>
		<div class="row">
			<div class="col-xl-8 d-flex offset-1">
				<div class="card flex-fill">
					<div class="card-header">
						<h5 class="card-title">Enter Slider Info</h5>
					</div>
					<div class="card-body">
						<form action="{{ url('sliders/update/'.$slider->id) }}" method="POST" enctype="multipart/form-data">

							@csrf
							@method('PUT')

							<div class="form-group row">
								<label class="col-lg-3 col-form-label">Title</label>
								<div class="col-lg-9">
									<input type="text" class="form-control" value="{{ $slider->title }}" name="title" required>
								</div>
							</div>
							<div class="form-group row">
								<label class="col-lg-3 col-form-label">Sub Title</label>
								<div class="col-lg-9">
									<input type="text" class="form-control" value="{{ $slider->sub_title }}" name="sub_title" required>
								</div>
							</div>
							<div class="form-group row">
								<label class="col-lg-3 col-form-label">Category</label>
								<div class="col-lg-9">
									<input type="text" class="form-control" value="{{ $slider->cat_name }}" name="cat_name" required>
								</div>
							</div>
							<div class="form-group row">
								<label class="col-lg-3 col-form-label">Background Image</label>
								<div class="col-lg-9">
									<img src="{{url('upload/slider/'.$slider->bg_img)}}" class="img-fluid mb-2" style="width:110px; height: 70px;" alt="">
									<input type="file" class="form-control" name="bg_img" required>
								</div>
							</div>
							<div class="form-group row">
								<label class="col-lg-3 col-form-label">Status</label>
								<div class="col-lg-9">
									<select name="status" id="status" class="form-control" required>
										<option value="1"{{ $slider->status =="1" ? 'selected' : '' }}>Active</option>
										<option value="0"{{ $slider->status =="0" ? 'selected' : '' }}>Inactive</option>
									</select>
								</div>
							</div>
							<div class="text-right">
								<button type="submit" class="btn btn-primary">Update</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection