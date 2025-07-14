@if(!empty($designations))
	<option value="">Select Designation</option>
	@foreach($designations as $designation)
		<option <?php echo  ($selctedid == $designation->id) ? "selected='selected'" : ''; ""?> value="{{$designation->id}}">{{$designation->name}}</option>
	@endforeach
@else
	<option value="">Select Designation</option>
@endif