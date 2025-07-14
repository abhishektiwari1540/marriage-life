@extends('admin.layouts.layout')
@section('content')
<div class="content  d-flex flex-column flex-column-fluid" id="kt_content">
	<div class="subheader py-2 py-lg-4  subheader-solid " id="kt_subheader">
		<div class=" container-fluid  d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
			<div class="d-flex align-items-center flex-wrap mr-1">
				<div class="d-flex align-items-baseline flex-wrap mr-5">
					<h5 class="text-dark font-weight-bold my-1 mr-5">
						{{ 'Edit  '}}	{{ str_replace("-", " ", ucfirst($type)) }} 	</h5>
					<ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
						<li class="breadcrumb-item">
							<a href="{{ route('dashboard')}}" class="text-muted">Dashboard</a>
						</li>
						<li class="breadcrumb-item">
							<a href="{{route($model.'.index',$type)}}" class="text-muted">{{ str_replace("-", " ", ucfirst($type)) }} </a>
						</li>
					</ul>
				</div>
			</div>
			@include("admin.elements.quick_links")
		</div>
	</div>
	<div class="d-flex flex-column-fluid">
		<div class=" container ">
        <form action="{{route($model.'.edit',array($type,base64_encode($lookups->id)))}}" method="post" class="mws-form" autocomplete="off" enctype="multipart/form-data">
                @csrf
			<div class="card card-custom gutter-b">
				<div class="card-header card-header-tabs-line">
					<div class="card-toolbar border-top">
						<ul class="nav nav-tabs nav-bold nav-tabs-line">
                        @if(!empty($languages))
                                <?php $i = 1; ?>
                                @foreach($languages as $language)
                                <li class="nav-item">
                                    <a class="nav-link {{($i==$language_code)?'active':'' }}" data-toggle="tab" href="#{{$language->title}}">
                                        <span class="symbol symbol-20 mr-3">
                                            <img src="{{url (Config::get('constants.LANGUAGE_IMAGE_PATH').$language->image)}}" alt="">
                                        </span>
                                        <span class="nav-text">{{$language->title}}</span>
                                    </a>
                                </li>
                                <?php $i++; ?>
                                @endforeach
                                @endif
						</ul>
					</div>
				</div>
				<div class="card-body">
					<div class="tab-content">
						@if(!empty($languages))
							<?php $i = 1 ; ?>
							@foreach($languages as $language)
								<div class="tab-pane fade {{ ($i ==  $language_code )?'show active':'' }}" id="{{$language->title}}" role="tabpanel" aria-labelledby="{{$language->title}}">
									<div class="row">
										<div class="col-xl-12">	
											<div class="row">
												<div class="col-xl-6">
													<div class="form-group">
														<div id="kt-ckeditor-1-toolbar{{$language->id}}"></div>
														@if($i == 1)
                                                        <lable for="{{$language->id}}.code">Code</lable><span class="text-danger"> * </span>
                                                    <input type="text" name="data[{{$language->id}}][code]" class="form-control form-control-solid form-control-lg @error('code') is-invalid @enderror" value="{{$multiLanguage[$language->id]['code'] ?? old('code')}}">
                                                    @if ($errors->has('code'))
                                                    <div class="invalid-feedback">
                                                        {{ $errors->first('code') }}
                                                    </div>
                                                    @endif													
														@else 
                                                        <lable for="{{$language->id}}.code">Code</lable><span class="text-danger">  </span>
                                                    <input type="text" name="data[{{$language->id}}][code]" class="form-control form-control-solid form-control-lg @error('code') is-invalid @enderror" value="{{$multiLanguage[$language->id]['code'] ?? old('code')}}">														
														@endif
													</div>
												</div>												
											</div>
										</div>
									</div>
								</div>
								<?php $i++; ?>
							@endforeach
						@endif
					</div>

					<div class="d-flex justify-content-between border-top mt-5 pt-10">
						<div>
							<a href="{{route($model.'.add',$type)}}" class="btn btn-danger font-weight-bold text-uppercase px-9 py-4">{{ trans('Clear') }}</a>
							
							<a href="{{route($model.'.index',$type)}}" class="btn btn-info font-weight-bold text-uppercase px-9 py-4">{{ trans('Cancel') }}</a>
						</div>
						<div>
							<button	button type="submit" class="btn btn-success font-weight-bold text-uppercase px-9 py-4">
								Submit
							</button>
						</div>
					</div>
					
				</div>
			</div>			
      </form>
		</div>
	</div>
</div>
@stop