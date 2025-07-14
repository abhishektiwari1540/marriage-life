@extends('admin.layouts.layout')
@section('content')
<div class="content  d-flex flex-column flex-column-fluid" id="kt_content">
	<div class="subheader py-2 py-lg-4  subheader-solid " id="kt_subheader">
		<div class=" container-fluid  d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
			<div class="d-flex align-items-center flex-wrap mr-1">
				<div class="d-flex align-items-baseline flex-wrap mr-5">
					<h5 class="text-dark font-weight-bold my-1 mr-5">
						Edit {{Config('constants.ACL.ACL_TITLE')}} </h5>
					<ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
						<li class="breadcrumb-item">
							<a href="{{ route('dashboard')}}" class="text-muted">Dashboard</a>
						</li>
						<li class="breadcrumb-item">
							<a href="{{ route($model.'.index')}}" class="text-muted">{{Config('constants.ACL.ACL_TITLE')}}</a>
						</li>
					</ul>
				</div>
			</div>
			@include("admin.elements.quick_links")
		</div>
	</div>
	<div class="d-flex flex-column-fluid">
		<div class=" container ">
			<form action="{{route($model.'.update',base64_encode($aclDetails->id))}}" method="post" class="mws-form" autocomplete="off" enctype="multipart/form-data">
			@csrf
                @method('PUT')
				<div class="card">
					<div class="card-body">
						<div class="row">
							<div class="col-xl-1"></div>
							<div class="col-xl-10">
								<h3 class="mb-10 font-weight-bold text-dark">
									{{Config('constants.ACL.ACL_TITLE')}} Information
								</h3>
								<div class="row">
									<div class="col-xl-6">
										<div class="form-group">
											<label for="parent_id">Select Parent</label><span class="text-danger"> </span>
											<select class="form-control form-control-solid form-control-lg" name="parent_id">
												<option value="">Select Parent </option>
												@foreach($parent_list as $list)
                                                <option value="{{$list->id}}" {{$list->id == $aclDetails->parent_id ? 'selected' : '' }}>{{$list->title}}</option>
                                                @endforeach

											</select>
										</div>
									</div>
									<div class="col-xl-6">
										<div class="form-group">
											<label for="title">Title </label><span class="text-danger"> * </span>
											<input type="text" name="title" class="form-control form-control-solid form-control-lg  @error('title') is-invalid @enderror" value="{{$aclDetails->title ?? ''}}">
											@if ($errors->has('title'))
											<div class="invalid-feedback">
												{{ $errors->first('title') }}
											</div>
											@endif
										</div>
									</div>
									<div class="col-xl-6">
										<div class="form-group">
											<label for="path">Path </label><span class="text-danger"> * </span>
											<input type="text" name="path" class="form-control form-control-solid form-control-lg  @error('path') is-invalid @enderror" value="{{$aclDetails->path ?? ''}}">
											<span>Without Plugin URL: javascript::void();</span>
											@if ($errors->has('path'))
											<div class="invalid-feedback">
												{{ $errors->first('path') }}
											</div>
											@endif
										</div>
									</div>
									<div class="col-xl-6">
										<div class="form-group">
											<label for="module_order">Order </label><span class="text-danger"> * </span>
											<input type="text" name="module_order" class="form-control form-control-solid form-control-lg  @error('module_order') is-invalid @enderror" value="{{$aclDetails->module_order ?? ''}}">
											@if ($errors->has('module_order'))
											<div class="invalid-feedback">
												{{ $errors->first('module_order') }}
											</div>
											@endif
										</div>
									</div>
									<div class="col-xl-12">
										<div class="form-group">
											<label for="icon">Icon </label><span class="text-danger"> </span>
											<textarea name="icon" class="form-control form-control-solid form-control-lg">{{$aclDetails->icon ?? ''}} </textarea>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<?php $counter = 0; ?>
										@if(!Empty($modelss->get_admin_module_action()))
										<table class="table table-bordered lastsizedetailsrow">
											<thead>
												<th colspan="2">
													<center>{{ trans("ACTION TYPE") }}</center>
												</th>
												<th><input style="float:right;" type="button" value="Add More" class="btn btn-info" onclick="acco_add_more_size();" /></th>
											</thead>
											<tr>
												<th width="30%">
													<center>{{ trans("Name") }} </center>
												</th>
												<th width="70%">
													<center>{{ trans("Function Name") }} </center>
												</th>
												<th>
												</th>
											</tr>
											@foreach($modelss->get_admin_module_action as $record)
											<tr class="panel panel-default delete_add_more_accor_{{$counter}}" rel="{{$counter}}">
												<td>
													<div class="mws-form-item">
														<input type="text" name="data[{{$counter}}][name]" data-rel={{$counter}} class="form-control" value="{{$record->name ?? ''}}">
													</div>
												</td>
												<td>
													<div class="mws-form-item">
														<input type="text" name="data[{{$counter}}][function_name]" data-rel={{$counter}} class="form-control" value="{{$record->function_name ?? ''}}" id="input_{{$record->id}}">
													</div>
												</td>
												<td>
													<a href="javascript:void(0);" onclick="del_row('{{$counter}}','{{$record->id}}');" class="btn btn-danger btn-small">
														<i class="fa fa-trash"></i>
													</a>
												</td>
											</tr>
											<?php $counter++; ?>
											@endforeach
										</table>
										@else
										<table class="table table-bordered lastsizedetailsrow">
											<thead>
												<th colspan="2">
													<center>{{ trans("ACTION TYPE") }}</center>
												</th>
												<th><input style="float:right;" type="button" value="Add More" class="btn btn-info" onclick="acco_add_more_size();" /></th>
											</thead>
											<tr>
												<th width="50%">
													<center>{{ trans("Name") }} </center>
												</th>
												<th width="50%">
													<center>{{ trans("Function Name") }} </center>
												</th>
												<th>
												</th>
											</tr>
											<tr class="panel panel-default delete_add_more_accor_{{$counter}}" rel="{{$counter}}">
												<td>
													<div class="mws-form-item">
														<input type="text" name="data[{{$counter}}][name]" class="form-control" data-rel={{$counter}}>

													</div>
												</td>
												<td>
													<div class="mws-form-item">
														<input type="text" name="data[{{$counter}}][function_name]" class="form-control" data-rel={{$counter}}>
													</div>
												</td>
												<td>
													<a href="javascript:void(0);" onclick="del_row('{{$counter}}','0');" class="btn btn-danger btn-small">
														<i class="fa fa-trash"></i>
													</a>
												</td>
											</tr>
										</table>
										@endif
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
<script src="https://unpkg.com/@reactivex/rxjs@5.0.0-beta.7/dist/global/Rx.umd.js"></script>
<script>
	function doIt(e) {
		var e = e || event;
		if (e.keyCode == 32) return false;
	}
	window.onload = function() {
		var inp = document.getElementById("postal_code");
		var house = document.getElementById("house_number");

		inp.onkeydown = doIt;
		house.onkeydown = doIt;

	};

	function submit_form() {
		if ($("#is_correct").val() == 0) {
			$(".r-location").removeClass("success");
			$(".r-location").addClass("danger");
			$(".r-location").find("span").html("Invalid Address");
			return false;
		}
		$(".mws-form").submit();
	}


	var input = document.getElementById('house_number');
	var input$ = Rx.Observable
		.fromEvent(input, 'keyup')
		.map(function(x) {
			x.currentTarget.value
		})
		.debounceTime(300)
	input$.subscribe(function(x) {
		validate_address();
	});

	var input = document.getElementById('postal_code');
	var input$ = Rx.Observable
		.fromEvent(input, 'keyup')
		.map(function(x) {
			x.currentTarget.value
		})
		.debounceTime(300)
	input$.subscribe(function(x) {
		validate_address();
	});

	function validate_address() {
		$("#is_correct").val(0);
		var postal_code = $("#postal_code").val();
		var house_number = $("#house_number").val();
		if (postal_code != "" && house_number != "") {
			$(".smallloader").show();
			$.ajax({
				url: "{{URL('/validate_address')}}" + '/' + postal_code + "/" + house_number,
				success: function(r) {
					$(".smallloader").hide();
					error_array = JSON.stringify(r);
					datas = JSON.parse(error_array);
					$("#is_correct").val(datas['is_correct']);
					if (datas['is_correct'] == 1) {
						$(".r-location").addClass("success");
						$(".r-location").find("span").html(datas['street'] + ", " + datas['city']);

						$(".r-location").removeClass("danger");
						$(".r-location").addClass("success");

						$("#city").val(datas['city']);
						$("#street_name").val(datas['street']);
					} else {
						$(".r-location").removeClass("success");
						$(".r-location").addClass("danger");
						$(".r-location").find("span").html("Invalid Address");


						$("#city").val("");
						$("#street_name").val("");
					}
				},
				error: function(err) {
					$(".smallloader").hide();
				}
			});
		}
	}
</script>
<script>
	/*Function for add more size details*/
	function acco_add_more_size() {
		var get_last_id = $(".lastsizedetailsrow").find('tr').last().attr('rel');
		var counter = parseInt(get_last_id) + 1;
		$.ajax({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			},
			url: '{{ route("acl.addMoreRow") }}',
			'type': 'post',
			data: {
				'counter': counter
			},
			success: function(response) {
				$('.lastsizedetailsrow').find('tr').last().after(response);
			}
		});
	}



	function del_row(row_id,record_id) {
		
		var data =	$('#input_'+record_id).val()

		Swal.fire({
			title: "Are you sure?",
			text: "Want to delete this ?",
			icon: "warning",
			showCancelButton: true,
			confirmButtonText: "Yes, delete it",
			cancelButtonText: "No, cancel",
			reverseButtons: true
		}).then(function(result) {
			if (result.value) {
				$('.delete_add_more_accor_' + row_id).remove();

				$.ajax({
                
                url: "{{URL::to('adminpnlx/acl/delete-function')}}"+'/'+data,
                    'type': 'GET',
               
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function() {
                    location.reload();
                }
            });

			}else if (result.dismiss === "cancel") {
				Swal.fire(
					"Cancelled",
					"Your imaginary file is safe :)",
					"error"
				)
			}
		});

	}
</script>
@stop