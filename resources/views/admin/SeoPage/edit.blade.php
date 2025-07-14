@extends('admin.layouts.layout')
@section('content')
<script src="ckeditor/ckeditor.js"></script>
<!--begin::Content-->
<div class="content  d-flex flex-column flex-column-fluid" id="kt_content">
	<!--begin::Subheader-->
	<div class="subheader py-2 py-lg-4  subheader-solid " id="kt_subheader">
		<div class=" container-fluid  d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
			<!--begin::Info-->
			<div class="d-flex align-items-center flex-wrap mr-1">
				<!--begin::Page Heading-->
				<div class="d-flex align-items-baseline flex-wrap mr-5">
					<!--begin::Page Title-->
					<h5 class="text-dark font-weight-bold my-1 mr-5">
					Edit  {{Config('constants.SEO.SEO_TITLE')}}  </h5>
					<!--end::Page Title-->

					<!--begin::Breadcrumb-->
					<ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
						<li class="breadcrumb-item">
							<a href="{{ route('dashboard')}}" class="text-muted">Dashboard</a>
						</li>
						<li class="breadcrumb-item">
							<a href="{{URL::to('adminpnlx/seo-page-manager')}}" class="text-muted"> {{Config('constants.SEO.SEO_TITLE')}} </a>
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

			{{ Form::open(['role' => 'form','url' => 'adminpnlx/seo-page-manager/edit-doc/'.$doc->id,'class' => 'mws-form','enctype'=> 'multipart/form-data',"autocomplete"=>"off"]) }}

			<div class="card card-custom gutter-b">
				
				<div class="card-body">
					<div class="tab-content">
						<div class="row">

							<div class="col-xl-12">	
								<div class="row">
									<div class="col-xl-6">
										<!--begin::Input-->
										<div class="form-group">

											{!! HTML::decode( Form::label('page_id',trans("Page ID").'<span class="text-danger"> * </span>')) !!}

											{{ Form::text("page_id",$doc->page_id, ['class' => 'form-control form-control-solid form-control-lg '.($errors->has('page_id') ? 'is-invalid':''),"readonly"]) }}
											<div class="invalid-feedback"><?php echo $errors->first('page_id'); ?></div>
											Example:- about-us mean after website url

										</div>
										<!--end::Input-->
									</div>

									<div class="col-xl-6">
										<!--begin::Input-->
										<div class="form-group">

											{!! HTML::decode( Form::label('page_name',trans("Page Name").'<span class="text-danger"> * </span>')) !!}

											{{ Form::text("page_name",$doc->page_name, ['class' => 'form-control form-control-solid form-control-lg '.($errors->has('page_name') ? 'is-invalid':'')]) }}
											<div class="invalid-feedback"><?php echo $errors->first('page_name'); ?></div>

										</div>
										<!--end::Input-->
									</div>
								

										<div class="col-xl-6">
											<!--begin::Input-->
											<div class="form-group">
												
												{!! HTML::decode( Form::label('title',trans("Title").'<span class="text-danger"> * </span>')) !!}

												{{ Form::text("title",isset($doc->title)?$doc->title:'', ['class' => 'form-control form-control-solid form-control-lg '.($errors->has('title') ? 'is-invalid':'')]) }}
												<div class="invalid-feedback"><?php echo  $errors->first('title') ; ?></div>

											
											</div>
											<!--end::Input-->
										</div>

										<div class="col-xl-6">
											<!--begin::Input-->
											<div class="form-group">
											
												{!! HTML::decode( Form::label('meta_description',trans("Meta Description").'<span class="text-danger">  </span>')) !!}

												{{ Form::textarea("meta_description",isset($doc->meta_description)?$doc->meta_description:'', ['class' => 'form-control form-control-solid form-control-lg '.($errors->has('meta_description') ? 'is-invalid':''),"rows"=>false,"cols"=>false]) }}
												<div class="invalid-feedback"><?php echo  $errors->first('meta_description'); ?></div>

												

											</div>
											<!--end::Input-->
										</div>

										<div class="col-xl-6">
											<!--begin::Input-->
											<div class="form-group">
												
												{!! HTML::decode( Form::label('meta_keywords',trans("Meta Keywords").'<span class="text-danger">  </span>')) !!}

												{{ Form::textarea("meta_keywords",isset($doc->meta_keywords)?$doc->meta_keywords:'', ['class' => 'form-control form-control-solid form-control-lg '.($errors->has('meta_keywords') ? 'is-invalid':''),"rows"=>false,"cols"=>false]) }}
												<div class="invalid-feedback"><?php echo  $errors->first('meta_keywords') ; ?></div>

												

											</div>
											<!--end::Input-->
										</div>

										<div class="col-xl-6">
											<!--begin::Input-->
											<div class="form-group">
												
												{!! HTML::decode( Form::label('twitter_card',trans("Twitter Card").'<span class="text-danger">  </span>')) !!}

												{{ Form::textarea("twitter_card",isset($doc->twitter_card)?$doc->twitter_card:'', ['class' => 'form-control form-control-solid form-control-lg '.($errors->has('twitter_card') ? 'is-invalid':''),"rows"=>false,"cols"=>false]) }}
												<div class="invalid-feedback"><?php echo  $errors->first('twitter_card') ; ?></div>

											

											</div>
											<!--end::Input-->
										</div>

										<div class="col-xl-6">
											<!--begin::Input-->
											<div class="form-group">
												
												{!! HTML::decode( Form::label('twitter_site',trans("Twitter Site").'<span class="text-danger">  </span>')) !!}

												{{ Form::textarea("twitter_site",isset($doc->twitter_site)?$doc->twitter_site:'', ['class' => 'form-control form-control-solid form-control-lg '.($errors->has('twitter_site') ? 'is-invalid':''),"rows"=>false,"cols"=>false]) }}
												<div class="invalid-feedback"><?php echo $errors->first('twitter_site') ; ?></div>

											

											</div>
											<!--end::Input-->
										</div>

										<div class="col-xl-6">
											<!--begin::Input-->
											<div class="form-group">
											
												{!! HTML::decode( Form::label('og_url',trans("Og Url").'<span class="text-danger">  </span>')) !!}

												{{ Form::textarea("og_url",isset($doc->og_url)?$doc->og_url:'', ['class' => 'form-control form-control-solid form-control-lg '.($errors->has('og_url') ? 'is-invalid':''),"rows"=>false,"cols"=>false]) }}
												<div class="invalid-feedback"><?php echo  $errors->first('og_url') ; ?></div>

												

											</div>
											<!--end::Input-->
										</div>
										<div class="col-xl-6">
											<!--begin::Input-->
											<div class="form-group">
												
												{!! HTML::decode( Form::label('og_type',trans("Og Type").'<span class="text-danger">  </span>')) !!}

												{{ Form::textarea("og_type",isset($doc->og_type)?$doc->og_type:'', ['class' => 'form-control form-control-solid form-control-lg '.($errors->has('og_type') ? 'is-invalid':''),"rows"=>false,"cols"=>false]) }}
												<div class="invalid-feedback"><?php echo  $errors->first('og_type') ; ?></div>

												

											</div>
											<!--end::Input-->
										</div>
										<div class="col-xl-6">
											<!--begin::Input-->
											<div class="form-group">
												
												{!! HTML::decode( Form::label('og_title',trans("Og Title").'<span class="text-danger">  </span>')) !!}

												{{ Form::textarea("og_title",isset($doc->og_title)?$doc->og_title:'', ['class' => 'form-control form-control-solid form-control-lg '.($errors->has('og_title') ? 'is-invalid':''),"rows"=>false,"cols"=>false]) }}
												<div class="invalid-feedback"><?php echo  $errors->first('og_title') ; ?></div>

												

											</div>
											<!--end::Input-->
										</div>
										<div class="col-xl-6">
											<!--begin::Input-->
											<div class="form-group">
												
												{!! HTML::decode( Form::label('og_description',trans("Og Description").'<span class="text-danger">  </span>')) !!}

												{{ Form::textarea("og_description",isset($doc->og_description)?$doc->og_description:'', ['class' => 'form-control form-control-solid form-control-lg '.($errors->has('og_description') ? 'is-invalid':''),"rows"=>false,"cols"=>false]) }}
												<div class="invalid-feedback"><?php echo $errors->first('og_description') ; ?></div>

												

											</div>
											<!--end::Input-->
										</div>
									</div>
								</div>
							</div>
						</div>
						
						<div class="col-xl-6">
							<!--begin::Input-->
							<div class="form-group">

								{!! HTML::decode( Form::label('og_image',trans("Og Image").'<span class="text-danger">  </span>')) !!}

								{{ Form::file('og_image',['class'=>'form-control form-control-solid form-control-lg']) }}
								<div class="invalid-feedback"><?php echo  $errors->first('og_image') ; ?></div>
								<?php 
								$image	=	$doc->og_image;
								?>
								
								@if($doc->og_image != "")	
								<br />
								<a class="fancybox-buttons" data-fancybox-group="button" href="<?php echo Config('constants.SEO_PAGE_IMAGE_IMAGE_PATH').$doc->og_image; ?>"><img height="50" width="50" src="<?php echo Config('constants.SEO_PAGE_IMAGE_IMAGE_PATH').$doc->og_image; ?>" /></a>
								@endif



							</div>
							<!--end::Input-->
						</div>
					</div>

					<div class="d-flex justify-content-between border-top  ">

						<div style="margin-left: 20px;margin-bottom: 20px; margin-top: 10px;">
							<button	button type="submit" class="btn btn-success font-weight-bold text-uppercase px-9 py-4">
								Submit
							</button>
						</div>
					</div>
				</div>
			</div>
			{{ Form::close() }}
		</div>
	</div>
@stop