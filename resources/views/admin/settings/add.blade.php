@extends('admin.layouts.layout')
@section('content')
<div class="content  d-flex flex-column flex-column-fluid" id="kt_content">
	<div class="subheader py-2 py-lg-4  subheader-solid " id="kt_subheader">
		<div class=" container-fluid  d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
			<div class="d-flex align-items-center flex-wrap mr-1">
				<div class="d-flex align-items-baseline flex-wrap mr-5">
					<h5 class="text-dark font-weight-bold my-1 mr-5">
						Add {{Config('constants.SETTING.SETTING_TITLE')}} </h5>
					<ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
						<li class="breadcrumb-item">
							<a href="{{ route('dashboard')}}" class="text-muted">Dashboard</a>
						</li>
						<li class="breadcrumb-item">
							<a href="{{route($model.'.index')}}" class="text-muted">{{ 'Back To Setting' }} </a>
						</li>
					</ul>
				</div>
			</div>
			@include("admin.elements.quick_links")
		</div>
	</div>
	<div class="d-flex flex-column-fluid">
		<div class=" container ">
			<form action="{{route($model.'.store')}}" method="post" class="mws-form" autocomplete="off" enctype="multipart/form-data">
				@csrf
				<div class="card">
					<div class="card-body">
						<div class="row">
							<div class="col-xl-1"></div>
							<div class="col-xl-10">
								<h3 class="mb-10 font-weight-bold text-dark">
								</h3>
								<div class="row">
									<div class="col-xl-6">
										<div class="form-group">
											<lable>Title </lable><span class="text-danger"> * </span>
											<input type="text" name="title" class="form-control form-control-solid form-control-lg  @error('title') is-invalid @enderror" value="{{old('title')}}">
											@if ($errors->has('title'))
											<div class=" invalid-feedback">
												{{ $errors->first('title') }}
											</div>
											@endif
										</div>
									</div>
									<div class="col-xl-6">
										<div class="form-group">
											<lable>key </lable><span class="text-danger"> * </span>
											<input type="text" name="key" class="form-control form-control-solid form-control-lg  @error('key') is-invalid @enderror" value="{{old('key')}}">
											@if ($errors->has('key'))
											<div class=" invalid-feedback">
												{{ $errors->first('key') }}
											</div>
											@endif
											<small>e.g., 'Site.title'</small>
										</div>
									</div>
									<div class="col-xl-6">
										<div class="form-group">
											<lable>Value </lable><span class="text-danger"> * </span>
											<textarea name="value" class="form-control form-control-solid form-control-lg  @error('value') is-invalid @enderror" cols="50" rows="10">
											{{old('value')}}</textarea>
											@if ($errors->has('value'))
											<div class=" invalid-feedback">
												{{ $errors->first('value') }}
											</div>
											@endif
										</div>
									</div>
									<div class="col-xl-6">
										<div class="form-group">
											<lable>Input Type </lable><span class="text-danger"> * </span>
											<input type="text" name="input_type" class="form-control form-control-solid form-control-lg  @error('input_type') is-invalid @enderror" value="{{old('input_type')}}">
											@if ($errors->has('input_type'))
											<div class=" invalid-feedback">
												{{ $errors->first('input_type') }}
											</div>
											@endif
											<small><em><?php echo "e.g., 'text' or 'textarea'"; ?></em></small>
										</div>
									</div>
									<div class="col-xl-6">
										<div class="form-group">
											<label for="editable">Editable<span class="text-danger"> * </span></label>
											<input checked="checked" name="editable" type="checkbox" id="editable">
											<input type="text" size="16" name="prependedInput2" id="prependedInput2" value="Editable" disabled="disabled" style="width:415px;" class="small">
										</div>
									</div>
								</div>
								<div class="d-flex justify-content-between border-top mt-5 pt-10">
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