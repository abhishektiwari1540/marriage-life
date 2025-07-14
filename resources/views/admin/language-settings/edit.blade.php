<form action="{{route($model.'.update1')}}" method="post" class="mws-form" id="LanguageSettingEditForm" onsubmit="return false;">
@csrf

<div class="mws-form-inline">
		<div class="mws-form-row">
			<div class="mws-form-item">
				<div class="controls" style="margin-left:0px;margin-bottom:0px;">
					<input type="text" name="word" value="{{stripslashes($result->msgstr)}}" class="small" style="height:30px;width:200px;font-size:9pt" id="edit_msgstr">
					<?php echo $errors->first('word'); ?><br />
					<button type="submit" value="Save" id="editgroup" class="btn btn-primary">Save</button>
					<a id="cancel" class="btn btn-primary" href="javascript:void(0);">{{ trans('Reset') }}</a>
				</div>
			</div>
		</div>
	</div>
</form>