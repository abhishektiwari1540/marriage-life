@extends('admin.layouts.layout')
@section('content')

<style>
	.invalid-feedback {
		display: inline;
	}
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="content  d-flex flex-column flex-column-fluid" id="kt_content">
	<div class="subheader py-2 py-lg-4  subheader-solid " id="kt_subheader">
		<div class=" container-fluid  d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
			<div class="d-flex align-items-center flex-wrap mr-1">
				<div class="d-flex align-items-baseline flex-wrap mr-5">
					<h5 class="text-dark font-weight-bold my-1 mr-5">
						Edit  {{Config('constants.NUMEROLOGY_PAGE_CONTENT.NUMEROLOGY_PAGE_CONTENT_TITLE')}}
					</h5>
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
			<form action="{{route('numerology.updatePageContent',array(base64_encode($modelDetails->id)))}}" method="post" class="mws-form" autocomplete="off" enctype="multipart/form-data">
				@csrf
				<div class="card">
					<div class="card-body">
						<div class="row">
							<div class="col-xl-1"></div>
							<div class="col-xl-10">
								<!-- <h3 class="mb-10 font-weight-bold text-dark">
									Page Content
								</h3> -->
								<div class="row">
									<!-- section one start -->
									<div class="col-xl-6">
										<div class="form-group">
											<label for="TitleSectionOne">Section One Title</label><span class="text-danger"> * </span>
											<input type="text" name="title_section_one" class="form-control form-control-solid form-control-lg  @error('title_section_one') is-invalid @enderror" value="{{old('title_section_one')??$modelDetails->title_section_one}}" accept="image/*" id="TitleSectionOne">
											@if ($errors->has('title_section_one'))
											<div class=" invalid-feedback">
												{{ $errors->first('title_section_one') }}
											</div>
											@endif
										</div>
									</div>
									<div class="col-xl-6">
										<div class="form-group">
											<label for="imageSectionOne">Section One Image</label><span class="text-danger"> * </span>
											<input type="file" name="image_section_one" class="form-control form-control-solid form-control-lg  @error('image_section_one') is-invalid @enderror" id="imageSectionOne">
											@if(!empty($modelDetails->image_section_one))
											<a class="fancybox-buttons" data-fancybox-group="button" href="{{$modelDetails->image_section_one??''}}">
												<img height="100" width="100" src="{{$modelDetails->image_section_one??''}}" />
											</a>
											@endif
											@if ($errors->has('image_section_one'))
											<div class=" invalid-feedback">
												{{ $errors->first('image_section_one') }}
											</div>
											@endif
										</div>
									</div>
									<div class="col-xl-12 mb-5">
										<div class="form-group">
											<label for="descriptionSectionOne">Section One Description</label><span class="text-danger"> * </span>
											<textarea name="description_section_one" class="form-control textarea form-control-solid form-control-lg  @error('description_section_one') is-invalid @enderror" cols="30" rows="5">{{old('description_section_one')??$modelDetails->description_section_one}}</textarea>
											@if ($errors->has('description_section_one'))
											<div class=" invalid-feedback">
												{{ $errors->first('description_section_one') }}
											</div>
											@endif
										</div>
									</div>
									<div class="col-xl-6">
										<div class="form-group">
											<label for="ButtonTitle">Button Title</label><span class="text-danger"> * </span>
											<input type="text" name="section_one_button_title" class="form-control form-control-solid form-control-lg  @error('section_one_button_title') is-invalid @enderror" value="{{old('section_one_button_title')??$modelDetails->section_one_button_title}}" accept="image/*" id="TitleSectionOne">
											@if ($errors->has('section_one_button_title'))
											<div class=" invalid-feedback">
												{{ $errors->first('section_one_button_title') }}
											</div>
											@endif
										</div>
									</div>
									<div class="col-xl-6">
										<div class="form-group">
											<label for="ButtonLink">Button Link</label><span class="text-danger"> * </span>
											<input type="text" name="section_one_button_link" class="form-control form-control-solid form-control-lg  @error('section_one_button_link') is-invalid @enderror" value="{{old('section_one_button_link')??$modelDetails->section_one_button_link}}" accept="image/*" id="TitleSectionOne">
											@if ($errors->has('section_one_button_link'))
											<div class=" invalid-feedback">
												{{ $errors->first('section_one_button_link') }}
											</div>
											@endif
										</div>
									</div>
									<!-- section one end -->

									<!-- section two start -->
									<div class="col-xl-6">
										<div class="form-group">
											<label for="TitleSectionTwo">Section Two Title</label><span class="text-danger"> * </span>
											<input type="text" name="title_section_two" class="form-control form-control-solid form-control-lg  @error('title_section_two') is-invalid @enderror" value="{{old('title_section_two')??$modelDetails->title_section_two}}" accept="image/*" id="TitleSectionOne">
											@if ($errors->has('title_section_two'))
											<div class=" invalid-feedback">
												{{ $errors->first('title_section_two') }}
											</div>
											@endif
										</div>
									</div>
									<div class="col-xl-6">
										<div class="form-group">
											<label for="imageSectionTwo">Section Two Image</label><span class="text-danger"> * </span>
											<input type="file" name="image_section_two" class="form-control form-control-solid form-control-lg  @error('image_section_two') is-invalid @enderror" id="imageSectionOne">
											@if(!empty($modelDetails->image_section_two))
											<a class="fancybox-buttons" data-fancybox-group="button" href="{{$modelDetails->image_section_two??''}}">
												<img height="100" width="100" src="{{$modelDetails->image_section_two??''}}" />
											</a>
											@endif
											@if ($errors->has('image_section_two'))
											<div class=" invalid-feedback">
												{{ $errors->first('image_section_two') }}
											</div>
											@endif
										</div>
									</div>
									<div class="col-xl-12 mb-6">
										<div class="form-group">
											<label for="ShortDescriptionSectionTwo">Section Two Short Description</label><span class="text-danger"> * </span>
											<textarea name="short_description_section_two" class="form-control form-control-solid form-control-lg  @error('short_description_section_two') is-invalid @enderror" cols="30" rows="5">{{old('short_description_section_two')??$modelDetails->short_description_section_two}}</textarea>
											@if ($errors->has('short_description_section_two'))
											<div class=" invalid-feedback">
												{{ $errors->first('short_description_section_two') }}
											</div>
											@endif
										</div>
									</div>
									<div class="col-xl-12 mb-5">
										<div class="form-group">
											<label for="descriptionSectionTwo">Section Two Description</label><span class="text-danger"> * </span>
											<textarea name="description_section_two" class="form-control textarea form-control-solid form-control-lg  @error('description_section_two') is-invalid @enderror" cols="30" rows="5">{{old('description_section_two')??$modelDetails->description_section_two}}</textarea>
											@if ($errors->has('description_section_two'))
											<div class=" invalid-feedback">
												{{ $errors->first('description_section_two') }}
											</div>
											@endif
										</div>
									</div>
									<!-- section two end -->

									<!-- section three start -->
									<div class="col-xl-6">
										<div class="form-group">
											<label for="TitleSectionThree">Section Three Title</label><span class="text-danger"> * </span>
											<input type="text" name="title_section_three" class="form-control form-control-solid form-control-lg  @error('title_section_three') is-invalid @enderror" value="{{old('title_section_three')??$modelDetails->title_section_three}}" accept="image/*" id="TitleSectionOne">
											@if ($errors->has('title_section_three'))
											<div class=" invalid-feedback">
												{{ $errors->first('title_section_three') }}
											</div>
											@endif
										</div>
									</div>
									<div class="col-xl-6">
										<div class="form-group">
											<label for="imageSectionThree">Section Three Image</label><span class="text-danger"> * </span>
											<input type="file" name="image_section_three" class="form-control form-control-solid form-control-lg  @error('image_section_three') is-invalid @enderror" id="imageSectionOne">
											@if(!empty($modelDetails->image_section_three))
											<a class="fancybox-buttons" data-fancybox-group="button" href="{{$modelDetails->image_section_three??''}}">
												<img height="100" width="100" src="{{$modelDetails->image_section_three??''}}" />
											</a>
											@endif
											@if ($errors->has('image_section_three'))
											<div class=" invalid-feedback">
												{{ $errors->first('image_section_three') }}
											</div>
											@endif
										</div>
									</div>
									<div class="col-xl-12">
										<div class="form-group">
											<label for="descriptionSectionThree">Section Three Description</label><span class="text-danger"> * </span>
											<textarea name="description_section_three" class="form-control textarea form-control-solid form-control-lg  @error('description_section_three') is-invalid @enderror" cols="30" rows="5">{{old('description_section_three')??$modelDetails->description_section_three}}</textarea>
											@if ($errors->has('description_section_three'))
											<div class=" invalid-feedback">
												{{ $errors->first('description_section_three') }}
											</div>
											@endif
										</div>
									</div>
									<!-- section three end -->


								</div>
								<div class="d-flex justify-content-between border-top mt-5 pt-10">
									<div>
										<button button type="submit" onclick="submit_form();" class="btn btn-success font-weight-bold text-uppercase px-9 py-4">
											Update
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
<script src="{{ asset('/js/ckeditor/ckeditor.js') }}"></script>
<script>
	document.addEventListener('DOMContentLoaded', function() {
		var textareas = document.querySelectorAll('.textarea');
		textareas.forEach(function(element) {
			CKEDITOR.replace(element, {
				filebrowserUploadUrl: '<?php echo URL()->to('base/uploader'); ?>',
				removeButtons: 'NewPage,Preview,Print,Templates,Cut,Copy,Paste,PasteText,PasteFromWord,Save,PasteFromWord,Undo,Redo,Find,Replace,SelectAll,Form,Checkbox,RadioButton,HiddenField,Strike,Subscript,Superscript,Language,Link,Unlink,Anchor,ShowBlocks',
				enterMode: CKEDITOR.ENTER_BR
			});
			CKEDITOR.config.allowedContent = true;
			CKEDITOR.config.removePlugins = 'scayt';
		});
	});
</script>
@stop