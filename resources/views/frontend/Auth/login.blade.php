@extends('frontend.layouts.default')
@section('content')

<!-- LOGIN -->
<section>
    <div class="login">
        <div class="container">
            <div class="row">

                <div class="inn">
                    <div class="lhs">
                        <div class="tit">
                            <h2>Now <b>Find <br> your life partner</b> Easy and fast.</h2>
                        </div>
                        <div class="im">
                            <img src="{{ asset('frontend/images/login-couple.png') }}" alt="">
                        </div>
                        <div class="log-bg">&nbsp;</div>
                    </div>
                    <div class="rhs">
                        <div>
                            <div class="form-tit">
                                <h4>Start for free</h4>
                                <h1>Sign in to Matrimony</h1>
                                <p>Not a member? <a href="{{  route('frontend.sign_up') }}">Sign up now</a></p>
                            </div>
                            <div class="form-login">
                                <form method="POST" id="login_form" action="{{ route('frontend.login_user') }}">
                                    @csrf
                                    <div class="form-group">
                                        <label class="lb">Email:</label>
                                        <input type="email" class="form-control" id="email"
                                            placeholder="Enter email" name="email">
                                            <div class="text-dange" id="email-error"></div>
                                    </div>
                                    <div class="form-group">
                                        <label class="lb">Password:</label>
                                        <input type="password" class="form-control" id="pwd"
                                            placeholder="Enter password" name="password">
                                            <div class="text-danger" id="password-error"></div>
                                    </div>
                                    <div class="form-group form-check">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="checkbox" name="remember_me"> Remember
                                            me
                                        </label>
                                    </div>
                                    <button id="login_button" class="btn btn-primary">Sign in</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- END -->



@stop

@section('frontend_script')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#login_button').on('click', function(e) {
                e.preventDefault();
                $('#preloader').show();
                $.ajax({
                    url: $('#login_form').attr('action'),
                    type: 'POST',
                    data: $('#login_form').serialize(),
                    success: function(response) {
                        if (response.success) {
                            $('#preloader').hide();
                            toastr.success(response.success);
                        window.location.herf = {{ route('frontend.index') }};
                        } else {
                            $('#preloader').hide();
                            toastr.error(response.error);
                            // $('#contact_form')[0].reset();
                        }
                    },
                    error: function(xhr, status, error) {
                        $('#preloader').hide();
                        if (xhr.status === 422) {
                            var errors = xhr.responseJSON.errors;

                            if (errors.email) {
                                $('#email-error').html(errors.email[0]);
                            }
                            if (errors.password) {
                                $('#password-error').html(errors.password[0]);
                            }

                        } else {

                        }


                    }
                });
            });
        });
    </script>
@stop
