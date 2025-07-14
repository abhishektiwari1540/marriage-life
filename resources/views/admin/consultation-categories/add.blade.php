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
                            Add New   {{Config('constants.CONSULTATION_CATEGORY.CONSULTATION_CATEGORY_TITLE')}}</h5>
                        <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                            <li class="breadcrumb-item">
                                <a href="{{ route('dashboard') }}" class="text-muted">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{ route($model . '.index') }}" class="text-muted">
                                    {{Config('constants.CONSULTATION_CATEGORY.CONSULTATION_CATEGORY_TITLES')}}
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
                <form action="{{ route($model . '.store') }}" method="post" class="mws-form" autocomplete="off"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-xl-1"></div>
                                <div class="col-xl-10">
                                    <h3 class="mb-10 font-weight-bold text-dark">
                                        {{Config('constants.CONSULTATION_CATEGORY.CONSULTATION_CATEGORY_TITLE')}} Information
                                    </h3>
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="form-group">
                                                <label for="title">Name</label><span class="text-danger"> * </span>
                                                <input type="text" name="name"
                                                    class="form-control form-control-solid form-control-lg  @error('name') is-invalid @enderror"
                                                    value="{{ old('name') }}">
                                                @if ($errors->has('name'))
                                                    <div class=" invalid-feedback">
                                                        {{ $errors->first('name') }}
                                                    </div>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="col-xl-6">
                                            <div class="form-group">
                                                <label for="image"> Image</label><span class="text-danger"> * </span>
                                                <input type="file" name="image"
                                                    class="form-control form-control-solid form-control-lg  @error('image') is-invalid @enderror"
                                                    value="{{ old('image') }}">
                                                @if ($errors->has('image'))
                                                    <div class=" invalid-feedback">
                                                        {{ $errors->first('image') }}
                                                    </div>
                                                @endif
                                            </div>
                                        </div>


                                    </div>
                                    <div class="d-flex justify-content-between border-top mt-5 pt-10">
                                        <div>
                                            <button button type="submit" onclick="submit_form();"
                                                class="btn btn-success font-weight-bold text-uppercase px-9 py-4">
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
    <script src="{{ asset('/js/ckeditor/ckeditor.js') }}"></script>
    <script>
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


        setRemoveAddmoreBtn()

        $(document).on('click', '.add_more_btn', function() {
            $.ajax({
                headers: {
                    "X-CSRF-TOKEN": "{{ csrf_token() }}"
                },
                url: "{{ route('pooja-services.addMoreTitleDesc') }}",
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
    </script>
@stop
