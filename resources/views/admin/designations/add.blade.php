@extends('admin.layouts.layout')
@section('content')
<div class="content  d-flex flex-column flex-column-fluid" id="kt_content">
	<div class="subheader py-2 py-lg-4  subheader-solid " id="kt_subheader">
		<div class=" container-fluid  d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
			<div class="d-flex align-items-center flex-wrap mr-1">
				<div class="d-flex align-items-baseline flex-wrap mr-5">
					<h5 class="text-dark font-weight-bold my-1 mr-5">
						Add New {{Config('constants.DESIGNATION.DESIGNATION_TITLE')}} </h5>
					<ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
						<li class="breadcrumb-item">
							<a href="{{ route('dashboard')}}" class="text-muted">Dashboard</a>
						</li>
						<li class="breadcrumb-item">
							<a href="{{route($model.'.index')}}" class="text-muted">{{Config('constants.DESIGNATION.DESIGNATIONS_TITLE')}}</a>
						</li>
					</ul>
				</div>
			</div>
			@include("admin.elements.quick_links")
		</div>
	</div>
	<div class="d-flex flex-column-fluid">
		<div class=" container ">
			<form action="{{route($model.'.add')}}" method="post" class=mws-form files=true autocomplete="off">
				@csrf
				<div class="card">
					<div class="card-body">
						<div class="row">
							<div class="col-xl-1"></div>
							<div class="col-xl-10">
								<h3 class="mb-10 font-weight-bold text-dark">
									{{Config('constants.DESIGNATION.DESIGNATION_TITLE')}} Information
								</h3>
								<div class="row">
									<div class="col-xl-6">
										<div class="form-group">
											<label for="name">Name</label><span class="text-danger"> * </span>
											<input type="text" name="name" class="form-control form-control-solid form-control-lg   @error('name') is-invalid @enderror" value="{{old('name')}}">
											@if ($errors->has('name'))
											<div class=" invalid-feedback">
												{{ $errors->first('name') }}
											</div>
											@endif
										</div>
									</div>
								</div>
								@if(!empty($aclModules))
								<h3 class="mt-8 mb-8">Designation Permissions</h3>
								<label class="font-size-lg font-weight-bold checkbox mb-5">
									<input type="checkbox" class="checkAll" />
									<span class="mr-2"></span>
									Check All
								</label>
								<div id="accordion" role="tablist" class="accordion accordion-toggle-arrow">
									<?php $counter	=	0;	?>
									@foreach($aclModules as $aclModule)
									<div class="card mb-4 border-bottom">
										<div class="card-header d-flex align-items-center" role="tab">
											<div class="ml-5">
												<label class="checkbox">
													<input type="checkbox" name="data[{{$counter}}][value]" value=1 class="parent" id="{{$aclModule->id}}" {{ ($aclModule->active == 1) ? 'true' : 'false' }}>
													<input type="hidden" name="data[{{$counter}}][designation_id]" value="{{$aclModule->id}}">
													<span class="mr-2"></span>
												</label>
											</div>
											<a class="text-dark px-2 py-4 w-100" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse{{$counter}}" aria-expanded="true" aria-controls="collapse{{$counter}}">
												<i class="more-less glyphicon glyphicon-plus"></i>
												{{strtoupper($aclModule->title ?? '')}}
											</a>
										</div>
										<div id="collapse{{$counter}}" class="collapse" data-parent="#accordion">
											@if(!empty($aclModule['sub_module']))
											<div class="card-body">
												<div class="">
													<?php $module_counter		=	0;	?>
													@foreach($aclModule['sub_module'] as $subModule)
													<div class="font-size-lg font-weight-bold mb-3"> {{strtoupper($subModule->title ?? '')}}</div>
													<div class="row">
														@if(!$subModule['module']->isEmpty())
														<?php $count	= 0;
														$count++; ?>
														@foreach($subModule['module'] as $module)
														<div class="col-auto mb-5">
															<label class="checkbox">
																<input type="checkbox" id="{{$aclModule->id}}"  name="data[{{$counter}}][module][{{$module_counter}}][value]" value=1 class="children child{{$aclModule->id}}" {{ ($module->active == 1) ? 'true' : 'false' }}>
																<input type="hidden" name="data[{{$counter}}][module][{{$module_counter}}][id]" value="{{$module->id}}">
																<input type="hidden" name="data[{{$counter}}][module][{{$module_counter}}][designation_module_id]" value="{{$subModule->id}}">
																<span class="mr-2"></span>
																{{$module->name}}
															</label>
														</div>
														<?php $module_counter++;	?>
														@endforeach
														<td colspan="6-{{$count}}"></td>
														@else
														<td colspan="6"></td>
														@endif
													</div>
													@endforeach
													@if (!empty($aclModule['extModule']))
													<?php $count	=	0; 	?>
													@foreach ($aclModule['extModule'] as $subModule)
													<?php $count++; ?>
													<div class="font-size-lg font-weight-bold mb-3">{{!empty($subModule->title)?strtoupper($subModule->title):''}}</div>
													<div class="row">
														@if (!$subModule['module']->isEmpty())
														@foreach ($subModule['module'] as $module)
														<div class="col-auto mb-5">
															<label class="checkbox">
																<input type="checkbox" id="{{$aclModule->id}}"  name="data[{{$counter}}][module][{{$module_counter}}][value]" value=1 class="children child{{$aclModule->id}}" {{ ($module->active == 1) ? 'true' : 'false' }}>
																<input type="hidden" name="data[{{$counter}}][module][{{$module_counter}}][id]" value="{{$module->id}}">
																<input type="hidden" name="data[{{$counter}}][module][{{$module_counter}}][designation_module_id]" value="{{$subModule->id}}">
																<span class="mr-2"></span>
																{{$module->name}}
															</label>
														</div>
														<?php $module_counter++;	?>
														@endforeach
														<td colspan="6-{{$count}}"></td>
														@else
														<td colspan="5"></td>
														@endif
													</div>
													@endforeach
													@endif
												</div>
												@endif
												@if (isset($aclModule['parent_module_action']) && (!$aclModule['parent_module_action']->isEmpty()))
												<div class="font-size-lg font-weight-bold mb-3"> {{$aclModule->title}} </div>
												<div class="row">
													@foreach ($aclModule['parent_module_action'] as $parentModule)
													<div class="card mb-5 border-0 col-auto">
														<label class="checkbox">
															<input type="checkbox" id="{{$aclModule->id}}" name="data[{{$counter}}][module][{{$module_counter}}][value]" value=1 class="children child{{$aclModule->id}}" {{ ($parentModule->active == 1) ? 'true' : 'false' }}>
															<input type="hidden" name="data[{{$counter}}][module][{{$module_counter}}][id]" value="{{$parentModule->id}}">
															<input type="hidden" name="data[{{$counter}}][module][{{$module_counter}}][designation_module_id]" value="{{$aclModule->id}}">
															<span class="mr-2"></span>
															{{$parentModule->name}}
														</label>
													</div>
													<?php $counter++; ?>
													@endforeach
												</div>
												@endif
											</div>
										</div>
									</div>
									<?php $counter++;	?>
									@endforeach
								</div>
								@endif
								<div class="d-flex justify-content-between border-top mt-5 pt-10">
									<div>
										<button button type="button" onclick="submit_form();" class="btn btn-success font-weight-bold text-uppercase px-9 py-4">
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
<script type="text/javascript">
	$(document).ready(function() {
		if ($(".parent:input").val() == 1) {
			var parentid = $(".parent:input:checked").attr('id');
			$('.child' + parentid).attr('checked', true);
		}
		$(".checkAll").click(function() {
			$(".parent:input").not(this).prop('checked', this.checked);
			$(".children:input").not(this).prop('checked', this.checked);
		});
		$(".parent:input").click(function() {
			var parentid = $(this).attr('id');
			$('.child' + parentid).not(this).prop('checked', this.checked);
		});

		$(".children").click(function() {
			var childid = $(this).attr('id');
			// $('#' + childid).not(this).prop('checked', this.checked);
		});
	});
</script>
<script>
	function submit_form() {
		$(".mws-form").submit();
	}
</script>

@stop