@extends('admin.layouts.layout')
@section('content')
<style>
    .invalid-feedback {
        display: inline;
    }
</style>
<div class="content  d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="subheader py-2 py-lg-4  subheader-solid " id="kt_subheader">
        <div class=" container-fluid  d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <div class="d-flex align-items-center flex-wrap mr-1">
                <div class="d-flex align-items-baseline flex-wrap mr-5">
                    <h5 class="text-dark font-weight-bold my-1 mr-5">
                    Add New {{Config('constants.CONSULTATION.CONSULTATION_TITLE')}}</h5>
                    <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                        <li class="breadcrumb-item">
                            <a href="{{ route('dashboard')}}" class="text-muted">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="{{ route($model.'.index')}}" class="text-muted"> 
                                {{Config('constants.CONSULTATION.CONSULTATION_TITLES')}}
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            @include("admin.elements.quick_links")
        </div>
    </div>
    <div class="d-flex flex-column-fluid">
        <div class=" container ">
            <form action="{{route($model.'.store')}}" method="post" class="mws-form" autocomplete="off" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-1"></div>
                            <div class="col-xl-10">
                                <h3 class="mb-10 font-weight-bold text-dark">
                                    {{Config('constants.CONSULTATION.CONSULTATION_TITLE')}} Information
                                </h3>
                                <div class="row">
                                   <div class="col-xl-6">
                                    <div class="form-group">
                                        <label for="name">Name</label><span class="text-danger"> * </span>
                                        <input type="text" name="name" class="form-control form-control-solid form-control-lg  @error('name') is-invalid @enderror" value="{{old('name')}}">
                                        @if ($errors->has('name'))
                                        <div class=" invalid-feedback">
                                            {{ $errors->first('name') }}
                                        </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <label for="product_category_id">Select Consultation Category</label><span
                                        class="text-danger"> </span>
                                        <select class="form-control form-control-solid form-control-lg"
                                        name="consultation_category_id">
                                        <option value="">Select Parent</option>
                                        @foreach (forconsultationcategoires() as $list)
                                        <option value="{{ $list->id }}"
                                            {{ old('consultation_category_id')  == $list->id ? 'selected' : '' }}>
                                            {{ $list->name }}
                                        </option>
                                        @endforeach
                                    </select>
                                        @if ($errors->has('consultation_category_id'))
                                        <div class=" invalid-feedback">
                                            {{ $errors->first('consultation_category_id') }}
                                        </div>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <label for="image"> Image</label><span class="text-danger"> * </span>
                                        <input type="file" name="image" class="form-control form-control-solid form-control-lg  @error('image') is-invalid @enderror" value="{{old('image')}}">
                                        @if ($errors->has('image'))
                                        <div class=" invalid-feedback">
                                            {{ $errors->first('image') }}
                                        </div>
                                        @endif
                                    </div>
                                </div>
                                
                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <label for="price">Price</label><span class="text-danger"> * </span>
                                        <input type="text" name="price" class="form-control form-control-solid form-control-lg  @error('price') is-invalid @enderror" value="{{old('price')}}">
                                        @if ($errors->has('price'))
                                        <div class=" invalid-feedback">
                                            {{ $errors->first('price') }}
                                        </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="form-group">
                                        <label for="shortDescription">Short Description</label><span class="text-danger"> * </span>
                                        <textarea name="short_description" class="form-control form-control-solid form-control-lg  @error('short_description') is-invalid @enderror" cols="30" rows="5" id="shortDescription">{{old('short_description')}}</textarea>
                                        @if ($errors->has('short_description'))
                                        <div class=" invalid-feedback">
                                            {{ $errors->first('short_description') }}
                                        </div>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-xl-12">
                                    <div class="form-group">
                                        <label for="Description">Description</label>
                                        <textarea name="description" class="form-control form-control-solid form-control-lg   @error('description') is-invalid @enderror" cols="30" rows="5" id="description">{{old('description')}}</textarea>
                                        @if ($errors->has('description'))
                                        <div class=" invalid-feedback">
                                            {{ $errors->first('description') }}
                                        </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between border-top mt-5 pt-10">
                                <div>
                                    <button button type="submit" onclick="submit_form();" class="btn btn-success font-weight-bold text-uppercase px-9 py-4">
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
@stop

@section('js')
<script src="{{asset('/js/ckeditor/ckeditor.js')}}"></script>
<script>
    CKEDITOR.replace(<?php echo 'description'; ?>, {
        filebrowserUploadUrl: '<?php echo URL()->to('base/uploder'); ?>',
        removeButtons: 'New Page,Preview,Print,Templates,Cut,Copy,Paste,PasteText,PasteWord,Save,PasteFromWord,Undo,Redo,Find,Replace,SelectAll,Form,Checkbox,RadioButton,HiddenField,Strike,Subscript,Superscript,Language,Link,Unlink,Anchor,ShowBlocks',
        enterMode: CKEDITOR.ENTER_BR
    });
    CKEDITOR.config.allowedContent = true;
    CKEDITOR.config.removePlugins = 'scayt';
</script>
@stop