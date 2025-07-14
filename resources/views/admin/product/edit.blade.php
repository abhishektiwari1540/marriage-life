@extends('admin.layouts.layout')
@section('content')
    <?php $counter = 0; ?>
    <style>
        .invalid-feedback {
            display: inline;
        }

        .AClass {
            right: 10px;
            position: absolute;
        }
    </style>
    <div class="content  d-flex flex-column flex-column-fluid" id="kt_content">
        <div class="subheader py-2 py-lg-4  subheader-solid " id="kt_subheader">
            <div class=" container-fluid  d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
                <div class="d-flex align-items-center flex-wrap mr-1">
                    <div class="d-flex align-items-baseline flex-wrap mr-5">
                        <h5 class="text-dark font-weight-bold my-1 mr-5">
                            Edit {{ Config('constants.PRODUCT_TITLE.PRODUCT_TITLE') }} </h5>
                        <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                            <li class="breadcrumb-item">
                                <a href="{{ route('dashboard') }}" class="text-muted">Dashboard</a>
                            </li>

                            <li class="breadcrumb-item">
                                <a href="{{ route($model . '.index') }}" class="text-muted">
                                    {{ Config('constants.PRODUCT_TITLE.PRODUCT_TITLES') }}
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                @include('admin.elements.quick_links')
            </div>
        </div>
        <div class="d-flex flex-column-fluid">
            <div class=" container ">

                <form action="{{ route($model . '.update', [base64_encode($modelDetails->id)]) }}" method="post"
                    class="mws-form" autocomplete="off" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-xl-1"></div>
                                <div class="col-xl-10">
                                    <h3 class="mb-10 font-weight-bold text-dark">

                                    </h3>
                                    <div class="row">

                                        <div class="col-xl-6">
                                            <div class="form-group">
                                                <label for="name">Title</label><span class="text-danger"> * </span>
                                                <input type="text" name="title"
                                                    class="form-control form-control-solid form-control-lg  @error('title') is-invalid @enderror"
                                                    value="{{ old('title') ?? $modelDetails->name }}">
                                                @if ($errors->has('title'))
                                                    <div class=" invalid-feedback">
                                                        {{ $errors->first('title') }}
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="form-group">
                                                <label for="product_category_id">Select Product Category</label><span class="text-danger"> </span>
                                                <select class="form-control form-control-solid form-control-lg" name="product_category_id">
                                                    <option value="">Select Parent</option>
                                                    <?php
                                             $parent_list = App\Models\product_Categories::where('is_active', 1)->get();
                                                    ?>
                                                    @foreach ($parent_list as $list)
                                                        <option value="{{ $list->id }}" {{ old('product_category_id') ?? $modelDetails->product_category_id  == $list->id ? 'selected' : '' }}>
                                                            {{ $list->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            @if ($errors->has('product_category_id'))
                                                    <div class=" invalid-feedback">
                                                        {{ $errors->first('product_category_id') }}
                                                    </div>
                                                @endif
                                        </div>

                                        <div class="col-xl-6">
                                            <div class="form-group">
                                                <label for="image"> Image</label><span class="text-danger"> * </span>
                                                <input type="file" name="image"
                                                    class="form-control form-control-solid form-control-lg  @error('image') is-invalid @enderror">
                                                @if (!empty($modelDetails->image))
                                                    <a class="fancybox-buttons" data-fancybox-group="button"
                                                        href="{{ $modelDetails->image ?? '' }}">
                                                        <img height="100" width="100"
                                                            src="{{ $modelDetails->image ?? '' }}" />
                                                    </a>
                                                @endif
                                                @if ($errors->has('image'))
                                                    <div class=" invalid-feedback">
                                                        {{ $errors->first('image') }}
                                                    </div>
                                                @endif
                                            </div>

                                        </div>
                                        <!-- <div class="col-xl-6">
                                            <div class="form-group">
                                                <label for="Multiple_image">Multiple Image</label>
                                                <span class="text-danger">  </span>
                                                <input type="file" name="Multiple_image[]"
                                                    class="form-control form-control-solid form-control-lg @error('Multiple_image') is-invalid @enderror"
                                                    multiple>
                                            </div>
                                        </div> -->
                                        <div class="col-xl-6">
                                            <div class="form-group">
                                                <label for="price">Price</label><span class="text-danger"> * </span>
                                                <input type="text" name="price"
                                                    class="form-control form-control-solid form-control-lg  @error('price') is-invalid @enderror"
                                                    value="{{ old('price') ?? $modelDetails->price }}">
                                                @if ($errors->has('price'))
                                                    <div class=" invalid-feedback">
                                                        {{ $errors->first('price') }}
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="form-group">
                                                <label for="stock">Stock</label><span class="text-danger"> * </span>
                                                <input type="text" name="stock"
                                                    class="form-control form-control-solid form-control-lg  @error('stock') is-invalid @enderror"
                                                    value="{{ old('stock') ?? $modelDetails->stock }}">
                                                @if ($errors->has('stock'))
                                                    <div class=" invalid-feedback">
                                                        {{ $errors->first('stock') }}
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                        <!-- Multiple Image Upload -->
                                        
                                        <!-- <div class="row d-flex mb-2">
                                            <label for="multiple_images" class="form-label mutilImage">Multiple Images</label>
                                            <div class="col-md-12">
                                                @if (!empty($modelDetails->product_images) && count($modelDetails->product_images) > 0)
                                                    @foreach ($modelDetails->product_images as $image)
                                                    <span style="position: relative;margin: 0px 20px;">
                                                    <a class="fancybox-buttons" ="button"
                                                    href="{{  $image->image ?? '' }}">
                                                    <img height="100" width="100"
                                                        src="{{ $image->image ?? '' }}" />
                                                    </a>
                                                    <input type="hidden" class="product-id" value="{{ $image->product_id }}">
                                                    <input type="hidden" class="image-id" value="{{ $image->id,$image->product_id}}">

                                                    <a href="{{ route('delete.product_multiple_image', ['image' => $image->id, 'product_id' => $image->product_id]) }}" class="delete-image">
                                                        <svg type="button" class="sweetalert-delete" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" style="position: absolute; width: 13px; right: 6px;">
                                                            <path d="M376.6 84.5c11.3-13.6 9.5-33.8-4.1-45.1s-33.8-9.5-45.1 4.1L192 206 56.6 43.5C45.3 29.9 25.1 28.1 11.5 39.4S-3.9 70.9 7.4 84.5L150.3 256 7.4 427.5c-11.3 13.6-9.5 33.8 4.1 45.1s33.8 9.5 45.1-4.1L192 306 327.4 468.5c11.3 13.6 31.5 15.4 45.1 4.1s15.4-31.5 4.1-45.1L233.7 256 376.6 84.5z"/>
                                                        </svg>
                                                    </a>

                                                </span>
                                                    @endforeach
                                                @endif
                                            </div>
                                        </div> -->
                                        <div class="col-xl-12">
                                            <div class="form-group">
                                                <label for="short_description">Short Description</label><span
                                                    class="text-danger"> * </span>
                                                <textarea name="short_description"
                                                    class="form-control form-control-solid form-control-lg  @error('short_description') is-invalid @enderror"
                                                    cols="30" rows="5">{{ old('short_description') ?? $modelDetails->short_description }}</textarea>
                                                @if ($errors->has('short_description'))
                                                    <div class=" invalid-feedback">
                                                        {{ $errors->first('short_description') }}
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-xl-12 name_desc_appended_div mx-0 px-0">
                                            @if (old('name'))
                                                @foreach (old('name') as $index => $title)
                                                    <div class="form-group appended_name_div">
                                                        <label for="name">Name</label><span class="text-danger"> *
                                                        </span>
                                                        <input type="text" name="name[]"
                                                            class="form-control form-control-solid form-control-lg @error('name.' . $index) is-invalid @enderror"
                                                            value="{{ $title }}">
                                                        @error('name.' . $index)
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div class="col-xl-12 appended_desc_div mx-0 px-0">
                                                        <div class="col-xl-12 row mx-0 px-0">
                                                            <div class="form-group col-xl-11 mx-0 px-0">
                                                                <label for="description">Description</label><span
                                                                    class="text-danger"> * </span>
                                                                <textarea name="description[]"
                                                                    class="form-control textarea_default form-control-solid form-control-lg @error('description.' . $index) is-invalid @enderror"
                                                                    cols="30" rows="5">{{ old('description.' . $index) }}</textarea>
                                                                @error('description.' . $index)
                                                                    <div class="invalid-feedback">
                                                                        {{ $message }}
                                                                    </div>
                                                                @enderror
                                                            </div>
                                                            <div class="add_more_btn_div col-xl-1 mx-0"
                                                                style="margin-top: 300px;">
                                                                <i class="fa fa-plus-circle add_more_btn"
                                                                    style="font-size:50px;color: #2b579a;text-align: right;cursor: pointer;"
                                                                    aria-hidden="true"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            @else
                                                @if (!empty($modelDetails->product_specifications) && count($modelDetails->product_specifications) > 0)
                                                    @foreach ($modelDetails->product_specifications as $data)
                                                        <div class="form-group appended_name_div">
                                                            <label for="name">Name</label><span class="text-danger"> *
                                                            </span>
                                                            <input type="text" name="name[]"
                                                                class="form-control form-control-solid form-control-lg  @error('name') is-invalid @enderror"
                                                                value="{{ old('name') ?? $data->title }}">
                                                            @if ($errors->has('name'))
                                                                <div class=" invalid-feedback">
                                                                    {{ $errors->first('name') }}
                                                                </div>
                                                            @endif
                                                        </div>
                                                        <div class="col-xl-12 appended_desc_div mx-0 px-0">
                                                            <div class="col-xl-12 row mx-0 px-0 ">
                                                                <div class="form-group col-xl-11 mx-0 px-0">
                                                                    <label for="description">Description</label><span
                                                                        class="text-danger"> * </span>
                                                                    <textarea name="description[]"
                                                                        class="form-control textarea_default form-control-solid form-control-lg  @error('description') is-invalid @enderror"
                                                                        cols="30" rows="5">{{ old('description') ?? $data->description }}</textarea>
                                                                    @if ($errors->has('description'))
                                                                        <div class=" invalid-feedback">
                                                                            {{ $errors->first('description') }}
                                                                        </div>
                                                                    @endif
                                                                </div>
                                                                <div class="add_more_btn_div col-xl-1 mx-0"
                                                                    style="margin-top: 300px;">
                                                                    <i class="fa fa-plus-circle add_more_btn"
                                                                        style="font-size:50px;color: #2b579a;text-align: right;cursor: pointer;"
                                                                        aria-hidden="true"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                @else
                                                    <div class="form-group appended_name_div">
                                                        <label for="name">Name</label><span class="text-danger"> *
                                                        </span>
                                                        <input type="text" name="name[]"
                                                            class="form-control form-control-solid form-control-lg  @error('name') is-invalid @enderror"
                                                            value="{{ old('name') }}">
                                                        @if ($errors->has('name'))
                                                            <div class=" invalid-feedback">
                                                                {{ $errors->first('name') }}
                                                            </div>
                                                        @endif
                                                    </div>
                                                    <div class="col-xl-12 appended_desc_div mx-0 px-0">
                                                        <div class="col-xl-12 row mx-0 px-0 ">
                                                            <div class="form-group col-xl-11 mx-0 px-0">
                                                                <label for="description">Description</label><span
                                                                    class="text-danger"> * </span>
                                                                <textarea name="description[]"
                                                                    class="form-control textarea_default form-control-solid form-control-lg  @error('description') is-invalid @enderror"
                                                                    cols="30" rows="5">{{ old('description') }}</textarea>
                                                                @if ($errors->has('description'))
                                                                    <div class=" invalid-feedback">
                                                                        {{ $errors->first('description') }}
                                                                    </div>
                                                                @endif
                                                            </div>
                                                            <div class="add_more_btn_div col-xl-1 mx-0"
                                                                style="margin-top: 300px;">
                                                                <i class="fa fa-plus-circle add_more_btn"
                                                                    style="font-size:50px;color: #2b579a;text-align: right;cursor: pointer;"
                                                                    aria-hidden="true"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif
                                            @endif
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between border-top mt-5 pt-10">
                                        <div>
                                            <button button type="submit" onclick="submit_form();"
                                                class="btn btn-success font-weight-bold text-uppercase px-9 py-4">
                                                Update
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
    <script src="{{ asset('/js/ckeditor/ckeditor.js') }}"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var textareas = document.querySelectorAll('.textarea_default');
            textareas.forEach(function(element) {
                CKEDITOR.replace(element, {
                    filebrowserUploadUrl: '<?php echo URL()->to('base/uploader'); ?>',
                    removeButtons: 'NewPage,Preview,Print,Templates,Cut,Copy,Paste,PasteText,PasteFromWord,Save,PasteFromWord,Undo,Redo,Find,Replace,SelectAll,Form,Checkbox,RadioButton,HiddenField,Strike,Subscript,Superscript,Language,Link,Unlink,Anchor,ShowBlocks',
                    enterMode: CKEDITOR.ENTER_BR
                });
                CKEDITOR.config.allowedContent = true;
                CKEDITOR.config.removePlugins = 'scayt';
            });
        });

        setRemoveAddmoreBtn()

        $(document).on('click', '.add_more_btn', function() {
            $.ajax({
                headers: {
                    "X-CSRF-TOKEN": "{{ csrf_token() }}"
                },
                url: "{{ route('pooja-services.addMoreTitleDesc') }}",
                data: {
                    is_count: 0,
                },
                type: 'POST',
                dataType: 'json',
                success: function(response) {
                    if (response.status == true) {
                        $('.name_desc_appended_div').append(response.html)
                        setRemoveAddmoreBtn()
                    } else {
                        console.error(response.message);
                    }
                }
            });
        })


        $(document).on('click', '.title_desc_remove_btn', function() {
            var target_btn = $(this);
            var trgt_desc = target_btn.parents('.appended_desc_div')
            trgt_desc.prev('.appended_name_div').remove()
            trgt_desc.remove()
        })

        function setRemoveAddmoreBtn() {
            var inputValueLength = $('input[name="name[]"]').length;

            if (inputValueLength > 1) {
                $('.add_more_btn_div').html(
                    "<i class='fa fa-minus-circle title_desc_remove_btn' aria-hidden='true' style='font-size:50px;color: red;text-align: right;cursor: pointer;'></i>"
                )


                $('.add_more_btn_div:last').html(
                    "<i class='fa fa-plus-circle add_more_btn' style='font-size:50px;color: #2b579a;text-align: right;cursor: pointer;' aria-hidden='true'></i>"
                )
            } else {
                $('.add_more_btn_div').html(
                    "<i class='fa fa-plus-circle add_more_btn' style='font-size:50px;color: #2b579a;text-align: right;cursor: pointer;' aria-hidden='true'></i>"
                )
            }
        }


        $(".delete-image").click(function(e) {
                e.stopImmediatePropagation();
                url = $(this).attr('href');
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
                        window.location.replace(url);
                    } else if (result.dismiss === "cancel") {
                        Swal.fire(
                            "Cancelled",
                            "Your imaginary file is safe :)",
                            "error"
                        )
                    }
                });
                e.preventDefault();
            });
    </script>
    <style>
        label.form-label.mutilImage {
    margin-left: 25px;
}
    </style>


@stop
