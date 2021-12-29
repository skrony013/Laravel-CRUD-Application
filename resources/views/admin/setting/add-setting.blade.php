
@extends('layouts.admin_layout')

@section('content')

<div class="page-wrapper">
	<div class="content container-fluid">

		<div class="page-header">
			<div class="row align-items-center">
				<div class="col">
					<h3 class="page-title">Setting</h3>
					<ul class="breadcrumb">
						<li class="breadcrumb-item"><a href="{{ url('/') }}">Dashboard</a>
						</li>
						<li class="breadcrumb-item active">Setting</li>
					</ul>
				</div>
				<div class="col-auto">
					<a href="{{ url('/edit-setting') }}" class="btn btn-primary mr-1">
						<i class="fas fa-edit"></i>
					</a>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-xl-12">
				@if(session('status'))
				<h6 class="alert alert-success">{{ session('status') }}</h6>
				@endif
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						<h5 class="card-title">Setting</h5>
					</div>
					<div class="card-body">
						<form action="{{ url('setting') }}" method="POST" enctype="multipart/form-data">
								@csrf
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>Name</label>
										<input type="text" name="site_name" class="form-control">
									</div>
									<div class="form-group">
										<label>Tagline</label>
										<input type="text" name="site_tagline" class="form-control">
									</div>
									<div class="form-group">
										<label>Description</label>
										<textarea name="site_desc" rows="5" cols="5" class="form-control" placeholder="Enter message"></textarea>
									</div>
									<div class="form-group">
										<label>Logo</label>
										<div class="row">
											<div class="col-md-2">
												<img src="" class="img-fluid mb-2" style="width:100px; height: 45px;" alt="">
											</div>
											<div class="col-md-10">
												<input type="file" name="site_logo" class="form-control">
											</div>
											
										</div>
									</div>
									<div class="form-group">
										<label>Favicon</label>
										<div class="row">
											<div class="col-md-2">
												<img src="" class="img-fluid mb-2" style="width:100px; height: 45px;" alt="">
											</div>
											<div class="col-md-10">
												<input type="file" name="site_favicon" class="form-control">
											</div>
											
										</div>
									</div>
									<div class="form-group">
										<label>Facebook</label>
										<input name="facebook" type="text" class="form-control">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Twitter</label>
										<input name="twitter" type="text" class="form-control">
									</div>
									<div class="form-group">
										<label>Instagram</label>
										<input name="instagram" type="text" class="form-control">
									</div>
									<div class="form-group">
										<label>LinkedIn</label>
										<input name="linkedin" type="text" class="form-control">
									</div>
									<div class="form-group">
										<label>Address</label>
										<input name="address" type="text" class="form-control">
									</div>
									<div class="form-group">
										<label>Email</label>
										<input name="email" type="text" class="form-control">
									</div>
									<div class="form-group">
										<label>Phone</label>
										<input name="phone" type="text" class="form-control">
									</div>
								</div>
							</div>
							<div class="text-right">
								<button type="submit" class="btn btn-primary">Submit</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection