<tr class="panel panel-default delete_add_more_accor_{{$counter}}" rel="{{$counter}}">
	<td>
		<div class="mws-form-item">
            <input type="text" name="data[{{$counter}}][name]"data-rel="{{$counter}}" class="form-control">

		</div>
	</td>
	<td>
		<div class="mws-form-item">
        <input type="text" name="data[{{$counter}}][function_name]"data-rel="{{$counter}}" class="form-control">
		
		</div>
	</td>
	<td> 
		<a href="javascript:void(0);" onclick="del_row('{{$counter}}');" class="btn btn-danger btn-small" >
		<i class="fa fa-trash"></i>
		</a>
	</td>
</tr>