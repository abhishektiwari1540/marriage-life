@extends('admin.layouts.layout')
@section('content')
<div class="content  d-flex flex-column flex-column-fluid" id="kt_content">
	<div class="subheader py-2 py-lg-4  subheader-solid " id="kt_subheader">
		<div class=" container-fluid  d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
			<div class="d-flex align-items-center flex-wrap mr-1">
				<div class="d-flex align-items-baseline flex-wrap mr-5">
					<h5 class="text-dark font-weight-bold my-1 mr-5">
						{{ $prefix }} {{ trans("Setting") }}
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
			<form action="{{URL('adminpnlx/settings/prefix')}}/{{$prefix}}" method="post" class="mws-form" id="settingsForm'">
				@csrf
				<div class="card">
					<div class="card-body">
						<div class="row">
							<div class="col-xl-1"></div>
							<div class="col-xl-10">
								<h3 class="mb-10 font-weight-bold text-dark">
								</h3>
								<div class="row">
									<?php
									if (!empty($result)) {
										$i = 0;
										$half = floor(count($result) / 2);
										foreach ($result as $setting) {
											$text_extention 	= 	'';
											$key				= 	$setting['key'];
											$keyE 				= 	explode('.', $key);
											$keyTitle 			= 	$keyE['1'];

											$label = $keyTitle;
											if ($setting['title'] != null) {
												$label = $setting['title'];
											}

											$inputType = 'text';
											if ($setting['input_type'] != null) {
												$inputType = $setting['input_type'];
											} ?>
											<input type="hidden" name="Setting[{{$i}}]['type']" value="{{$inputType ?? ''}}">
											<input type="hidden" name="Setting[{{$i}}]['id']" value="{{$setting['id'] ?? ''}}">
											<input type="hidden" name="Setting[{{$i}}]['key']" value="{{$setting['key'] ?? ''}}">

											<?php
											switch ($inputType) {
												case 'text': ?>
													<div class="col-xl-6">
														<div class="form-group">
															<label><?php echo $label; ?></label>
															@if($key == "Social.facebook_link" || $key == "Site.android_link" || $key == "Site.iphone_link" || $key == "Social.instagram_link" || $key == "Social.twitter_link") -->
															<input type="{{$inputType}}" value="Setting[$i]['value']" value="{{$setting['value'] ?? ''}}" class="form-control form-control-solid form-control-lg" id="{{$key}}" ]>
															@else
															<input type="{{$inputType}}" name="Setting[{{$i}}]['value']" value="{{$setting['value'] ?? ''}}" class="form-control form-control-solid form-control-lg valid" id="{{$key}}" ]>
															@if ($key == "Payment.client_enviroment")
															<span class="mt-4" style="font-weight: 400; color: black;">e.g., 'sandbox' or 'production'</span>
														    @endif
															@endif
															<div class="invalid-feedback d-block"></div>
														</div>
													</div>
												<?php
													
													break;
												case 'select': ?>
													<div class="col-xl-6">
														<div class="form-group">
															<label><?php echo $label; ?></label>
															<select name="Setting[{{$i}}]['value']" class="form-control form-control-solid form-control-lg" id="{{$key}}">
																<option value="pay_later">Pay Later</option>
																<option value="pay_now">Pay Now</option>
															</select>
															<div class="invalid-feedback d-block"></div>
														</div>
													</div>
												<?php
													break;
												case 'textarea': ?>
													<div class="col-xl-6">
														<div class="form-group">
															<label><?php echo $label; ?></label>
															<textarea name="Setting[{{$i}}]['value']" class="form-control form-control-solid form-control-lg  textarea_resize" rows=3,cols=3></textarea>
														</div>
													</div>
												<?php
												break;
													case 'checkbox': ?>
													<div class="col-xl-6">
														<div class="form-group">
															<label style="width:300px;"><?php echo $label; ?></label>
															<div class="mws-form-item clearfix">
																<ul class="mws-form-list inline">
																	<?php
																	$checked = ($setting['value'] == 1) ? true : false;
																	$val	 = (!empty($setting['value'])) ? $setting['value'] : 0;
																	?>
																	<input type="checkbox" name="Setting[{{ $i }}]['value']" value="{{ $val ?? '' }}" {{ $setting['value'] == 1 ? 'checked' : '' }}>

																</ul>
															</div>
														</div>
													</div>
												<?php
													break;
													
												}
												if ($i == $half)
													echo '</div><div class="row">';
												$i++;
													}
												}
												?>
								</div>
								<div class="d-flex justify-content-between border-top mt-5 pt-10">
									<div>
										<input type="button" onclick="submit_form();" value="{{ trans('Submit') }}" class="btn btn-success font-weight-bold text-uppercase px-9 py-4">
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
<script type="text/javascript">
	function isEmail(email) {
		var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		return regex.test(email);
	}

	function isUrl(url) {
		var regex = /^(http|https)?:\/\/[a-zA-Z0-9-\.]+\.[a-z]{2,4}/;
		return regex.test(url);
	}

	var empty_msg = 'This field is required';
	var urls_msg = 'Please enter url only';
	var numuric_empty_msg = 'This field is allow only numuric value';
	var image_validation = 'Please upload a valid image. Valid extensions are jpg, jpeg, png, jpeg';
	var allowedExtensions = ['gif', 'GIF', 'jpeg', 'JPEG', 'PNG', 'png', 'jpg', 'JPG'];

	function submit_form() {
		var $inputs = $('.mws-form :input.valid');
		var error = 0;
		$inputs.each(function() {
			if ($(this).val().trim() == '') {
				$(this).next().html(empty_msg);
				error = 1;
			} else {
				if($(this).attr('id') == 'Site.from_email') {
					if (!isEmail($(this).val().trim())) {
						$(this).next().html("Please enter a valid email");
						error = 1;
					} else {
						$(this).next().html("");
					}
				}else if($(this).attr('id') == 'Contact.admin_email') {
					if (!isEmail($(this).val().trim())) {
						$(this).next().html("Please enter a valid email");
						error = 1;
					} else {
						$(this).next().html("");
					}
				}else if($(this).attr('id') == 'Contact.email_address') {
					if (!isEmail($(this).val().trim())) {
						$(this).next().html("Please enter a valid email");
						error = 1;
					} else {
						$(this).next().html("");
					}
				}else if ($(this).attr('id') == 'Reading.records_per_page') {
					if (!$.isNumeric($(this).val().trim())) {
						$(this).next().html(numuric_empty_msg);
						error = 1;
					} else {
						$(this).next().html("");
					}
				}else if ($(this).attr('id') == 'Social.youtube') {
					if (!isUrl($(this).val().trim())) {
						$(this).next().html(urls_msg);
						error = 1;
					} else {
						$(this).next().html("");
					}
				}else if ($(this).attr('id') == 'Social.facebook') {
					if (!isUrl($(this).val().trim())) {
						$(this).next().html(urls_msg);
						error = 1;
					} else {
						$(this).next().html("");
					}
				}else if ($(this).attr('id') == 'Social.twitter') {
					if (!isUrl($(this).val().trim())) {
						$(this).next().html(urls_msg);
						error = 1;
					} else {
						$(this).next().html("");
					}
				}else if ($(this).attr('id') == 'Social.linkedin') {
					if (!isUrl($(this).val().trim())) {
						$(this).next().html(urls_msg);
						error = 1;
					} else {
						$(this).next().html("");
					}
				}else {
					$(this).next().html("");
				}
			}
		});
		if (error == 0) {
			$('.mws-form').submit();
		}
	}
	$('#settingsForm').each(function() {
		$(this).find('input').keypress(function(e) {
			if (e.which == 10 || e.which == 13) {
				submit_form();
				return false;
			}
		});
	});
</script>
@stop