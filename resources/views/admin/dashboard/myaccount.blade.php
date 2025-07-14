@extends('admin.layouts.layout')
@section('content') 

<!--begin::Content-->
	<div class="content  d-flex flex-column flex-column-fluid" id="kt_content">
		<!--begin::Subheader-->
		<div class="subheader py-2 py-lg-4  subheader-solid " id="kt_subheader">
			<div
				class=" container-fluid  d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
				<!--begin::Info-->
				<div class="d-flex align-items-center flex-wrap mr-1">
					<!--begin::Page Heading-->
					<div class="d-flex align-items-baseline flex-wrap mr-5">
						<!--begin::Page Title-->
						<h5 class="text-dark font-weight-bold my-1 mr-5">
							My Account </h5>
						<!--end::Page Title-->

						<!--begin::Breadcrumb-->
						<ul
							class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
							<li class="breadcrumb-item">
								<a href="{{ route('dashboard')}}" class="text-muted">Dashboard</a>
							</li>
						</ul>
						<!--end::Breadcrumb-->
					</div>
					<!--end::Page Heading-->
				</div>
				<!--end::Info-->

				@include("admin.elements.quick_links")
			</div>
		</div>
		<!--end::Subheader-->

		<!--begin::Entry-->
		<div class="d-flex flex-column-fluid">
			<!--begin::Container-->
			<div class=" container ">
                <form action="{{route('myaccount')}}" class="mws-form" method="post">
                 @csrf
				<div class="card">
					<div class="card-body">
						<div class="row">
							<div class="col-xl-1"></div>
							<div class="col-xl-10">
								<h3 class="mb-10 font-weight-bold text-dark"></h3>
								<div class="row">
									<div class="col-xl-6">
										<!--begin::Input-->
										<div class="form-group">
                                        <label> Name</label><span class="text-danger"> * </span>
												<input type="text" name="name" class="form-control form-control-solid form-control-lg  @error('name') is-invalid @enderror" value="{{$userInfo->name ?? old('name')}}">
												@if ($errors->has('name'))
												<div class="alert invalid-feedback admin_login_alert">
													{{ $errors->first('name') }}
												</div>
												@endif
										</div>
										<!--end::Input-->
									</div>
								</div>
								<div class="row">
									<div class="col-xl-6">
										<!--begin::Input-->
										<div class="form-group">
                                        <label> Email</label><span class="text-danger"> * </span>
												<input type="text" name="email" class="form-control form-control-solid form-control-lg  @error('email') is-invalid @enderror" value="{{$userInfo->email ?? old('email')}}">
												@if ($errors->has('email'))
												<div class="alert invalid-feedback admin_login_alert">
													{{ $errors->first('email') }}
												</div>
												@endif
										</div>
										<!--end::Input-->
									</div>
								</div>
								
								<div class="d-flex justify-content-between border-top mt-5 pt-10">
									
									<div>
										<button	button type="submit" class="btn btn-success font-weight-bold text-uppercase px-9 py-4">
											Submit
										</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</ Form>
        	</div>
		</div>
	</div>
@stop
