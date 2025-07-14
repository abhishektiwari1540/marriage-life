@extends('admin.layouts.layout')
@section('content')
<?php $counter = 0; ?>
<style>
    .invalid-feedback {
        display: inline;
    }

    .AClass{
        right:10px;
        position: absolute;
    }
</style>
<div class="content  d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="subheader py-2 py-lg-4  subheader-solid " id="kt_subheader">
        <div class=" container-fluid  d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <div class="d-flex align-items-center flex-wrap mr-1">
                <div class="d-flex align-items-baseline flex-wrap mr-5">
                    <h5 class="text-dark font-weight-bold my-1 mr-5">
                    Edit  {{Config('constants.CUSTOMER.CUSTOMERS_TITLE')}}	</h5>
                    <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                        <li class="breadcrumb-item">
                            <a href="{{ route('dashboard')}}" class="text-muted">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="{{ route($model.'.index')}}" class="text-muted"> {{Config('constants.CUSTOMER.CUSTOMERS_TITLES')}} </a>
                        </li>
                    </ul>
                </div>
            </div>
            @include("admin.elements.quick_links")
        </div>
    </div>
    <div class="d-flex flex-column-fluid">
        <div class=" container ">
            <form action="{{ route($model.'.update', ['user' => base64_encode($userDetails->id)]) }}" method="post" class="mws-form" autocomplete="off" enctype="multipart/form-data">
                @csrf
                @method('PUT')
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
                                            <label for="firstName">First Name</label><span class="text-danger"> * </span>
                                            <input type="text" name="first_name" class="form-control form-control-solid form-control-lg  @error('first_name') is-invalid @enderror" value="{{old('first_name')??$userDetails?->first_name }}" id="firstName">
                                            @if ($errors->has('first_name'))
                                            <div class=" invalid-feedback">
                                                {{ $errors->first('first_name') }}
                                            </div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="form-group">
                                            <label for="lastName">Last Name</label><span class="text-danger"> * </span>
                                            <input type="text" name="last_name" class="form-control form-control-solid form-control-lg  @error('last_name') is-invalid @enderror" value="{{old('last_name')??$userDetails?->last_name }}" id="lastName">
                                            @if ($errors->has('last_name'))
                                            <div class=" invalid-feedback">
                                                {{ $errors->first('last_name') }}
                                            </div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="form-group">
                                            <label for="fullName">Full Name</label><span class="text-danger"> * </span>
                                            <input type="text" name="name" class="form-control form-control-solid form-control-lg  @error('name') is-invalid @enderror" value="{{old('name')??$userDetails?->name}}" id="fullName">
                                            @if ($errors->has('name'))
                                            <div class=" invalid-feedback">
                                                {{ $errors->first('name') }}
                                            </div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="form-group">
                                            <label for="userImage">Image</label>
                                            <input type="file" name="image" class="form-control form-control-solid form-control-lg  @error('image') is-invalid @enderror" id="image" id="userImage">
                                            @if ($errors->has('image'))
                                            <div class="invalid-feedback">
                                                {{ $errors->first('image') }}
                                            </div>
                                            @endif
                                            @if($userDetails->image)
                                            <a class="fancybox-buttons" data-fancybox-group="button" href="{{$userDetails->image??''}}">
                                                <img height="100" width="100" src="{{$userDetails->image??''}}" />
                                            </a>
                                            @endif
                                        </div>
                                    </div> 
                                    <div class="col-xl-6">
                                        <div class="form-group">
                                            <label for="emailAddress">Email</label><span class="text-danger"> * </span>
                                            <input type="text" name="email" class="form-control form-control-solid form-control-lg  @error('email') is-invalid @enderror" value="{{old('email')??$userDetails->email ?? '' }}" id="emailAddress">
                                            @if ($errors->has('email'))
                                            <div class="invalid-feedback">
                                                {{ $errors->first('email') }}
                                            </div>
                                            @endif
                                        </div>
                                    </div> 
                                    <div class="col-xl-6">
                                        <div class="form-group">
                                            <label for="phoneNumber">Phone Number</label>
                                            <input type="text" name="phone_number" class="form-control form-control-solid form-control-lg  @error('phone_number') is-invalid @enderror" value="{{old('phone_number')??$userDetails?->phone_number}}" id="phoneNumber">
                                            @if ($errors->has('phone_number'))
                                            <div class="invalid-feedback">
                                                {{ $errors->first('phone_number') }}
                                            </div>
                                            @endif
                                        </div>
                                    </div> 
                                    <div class="col-xl-6">
                                        <div class="form-group">
                                            <label for="age">Age</label><span class="text-danger"> * </span>
                                            <input type="text" name="age" class="form-control form-control-solid form-control-lg  @error('age') is-invalid @enderror" value="{{old('age')??$userDetails?->age}}" id="age">
                                            @if ($errors->has('age'))
                                            <div class=" invalid-feedback">
                                                {{ $errors->first('age') }}
                                            </div>
                                            @endif
                                        </div>
                                    </div>   
                                </div>
                                <div class="border-top mt-5">
                                    <div>
                                        <button button type="submit"  class="btn btn-success font-weight-bold text-uppercase px-9 py-4">
                                            Update
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script>
        $(document).ready(function($) {
            $('#age').datepicker({
                dateFormat: 'yy-mm-dd',
                changeMonth: true,
                changeYear: true,
                defaultDate: new Date(1934, 0, 1),
                yearRange: '1934:' + (new Date().getFullYear() - 18),
                onChangeMonthYear: function(year, month, inst) {
                    var currentYear = new Date().getFullYear();
                    var startYear = 1990;
                    var endYear = currentYear - 18; 
                    var yearDropdown = inst.dpDiv.find('.ui-datepicker-year');
                    yearDropdown.empty();
                    for (var i = startYear; i <= endYear; i++) {
                        yearDropdown.append($('<option></option>').attr('value', i).text(i));
                    }
                }
            });
        });
    </script>
    @stop