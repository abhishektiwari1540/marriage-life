@extends('admin.layouts.layout')
@section('content')
<div class="content  d-flex flex-column flex-column-fluid" id="kt_content">
	<div class="subheader py-2 py-lg-4  subheader-solid " id="kt_subheader">
		<div class=" container-fluid  d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
			<div class="d-flex align-items-center flex-wrap mr-1">
				<div class="d-flex align-items-baseline flex-wrap mr-5">
					<h5 class="text-dark font-weight-bold my-1 mr-5">
						Change Password </h5>
					<ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
						<li class="breadcrumb-item">
							<a href="{{ route('dashboard')}}" class="text-muted">Dashboard</a>
						</li>
					</ul>
				</div>
			</div>
			@include("admin.elements.quick_links")
		</div>
	</div>
	<div class="d-flex flex-column-fluid">
		<div class=" container ">
			<form action="{{route('changedPassword')}}" class="mws-form" method="post">
				@csrf
				<div class="card">
					<div class="card-body">
						<div class="row">
							<div class="col-xl-1"></div>
							<div class="col-xl-10">
								<h3 class="mb-10 font-weight-bold text-dark"></h3>
								<div class="row">
									<div class="col-xl-6">
										<div class="form-group">
											<label> Old Password</label><span class="text-danger"> * </span>
											<input type="password" name="old_password" class="form-control form-control-solid form-control-lg  @error('old_password') is-invalid @enderror" value="{{$userDetails->last_name ?? old('old_password')}}">
											@if ($errors->has('old_password'))
											<div class="alert invalid-feedback admin_login_alert">
												{{ $errors->first('old_password') }}
											</div>
											@endif
										</div>
									</div>
									<div class="col-xl-6">
										<div class="form-group">
											<label> New Password</label><span class="text-danger"> * </span>
											<input type="password" name="new_password" class="form-control form-control-solid form-control-lg  @error('new_password') is-invalid @enderror">
											@if ($errors->has('new_password'))
											<div class="alert invalid-feedback admin_login_alert">
												{{ $errors->first('new_password') }}
											</div>
											@endif
										</div>
									</div>
									<div class="col-xl-6">
										<div class="form-group">
											<label> Confirm Password</label><span class="text-danger"> * </span>
											<input type="password" name="confirm_password" class="form-control form-control-solid form-control-lg  @error('confirm_password') is-invalid @enderror">
											@if ($errors->has('confirm_password'))
											<div class="alert invalid-feedback admin_login_alert">
												{{ $errors->first('confirm_password') }}
											</div>
											@endif
										</div>
									</div>
								</div>
								<div class="d-flex justify-content-between border-top mt-5 pt-10">
									<div>
									</div>
									<div>
										<button button type="submit" class="btn btn-success font-weight-bold text-uppercase px-9 py-4">
											Submit
										</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
@stop