@extends('admin.layouts.layout')
@section('content')
<div class="content  d-flex flex-column flex-column-fluid" id="kt_content">
	<div class="subheader py-2 py-lg-4  subheader-solid " id="kt_subheader">
		<div class=" container-fluid  d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
			<div class="d-flex align-items-center flex-wrap mr-1">
				<div class="d-flex align-items-baseline flex-wrap mr-5">
					<h5 class="text-dark font-weight-bold my-1 mr-5">
						Edit {{Config('constants.EMAIL_TEMPLATES.EMAIL_TEMPLATE_TITLE')}} </h5>
					<ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
						<li class="breadcrumb-item">
							<a href="{{ route('dashboard')}}" class="text-muted">Dashboard</a>
						</li>
						<li class="breadcrumb-item">
							<a href="{{ route($model.'.index')}}" class="text-muted">{{Config('constants.EMAIL_TEMPLATES.EMAIL_TEMPLATES_TITLE')}} </a>
						</li>
					</ul>
				</div>
			</div>
			@include("admin.elements.quick_links")
		</div>
	</div>
	<div class="d-flex flex-column-fluid">
		<div class=" container ">
			<form action="{{route($model.'.update',base64_encode($emailTemplate->id))}}" method="post" class="mws-form">
				@csrf
				@method('PUT')
				<div class="card card-custom gutter-b">
					@if(count($languages) > 1)
					<div class="card-header card-header-tabs-line">
						<div class="card-toolbar border-top">
							<ul class="nav nav-tabs nav-bold nav-tabs-line">
								@if(!empty($languages))
								<?php $i = 1; ?>
								@foreach($languages as $language)
								<li class="nav-item">
									<a class="nav-link {{ ($i ==  $language_code )?'active':'' }}" data-toggle="tab" href="#{{$language->title}}">
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
					@endif
					<div class="card-body">
						<div class="tab-content">
							@if(!empty($languages))
							<?php $i = 1; ?>
							@foreach($languages as $language)
							<div class="tab-pane fade {{ ($i ==  $language_code )?'show active':'' }}" id="{{$language->title}}" role="tabpanel" aria-labelledby="{{$language->title}}">
								<div class="row">
									<div class="col-xl-12">
										<div class="row">
											<div class="col-xl-6">
												<div class="form-group">
													@if($i == 1)
													<label name="{{$language->id}}.'.name'">Name</label><span class="text-danger"> * </span>
													<input type="text" name="data[{{$language->id}}][name]" class="form-control form-control-solid form-control-lg @error('name') is-invalid @enderror" value="{{$multiLanguage[$language->id]['name'] ?? ''}}">
													@if ($errors->has('name'))
													<div class="invalid-feedback">
														{{ $errors->first('name') }}
													</div>
													@endif
													@else
													<label name="data{{$language->id}}.'.name'">Name</label><span class="text-danger"> * </span>
													<input type="text" name="data[{{$language->id}}][name]" class="form-control form-control-solid form-control-lg" value="{{$multiLanguage[$language->id]['name'] ?? ''}}">
													@endif
												</div>
											</div>
											<div class="col-xl-6">
												<div class="form-group">
													@if($i == 1)
													<label name="{{$language->id}}.'.subject'">Subject</label><span class="text-danger"> * </span>
													<input type="text" name="data[{{$language->id}}][subject]" class="form-control form-control-solid form-control-lg @error('subject') is-invalid @enderror" value="{{$multiLanguage[$language->id]['subject'] ?? ''}}">
													@if ($errors->has('subject'))
													<div class="invalid-feedback">
														{{ $errors->first('subject') }}
													</div>
													@endif
													@else
													<label name="{{$language->id}}.'.subject'">Subject</label><span class="text-danger"> * </span>
													<input type="text" name="data[{{$language->id}}][subject]" class="form-control form-control-solid form-control-lg " value="{{$multiLanguage[$language->id]['subject'] ?? ''}}">
													@endif
												</div>
											</div>
											<div class="col-xl-6" style="display:none;">
												<div class="form-group">
													<label for="action">Action</label><span class="text-danger"> * </span>
													<select name="data[{{$language->id}}][action]" class="form-control form-control-solid form-control-lg" id="action">
														<option value="">{{$emailTemplate->action}}</option>
													</select>
												</div>
											</div>
											<div class="col-xl-6">
												<div class="form-group">
													<label for="Constants">Constants</label><span class="text-danger"> </span>
													<div class="row">
														<div class="col">
															<select name="constants" class="form-control form-control-solid form-control-lg" onchange="constants($i)" id="constants_{{$i}}">
																<option value="">Select One</option>
																@foreach($optionsvalue as $key => $arr)
																<option value="">{{$arr}}</option>
																@endforeach
															</select>
														</div>
														<div class="col-auto">
															<a onclick="return InsertHTML(<?php echo $i ?>)" href="javascript:void(0)" class="btn btn-lg btn-success no-ajax pull-right"><i class="icon-white "></i>{{ trans("Insert Variable") }} </a>
														</div>
													</div>
												</div>
											</div>
											<div class="col-xl-12">
												<div class="form-group">
													<div id="kt-ckeditor-1-toolbar{{$language->id}}"></div>
													@if($i == 1)
													<label for="{{$language->id}}.'.body'">Email Body </label><span class="text-danger"> * </span>
													<textarea id="body_{{$language->id}}" name="data[{{$language->id}}][body]" class="form-control form-control-solid form-control-lg  @error('body') is-invalid @enderror" value="{{old('body')}}">
													{{$multiLanguage[$language->id]['body'] ?? ''}} </textarea>
													@if ($errors->has('body'))
													<div class="invalid-feedback">
														{{ $errors->first('body') }}
													</div>
													@endif
													@else
													<label for="{{$language->id}}.'.body'">Email Body </label><span class="text-danger"> </span>
													<textarea id="body_{{$language->id}}" name="data[{{$language->id}}][body]" class="form-control form-control-solid form-control-lg " value="{{old('body')}}">
													{{$multiLanguage[$language->id]['body'] ?? ''}} </textarea>

													@endif
												</div>
												<script src="{{asset('/js/ckeditor/ckeditor.js')}}"></script>
												<script>
													 CKEDITOR.replace(<?php echo 'body_' . $language->id; ?>, {
														filebrowserUploadUrl: '<?php echo URL()->to('base/uploder'); ?>',
														removeButtons:'New Page,Preview,Print,Templates,Cut,Copy,Paste,PasteText,PasteWord,Save,PasteFromWord,Undo,Redo,Find,Replace,SelectAll,Form,Checkbox,RadioButton,HiddenField,Strike,Subscript,Superscript,Language,Link,Unlink,Anchor,ShowBlocks',
														enterMode: CKEDITOR.ENTER_BR
													});
													CKEDITOR.config.allowedContent = true;
													CKEDITOR.config.removePlugins = 'scayt';
												</script>
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
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script type='text/javascript'>
	function InsertHTML(count) {
		var str = document.getElementById('constants_' + count);
		var strUser = str.options[str.selectedIndex].text;

		if (strUser != '') {
			var newStr = '{' + strUser + '}';
			var oEditor = CKEDITOR.instances['body_' + count];
			oEditor.insertHtml(newStr);
		}
	}
</script>
<style>
	.table>thead>tr>th,
	.table>tbody>tr>th,
	.table>tfoot>tr>th,
	.table>thead>tr>td,
	.table>tbody>tr>td,
	.table>tfoot>tr>td {
		font-size: 14px !important;
		padding: 0px !important;
	}

	.table>thead>tr>th,
	.table>tbody>tr>th,
	.table>tfoot>tr>th,
	.table>thead>tr>td,
	.table>tbody>tr>td,
	.table>tfoot>tr>td {
		vertical-align: top !important;
	}

	.table-bordered>thead>tr>th,
	.table-bordered>tbody>tr>th,
	.table-bordered>tfoot>tr>th,
	.table-bordered>thead>tr>td,
	.table-bordered>tbody>tr>td,
	.table-bordered>tfoot>tr>td {
		border: 0px !important;
	}

	.table>thead>tr>th,
	.table>tbody>tr>th,
	.table>tfoot>tr>th,
	.table>thead>tr>td,
	.table>tbody>tr>td,
	.table>tfoot>tr>td {
		border-top: 0px !important;
		padding: 0px !important;
	}

	.table-bordered {
		border: 0px !important;
	}
</style>
@stop