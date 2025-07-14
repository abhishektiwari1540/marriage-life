<link href="http://ezify.dev21.obtech.inet/css/admin/button.css" rel="stylesheet">
<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
	<div class="modal-content">
		<div class="modal-header">
			<h5 class="modal-title">
				{{Config('constants.APPOITMENT.APPOITMENT_TITLE')}} Details
			</h5>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<i aria-hidden="true" class="ki ki-close"></i>
			</button>
		</div>
		<div class="modal-body">
			<div class="form-group row my-2">
				<label class="col-4 font-size-h6 text-dark-75 font-weight-bolder">Name</label>
				<div class="col-8">
					<span class="font-size-sm text-muted font-weight-bold mt-1r">{{$data->name}}</span>
				</div>
			</div>
			<div class="form-group row my-2">
				<label class="col-4 font-size-h6 text-dark-75 font-weight-bolder">Email</label>
				<div class="col-8">
					<span class="font-size-sm text-muted font-weight-bold mt-1r">{{$data->email}}</span>
				</div>
			</div>
			<div class="form-group row my-2">
				<label class="col-4 font-size-h6 text-dark-75 font-weight-bolder">Phone Number</label>
				<div class="col-8">
					<span class="font-size-sm text-muted font-weight-bold mt-1r">{{$data->phone_number??''}}</span>
				</div>
			</div>
			<div class="form-group row my-2">
				<label class="col-4 font-size-h6 text-dark-75 font-weight-bolder">Message</label>
				<div class="col-8">
					<span class="font-size-sm text-muted font-weight-bold mt-1r">{{$data->message??''}}</span>
				</div>
			</div>
			<div class="form-group row my-2">
				<label class="col-4 font-size-h6 text-dark-75 font-weight-bolder">Status</label>

				<div class="col-8">
					@if($data->is_active == 1)
					<span class="label label-lg label-light-success label-inline">Activated</span>
					@else
					<span class="label label-lg label-light-danger label-inline">Deactivated</span>
					@endif
				</div>

			</div>
		</div>
	</div>
</div>