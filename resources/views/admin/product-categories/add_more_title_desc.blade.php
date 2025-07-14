<div class="form-group appended_name_div">
    <label for="name">Name</label><span class="text-danger"> * </span>
    <input type="text" name="name[]" class="form-control form-control-solid form-control-lg  @error('name') is-invalid @enderror" value="{{old('name')}}">
    @if ($errors->has('name'))
    <div class=" invalid-feedback">
        {{ $errors->first('name') }}
    </div>
    @endif
</div>
<div class="col-xl-12 appended_desc_div">
    <div class="col-xl-12 row mx-0 px-0 ">
        <div class="form-group col-xl-11 mx-0 px-0">
            <label for="description">Description</label><span class="text-danger"> * </span>
            <textarea name="description[]" class="form-control textarea form-control-solid form-control-lg  @error('description') is-invalid @enderror" cols="30" rows="5" id="description_{{$count}}">{{old('description')}}</textarea>
            @if ($errors->has('description'))
            <div class=" invalid-feedback">
                {{ $errors->first('description') }}
            </div>
            @endif
        </div>
        <div class="add_more_btn_div col-xl-1 mx-0" style="margin-top: 300px;">
            <i class="fa fa-minus-circle title_desc_remove_btn" aria-hidden="true" style="font-size:50px;color: red;text-align: right;cursor: pointer;"></i>
        </div>
    </div>
</div> 
<script src="{{ asset('/js/ckeditor/ckeditor.js') }}"></script>
<script>
    var textareas = document.querySelectorAll('.textarea');
    textareas.forEach(function(element) {
        if (!element.getAttribute('data-ckeditor-initialized')) {
            CKEDITOR.replace(element.id, {
                filebrowserUploadUrl: '<?php echo URL()->to('base/uploader'); ?>',
                removeButtons: 'NewPage,Preview,Print,Templates,Cut,Copy,Paste,PasteText,PasteFromWord,Save,PasteFromWord,Undo,Redo,Find,Replace,SelectAll,Form,Checkbox,RadioButton,HiddenField,Strike,Subscript,Superscript,Language,Link,Unlink,Anchor,ShowBlocks',
                enterMode: CKEDITOR.ENTER_BR
            });
            element.setAttribute('data-ckeditor-initialized', 'true');
        }
    });
</script>