@extends('admin.layouts.layout')
@section('content')
<?php $counter = 0; ?>
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
					Edit  {{Config('constants.ABOUT_ASTROLOGER.ABOUT_ASTROLOGER_TITLE')}}</h5>
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
			<form action="{{route('aboutAstrologerUpdate',array(base64_encode($modelDetails->id)))}}" method="post" class="mws-form" autocomplete="off" enctype="multipart/form-data">
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
											<label for="title">Title</label><span class="text-danger"> * </span>
											<input type="text" name="title" class="form-control form-control-solid form-control-lg  @error('title') is-invalid @enderror" value="{{old('title')??$modelDetails->title}}" accept="image/*">
											@if ($errors->has('title'))
											<div class=" invalid-feedback">
												{{ $errors->first('title') }}
											</div>
											@endif
										</div>
									</div>
									<div class="col-xl-6">
										<div class="form-group">
											<label for="image"> Image</label><span class="text-danger"> * </span>
											<input type="file" name="image" class="form-control form-control-solid form-control-lg  @error('image') is-invalid @enderror">
											@if(!empty($modelDetails->image))
											<a class="fancybox-buttons" data-fancybox-group="button" href="{{$modelDetails->image??''}}">
												<img height="100" width="100" src="{{$modelDetails->image??''}}" />
											</a>
											@endif
											@if ($errors->has('image'))
											<div class=" invalid-feedback">
												{{ $errors->first('image') }}
											</div>
											@endif
										</div>
									</div>
									<div class="col-xl-12">
										<div class="form-group">
											<label for="comments">Short Description</label><span class="text-danger"> * </span>
											<textarea name="short_description" class="form-control textarea form-control-solid form-control-lg  @error('short_description') is-invalid @enderror" cols="30" rows="5">{{old('short_description')??$modelDetails->short_description}}</textarea>
											@if ($errors->has('short_description'))
											<div class=" invalid-feedback">
												{{ $errors->first('short_description') }}
											</div>
											@endif
										</div>
									</div>
									<div class="col-xl-12">
										<div class="form-group">
											<label for="comments">Description</label><span class="text-danger"> * </span>
											<textarea name="description" class="form-control textarea form-control-solid form-control-lg  @error('description') is-invalid @enderror" cols="30" rows="5">{{old('description')??$modelDetails->description}}</textarea>
											@if ($errors->has('description'))
											<div class=" invalid-feedback">
												{{ $errors->first('description') }}
											</div>
											@endif
										</div>
									</div>
									 <div class="col-xl-12">
                                        <h3 class="mb-10 mt-10 font-weight-bold text-dark">
                                            Certificate & Award
                                        </h3>
                                    </div>
                                    <div class="col-xl-6">
										<div class="form-group">
											<label for="images">Images</label><span class="text-danger"> * </span>
											<input type="file" name="certificate_award_images[]" class="form-control form-control-solid form-control-lg  @error('images') is-invalid @enderror" multiple accept="image/*">
											@if ($errors->has('certificate_award_images'))
											<div class=" invalid-feedback">
												{{ $errors->first('certificate_award_images') }}
											</div>
											@endif
											<br>
											@if(!empty($modelDetails->cretificate_award))
											@foreach($modelDetails->cretificate_award as $data)
												<a class="fancybox-buttons" data-fancybox-group="button" href="{{$data->image??''}}">
													<img height="100" width="100" src="{{$data->image??''}}" />
												</a>
												<a href="{{route('awardImageDelete',$data->id)}}" class="deleteImage confirmDelete" data-id="{{$data->id}}">
													<i class="fa fa-trash-o" style="font-size:24px;color: red;"></i>
												</a>
											@endforeach
											@endif
											
										</div>
									</div>
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