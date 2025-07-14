@extends('frontend.layouts.default')
@section('content')

<!-- REGISTER -->
<section>
    <div class="login">
        <div class="container">
            <div class="row">

                <div class="inn">
                    <div class="lhs">
                        <div class="tit">
                            <h2>Now <b>Find your life partner</b> Easy and fast.</h2>
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
                                <h1>Sign up to Matrimony</h1>
                                <p>Already a member? <a href="{{  route('frontend.login') }}">Login</a></p>
                            </div>
                            <div class="form-login">
                                <form method="POST" id="contact_form" action="{{ route('frontend.sign_up_data') }}">
                                    @csrf
                                    <div class="form-group">
                                        <label class="lb">Name:</label>
                                        <input type="text" class="form-control" placeholder="Enter your full name"
                                            name="name">
                                           <span class="text-danger" id="name-error"></span>
                                    </div>
                                    <div class="form-group">
                                        <label class="lb">Email:</label>
                                        <input type="email" class="form-control" id="email"
                                            placeholder="Enter email" name="email">
                                            <span class="text-danger" id="email-error"></span>

                                    </div>
                                    <div class="form-group">
                                        <label class="lb">Phone:</label>
                                        <input type="number" class="form-control" id="phone"
                                            placeholder="Enter phone number" name="phone_number">
                                            <span class="text-danger" id="phone_number-error"></span>

                                    </div>
                                    <div class="form-group">
                                        <label class="lb">Password:</label>
                                        <input type="password" class="form-control" id="pwd"
                                            placeholder="Enter password" name="password">
                                            <span class="text-danger" id="password-error"></span>

                                    </div>
                                    <div class="form-group form-check">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="checkbox" name="term_and_condition"> Creating
                                            an account means you’re okay with our <a href="#!">Terms of Service</a>,
                                            Privacy Policy, and our default Notification Settings.
                                        </label>
                                    </div>
                                    <span class="text-danger" id="term_and_condition-error"></span>

                                    <button id="form_submit_btn" class="btn btn-primary">Create Account</button>
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
            $('#form_submit_btn').on('click', function(e) {
                e.preventDefault();
                $('#preloader').show();
                $.ajax({
                    url: $('#contact_form').attr('action'),
                    type: 'POST',
                    data: $('#contact_form').serialize(),
                    success: function(response) {
                        if (response.success) {
                            $('#preloader').hide();
                            toastr.success(response.success);
                            $('#contact_form')[0].reset();
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
                            if (errors.name) {
                                $('#name-error').html(errors.name[0]);
                            }
                            if (errors.email) {
                                $('#email-error').html(errors.email[0]);
                            }
                            if (errors.password) {
                                $('#password-error').html(errors.password[0]);
                            }
                            if (errors.phone_number) {
                                $('#phone_number-error').html(errors.phone_number[0]);
                            }if (errors.term_and_condition) {
                                $('#term_and_condition-error').html(errors.term_and_condition[0]);
                            }

                        } else {

                        }


                    }
                });
            });
        });
    </script>
@stop
