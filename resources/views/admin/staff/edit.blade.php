@extends('admin.layouts.layout')
@section('content')
<div class="content  d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="subheader py-2 py-lg-4  subheader-solid " id="kt_subheader">
        <div class=" container-fluid  d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <div class="d-flex align-items-center flex-wrap mr-1">
                <div class="d-flex align-items-baseline flex-wrap mr-5">
                    <h5 class="text-dark font-weight-bold my-1 mr-5">
                        Edit {{Config('constants.STAFF.STAFF_TITLE')}} </h5>
                    <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                        <li class="breadcrumb-item">
                            <a href="{{ route('dashboard')}}" class="text-muted">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="{{route('staff.index')}}" class="text-muted">{{Config('constants.STAFF.STAFF_TITLE')}}</a>
                        </li>
                    </ul>
                </div>
            </div>
            @include("admin.elements.quick_links")
        </div>
    </div>
    <div class="d-flex flex-column-fluid">
        <div class=" container ">
            <form action="{{route($model.'.update',base64_encode($modell->id))}}" method="post" class="mws-form" autocomplete="off" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-1"></div>
                            <div class="col-xl-10">
                                <h3 class="mb-10 font-weight-bold text-dark">
                                Staff Management Information
                                </h3>
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="form-group">
                                            <label for="name"> Name</label><span class="text-danger"> * </span>
                                            <input type="text" name="name" class="form-control form-control-solid form-control-lg  @error('name') is-invalid @enderror" value="{{$modell->name ?? '' }}">
                                            @if ($errors->has('name'))
                                            <div class=" invalid-feedback">
                                                {{ $errors->first('name') }}
                                            </div>
                                            @endif

                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="form-group">
                                            <label for="email"> Email</label><span class="text-danger"> * </span>
                                            <input type="text" name="email" class="form-control form-control-solid form-control-lg  @error('email') is-invalid @enderror" value="{{$modell->email ?? '' }}">
                                            @if ($errors->has('email'))
                                            <div class=" invalid-feedback">
                                                {{ $errors->first('email') }}
                                            </div>
                                            @endif
                                        </div>
                                    </div>

                                    
                                  
                                </div>
                                <hr>
                                <h3 class="mb-10 font-weight-bold text-dark">
                                Designation Information</h3>
                                <div class="row">
                                  
                                    <div class="col-xl-6">
                                        <div class="form-group">
                                            <label for="designation_id">Role</label><span class="text-danger"> * </span>
                                            <select name="designation_id" id="designation_id" class=" form-control form-control-solid form-control-lg chosenselect_designation_id @error('designation_id') is-invalid @enderror">
                                              <option value="">Select Role</option>
                                                @foreach($departments as $departments)
                                                <option value="{{$departments->id}}" {{ $departments->id == $modell->designation_id ? 'selected' : '' }}> {{$departments->name}}</option>
                                                @endforeach
                                          
                                        </select>
                                            @if ($errors->has('designation_id'))
                                            <div class=" invalid-feedback">
                                                {{ $errors->first('designation_id') }}
                                            </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="staffPermission">
                                    <?php
                                    if (!empty($aclModules)) {
                                    ?>
                                        <h3 class="mt-8 mb-8">Staff Management Department Permissions</h3>
                                        <label class="font-size-lg font-weight-bold checkbox mb-5">
                                            <input type="checkbox" class="checkAll" />
                                            <span class="mr-2"></span>
                                            Check All
                                        </label>
                                        <div id="accordion" role="tablist" class="accordion accordion-toggle-arrow">
                                            <?php
                                            $counter    =    0;
                                            foreach ($aclModules as $aclModule) {
                                            ?>
                                                <div class="card mb-5 border-bottom">
                                                    <div class="card-header d-flex align-items-center" role="tab">
                                                        <div class="ml-5">
                                                            <label class="checkbox">
                                                                <input type="checkbox" name="data[{{$counter}}][value]" value=1 class="parent" id="{{$aclModule->id}}" {{ ($aclModule->active == 1) ? 'checked' : '' }}>
                                                                <input type="hidden" name="data[{{$counter}}][department_id]" value="{{$aclModule->id}}">
                                                                <span class="mr-2"></span>

                                                            </label>
                                                        </div>
                                                        <a class="text-dark px-2 py-4 w-100" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse{{$counter}}" aria-expanded="true" aria-controls="collapse{{$counter}}">
                                                            <i class="more-less glyphicon glyphicon-plus"></i>
                                                            {{strtoupper($aclModule->title ?? '')}}
                                                        </a>
                                                    </div>
                                                    <div id="collapse{{$counter}}" class="collapse" data-parent="#accordion">
                                                        <?php
                                                        if (!empty($aclModule['sub_module'])) {
                                                        ?>
                                                            <div class="card-body ">
                                                                <div class="">
                                                                    <?php
                                                                    $module_counter        =    0;
                                                                    foreach ($aclModule['sub_module'] as $subModule) {
                                                                    ?>
                                                                        <div class="font-size-lg font-weight-bold mb-3">{{!empty($subModule->title)?strtoupper($subModule->title):''}}</div>
                                                                        <div class="row">
                                                                            <?php
                                                                            $count    =    0;
                                                                            if (!$subModule['module']->isEmpty()) {
                                                                                foreach ($subModule['module'] as $module) {
                                                                                    $count++;
                                                                            ?>
                                                                                    <div class="col-auto mb-5">
                                                                                        <label class="checkbox">
                                                                                            <input type="checkbox" id="{{ $aclModule->id }}" name="data[{{$counter}}][module][{{$module_counter}}][value]" value=1 class="children child{{$aclModule->id}}" {{ ($module->active == 1) ? 'checked' : '' }}>
                                                                                            <input type="hidden" name="data[{{$counter}}][module][{{$module_counter}}][id]" value="{{$module->id}}">
                                                                                            <input type="hidden" name="data[{{$counter}}][module][{{$module_counter}}][department_module_id]" value="{{$subModule->id}}">
                                                                                            <span class="mr-2"></span>
                                                                                            {{$module->name}}
                                                                                        </label>
                                                                                    </div>
                                                                                <?php
                                                                                    $module_counter++;
                                                                                }
                                                                                ?>
                                                                                <td colspan="6-{{$count}}"></td>
                                                                            <?php
                                                                            } else {
                                                                            ?>
                                                                                <td colspan="6"></td>
                                                                            <?php
                                                                            }
                                                                            ?>
                                                                        </div>
                                                                        <?php
                                                                    }
                                                                    if (!empty($aclModule['extModule'])) {
                                                                        $count    =    0;
                                                                        foreach ($aclModule['extModule'] as $subModule) {
                                                                            $count++;
                                                                        ?>
                                                                            <div class="font-size-lg font-weight-bold mb-3">
                                                                                {{strtoupper($subModule->title ?? '')}}
                                                                            </div>
                                                                            <div class="row">
                                                                                <?php
                                                                                if (!$subModule['module']->isEmpty()) {
                                                                                    foreach ($subModule['module'] as $module) {
                                                                                ?>
                                                                                        <div class="col-auto mb-5">
                                                                                            <label class="checkbox">
                                                                                                <label class="checkbox">
                                                                                                    <input type="checkbox" id="{{ $aclModule->id }}" name="data[{{$counter}}][module][{{$module_counter}}][value]" value=1 class="children child{{$aclModule->id}}" {{ ($module->active == 1) ?  'checked' : '' }}>

                                                                                                    <input type="hidden"  name="data[{{$counter}}][module][{{$module_counter}}][id]" value="{{$module->id}}">

                                                                                                    <input type="hidden" name="data[{{$counter}}][module][{{$module_counter}}][department_module_id]" value="{{$subModule->id}}">
                                                                                                    <span class="mr-2"></span>
                                                                                                    {{$module->name}}
                                                                                                </label>
                                                                                        </div>
                                                                                    <?php
                                                                                        $module_counter++;
                                                                                    }
                                                                                    ?>
                                                                                    <td colspan="6-{{$count}}"></td>
                                                                                <?php
                                                                                } else {
                                                                                ?>
                                                                                    <td colspan="5"></td>
                                                                                <?php
                                                                                }
                                                                                ?>
                                                                            </div>
                                                                    <?php
                                                                        }
                                                                    }
                                                                    ?>
                                                                </div>
                                                            <?php
                                                        }
                                                            ?>
                                                            <?php
                                                            if (isset($aclModule['parent_module_action'])  && (!$aclModule['parent_module_action']->isEmpty())) {
                                                            ?>
                                                                <div class="font-size-lg font-weight-bold mb-3"> {{$aclModule->title}} </div>
                                                                <div class="row">
                                                                    <?php
                                                                    foreach ($aclModule['parent_module_action'] as $parentModule) {
                                                                    ?>
                                                                        <div class="col-auto mb-5">
                                                                            <label class="checkbox">
                                                                                <input type="checkbox" id="{{ $aclModule->id }}" name="data[{{$counter}}][module][{{$module_counter}}][value]" value=1 class="children child{{$aclModule->id}}" {{ ($parentModule->active == 1) ?  'checked' : '' }}>
                                                                                <input type="hidden" id="{{ $aclModule->id }}" name="data[{{$counter}}][module][{{$module_counter}}][id]" value="{{$parentModule->id}}">
                                                                                <input type="hidden" id="{{ $aclModule->id }}" name="data[{{$counter}}][module][{{$module_counter}}][department_module_id]" value="{{$aclModule->id}}">
                                                                                <span class="mr-2"></span>
                                                                                {{$parentModule->name}}
                                                                            </label>
                                                                        </div>
                                                                    <?php
                                                                        $counter++;
                                                                    }
                                                                    ?>
                                                                </div>
                                                            <?php
                                                            }
                                                            ?>
                                                            </div>
                                                    </div>
                                                </div>
                                            <?php
                                                $counter++;
                                            }
                                            ?>
                                        </div>
                                    <?php
                                    }
                                    ?>
                                </div>

                                <div class="d-flex justify-content-between border-top mt-5 pt-10">
                                    <div>
                                        <button button type="button" onclick="submit_form();" class="btn btn-success font-weight-bold text-uppercase px-9 py-4">
                                            SUBMIT
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
            var test = $('.child' + parentid).attr('checked', true);
        }
        $(".checkAll").click(function() {
            $(".parent:input").not(this).prop('checked', this.checked);
            $(".children:input").not(this).prop('checked', this.checked);
        });
        $(".parent:input").click(function() {
            var parentid = $(this).attr('id');
            $('.child' + parentid).not(this).prop('checked', this.checked);
        });

         //19 april
        let myarray = [];
        $(".children").click(function() {
            myarray.splice(0, myarray.length);
            var childid = $(this).attr('id');
            var childClassString = $(this).attr('class')
            var childClassArr = childClassString.split(" ")
            // $('#' + childid).not(this).prop('checked', this.checked);
            $("."+childClassArr[1]).each(function() {
                var sThisVal = (this.checked ? $(this).val() : "notChecked");
                myarray.push(sThisVal)
            });
            if (jQuery.inArray("1", myarray) != -1) {
                $('#' + childid).prop('checked', true);
            } else {
                $('#' + childid).prop('checked', false);
            }
        });
        //19 april
    });
</script>
<script>
    function DepartmentList() {
        departmentid = ($(".DepartmentList").val() != "") ? $(".DepartmentList").val() : 0;
        $.ajax({
            headers: {
                "X-CSRF-TOKEN": "{{ csrf_token() }}"
            },
            url: '{{route("$model.getDesignations")}}',
            type: "POST",
            data: {'departmentid':departmentid,"selctedid":"{{$modell->designation_id}}"},
            success: function(response) {
                $(".designation_iddrop").html(response);
            }
        });
    }
    $(function() {
        $(".DepartmentList").change(function() {
            DepartmentList();
        });
        DepartmentList();
    });

    $('#designation_id').on('change', function() {
        var id = $(this).val();
        $.ajax({
            url: '{{route("$model.getStaffPermission")}}',
            type: 'POST',
            data: {
                'designation_id': id
            }, // Data sent to server, a set of key/value pairs (i.e. form fields and values)
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(r) {
                if (r != '') {
                    $('.staffPermission').html('');
                    $('.staffPermission').html(r);
                } else {
                    show_message(r.message, 'error');
                }

            }
        });
    });

    function submit_form() {
        $(".mws-form").submit();
    }
</script>

<script >
    $(document).ready(function(){
       
        $("#phone_number_country").intlTelInput({
                                    allowDropdown:true,
                                    preferredCountries:[],
                                    initialCountry: "{{ $modell->phone_number_country_code }}",
                                    separateDialCode:true
                                });
        $("#phone_number_country").on('countrychange', function (e, countryData) {
            var data    = $(".iti__selected-dial-code").html();
            var data1   = $("#phone_number_country").intlTelInput("getSelectedCountryData").iso2;
            $("#dial_code").val(data);
            $("#country_code").val(data1);
        });
    })
</script>
@stop