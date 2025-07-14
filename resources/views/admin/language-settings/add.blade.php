@extends('admin.layouts.layout')
@section('content')
<div class="content  d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="subheader py-2 py-lg-4  subheader-solid " id="kt_subheader">
        <div class=" container-fluid  d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <div class="d-flex align-items-center flex-wrap mr-1">
                <div class="d-flex align-items-baseline flex-wrap mr-5">
                    <h5 class="text-dark font-weight-bold my-1 mr-5">
                        Add New Word </h5>
                    <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                        <li class="breadcrumb-item">
                            <a href="{{ route('dashboard')}}" class="text-muted">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="{{route($model.'.index')}}" class="text-muted">{{Config('constants.LANGUAGE_SETTING.LANGUAGE_SETTINGS_TITLE')}}</a>
                        </li>
                    </ul>
                </div>
            </div>
            @include("admin.elements.quick_links")
        </div>
    </div>
    <div class="d-flex flex-column-fluid">
        <div class=" container ">
            <form action="{{route($model.'.store')}}" method="post" class="mws-form">
                @csrf
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
                                            <lable for="default">Default<lable><span class="asterisk">*</span>
                                                    <input type="text" name="default" class="form-control form-control-solid form-control-lg @error('default') is-invalid @enderror" value="{{old('default')}}">
                                                    @if ($errors->has('default'))
                                                    <div class=" invalid-feedback">
                                                        {{ $errors->first('default') }}
                                                    </div>
                                                    @endif
                                        </div>
                                    </div>
                                    @if(!empty($languages))
                                    @foreach($languages as $key => $val)
                                    <div class="col-xl-6">
                                        <div class="form-group">
                                            <lable>{{$val->title}}
                                                <lable>
                                                    <input type="text" name="language[{{$val->lang_code}}]" class="form-control form-control-solid form-control-lg">
                                        </div>
                                    </div>
                                    @endforeach
                                    @endif
                                </div>
                                <div class="d-flex justify-content-between border-top mt-5 pt-10">
                                    <div>
                                        <a href="{{route($model.'.create')}}" class="btn btn-danger font-weight-bold text-uppercase px-9 py-4">{{ trans('Reset') }}</a>
                                        <button button type="submit" class="btn btn-success font-weight-bold text-uppercase px-9 py-4">
                                            Submit
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
</div>
@stop