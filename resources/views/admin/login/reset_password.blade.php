@extends('admin.layouts.login_layout')
@section('content')
<div class="d-flex flex-column flex-root">
    <div class="login login-4 wizard d-flex flex-column flex-lg-row flex-column-fluid">
        <div class="login-container d-flex flex-center bgi-size-cover bgi-no-repeat flex-row-fluid p-8">
            <div class="login-content d-flex flex-column card p-5 p-md-10">
                <a href="{{route('adminpnlx')}}" class="login-logo pb-8 text-center">
                    <img src="{{asset('/img/logo-light.png')}}" class="max-h-80px" alt="" />
                </a>
                <div class="login-form">
                    <form action="{{ route('save_password') }}" method="post" class="form" id="kt_login_singin_form">
                        @csrf
                        <input type="hidden" name="validate_string" value="{{ $validate_string }}">
                        <div class="mb-12 text-center">
                            <h3 class="font-weight-bold text-dark">Reset Password</h3>
                            <p>Enter your email to reset your password.</p>
                        </div>
                        <div class="form-group">
                            <label class="font-size-h6 font-weight-bolder text-dark">New Password</label>
                            <input type="password" name="new_password" class="form-control form-control-solid h-auto py-5 px-6 rounded-lg border-0 @error('new_password') is-invalid @enderror">
                            @if ($errors->has('new_password'))
                            <div class="invalid-feedback">
                                {{ $errors->first('new_password') }}
                            </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="font-size-h6 font-weight-bolder text-dark">Confirm Password</label>
                            <input type="password" name="new_password_confirmation" class="form-control form-control-solid h-auto py-5 px-6 rounded-lg border-0 @error('new_password_confirmation') is-invalid @enderror">
                            @if ($errors->has('new_password_confirmation'))
                            <div class="invalid-feedback">
                                {{ $errors->first('new_password_confirmation') }}
                            </div>
                            @endif
                        </div>
                        <div class="text-center">
                            <button type="submit" id="kt_login_submit" class="btn btn-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mr-3">Submit</button>
                            <a href="{{route('adminpnlx')}}" class="btn btn-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mr-3">Back To
                                Login</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@stop