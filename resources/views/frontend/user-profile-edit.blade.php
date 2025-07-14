@extends('frontend.layouts.default')
@section('content')

    <!-- REGISTER -->
    <section>
        <div class="login pro-edit-update">
            <div class="container">
                <div class="row">
                    <div class="inn">
                        <div class="rhs">
                                <div class="form-login">
                                    <form method="POST" id="UserProfileEditRequest" action="{{ route('frontend.user_profile_data') }}">
                                        <!--PROFILE BIO-->
                                        <div class="edit-pro-parti">
                                            <div class="form-tit">
                                                <h4>Basic info</h4>
                                                <h1>Edit my profile</h1>
                                            </div>
                                            <div class="form-group">
                                                <label class="lb">Name:</label>
                                                <input type="text" class="form-control" placeholder="Enter your full name"
                                                    name="name">
                                            </div>
                                            <div class="text-danger" id="name-error"></div>

                                            <div class="form-group">
                                                <label class="lb">Email:</label>
                                                <input type="email" class="form-control" id="email"
                                                    placeholder="Enter email" name="email" disabled>
                                            </div>
                                            <div class="form-group">
                                                <label class="lb">Phone:</label>
                                                <input type="number" class="form-control" id="phone"
                                                    placeholder="Enter phone number" name="phone" disabled>
                                            </div>
                                            <div class="text-danger" id="phone-error"></div>


                                        </div>
                                        <!--END PROFILE BIO-->
                                        <!--PROFILE BIO-->
                                        <div class="edit-pro-parti">
                                            <div class="form-tit">
                                                <h4>Basic info</h4>
                                                <h1>Advanced bio</h1>
                                            </div>


                                            <div class="row">
                                                <div class="col-md-6 form-group">
                                                    <label class="lb">Gender:</label>
                                                    <select class="form-select chosen-select" name="gender" data-placeholder="Select your Gender">
                                                    @php
                                                        $data = Config('constants.GENDER');
                                                    @endphp
                                                    @foreach ($data as $key => $value )
                                                    <option value="{{ $key }}">{{ $value }}</option>
                                                    @endforeach
                                                      </select>
                                                      <div class="text-danger" id="gender-error"></div>
                                                </div>
                                                <div class="col-md-6 form-group">
                                                    <label class="lb">City:</label>
                                                    <select class="form-select chosen-select" name="city" data-placeholder="Select your City">
                                                        @php
                                                        $data = Config('constants.CITY');
                                                    @endphp
                                                    @foreach ($data as $key => $value )
                                                    <option value="{{ $key }}">{{ $value }}</option>
                                                    @endforeach
                                                      </select>
                                                </div>
                                                <div class="text-danger" id="city-error"></div>

                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 form-group">
                                                    <label class="lb">Date of birth:</label>
                                                    <input type="text" name="dob" class="form-control" >
                                                    <div class="text-danger" id="dob-error"></div>

                                                </div>

                                                <div class="col-md-6 form-group">
                                                    <label class="lb">Age:</label>
                                                    <input type="number" name="age" class="form-control" >
                                                    <div class="text-danger" id="age-error"></div>

                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 form-group">
                                                    <label class="lb">Height:</label>
                                                    <input type="text" name="height" class="form-control" >
                                                    <div class="text-danger" id="height-error"></div>

                                                </div>
                                                <div class="col-md-6 form-group">
                                                    <label class="lb">Weight:</label>
                                                    <input type="text" name="weight" class="form-control" >
                                                    <div class="text-danger" id="weight-error"></div>

                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 form-group">
                                                    <label class="lb">Fathers name:</label>
                                                    <input type="text" name="father_name" class="form-control" >
                                                    <div class="text-danger" id="father_name-error"></div>

                                                </div>
                                                <div class="col-md-6 form-group">
                                                    <label class="lb">Mothers name:</label>
                                                    <input type="text" name="mother_name" class="form-control" >
                                                    <div class="text-danger" id="mother_name-error"></div>

                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="lb">Address:</label>
                                                <input type="text" name="address" class="form-control" >
                                                <div class="text-danger" id="address-error"></div>

                                            </div>
                                        </div>
                                        <!--END PROFILE BIO-->
                                        <!--PROFILE BIO-->
                                        <div class="edit-pro-parti">
                                            <div class="form-tit">
                                                <h4>Job details</h4>
                                                <h1>Job & Education</h1>
                                            </div>
                                            <div class="form-group">
                                                <label class="lb">Job type:</label>
                                                <select class="form-select chosen-select" name="job_type" data-placeholder="Select your Hobbies">
                                                    <option>Business</option>
                                                    <option>Employee</option>
                                                    <option>Government</option>
                                                    <option>Jobless</option>
                                                  </select>
                                                  <div class="text-danger" id="job_type-error"></div>

                                            </div>
                                            <div class="form-group">
                                                <label class="lb">Company name:</label>
                                                <input type="text" name="company" class="form-control" >
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 form-group">
                                                    <label class="lb">Salary:</label>
                                                    <input type="text" name="salary" class="form-control">
                                                    <div class="text-danger" id="salary-error"></div>

                                                </div>
                                                <div class="col-md-6 form-group">
                                                    <label class="lb">Job total experience:</label>
                                                    <input type="text" name="job_ex" class="form-control" >
                                                    <div class="text-danger" id="job_ex-error"></div>

                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="lb">Degree:</label>
                                                <input type="text" name="degree" class="form-control" >
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 form-group">
                                                    <label class="lb">School:</label>
                                                    <input type="text" name="school" class="form-control" >
                                                </div>
                                                <div class="col-md-6 form-group">
                                                    <label class="lb">College:</label>
                                                    <input type="text"  name="collage" class="form-control" >
                                                </div>
                                            </div>
                                        </div>
                                        <!--END PROFILE BIO-->
                                        <!--PROFILE BIO-->
                                        <div class="edit-pro-parti">
                                            <div class="form-tit">
                                                <h4>Media</h4>
                                                <h1>Social media</h1>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 form-group">
                                                    <label class="lb">WhatsApp:</label>
                                                    <input type="text" name="whatapp" class="form-control">
                                                </div>
                                                <div class="col-md-6 form-group">
                                                    <label class="lb">Facebook:</label>
                                                    <input type="text" name="facebook" class="form-control" >
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 form-group">
                                                    <label class="lb">Instagram:</label>
                                                    <input type="text" name="instagram" class="form-control">
                                                </div>

                                            </div>

                                        </div>
                                        <!--END PROFILE BIO-->
                                        <!--PROFILE BIO-->
                                        <div class="edit-pro-parti">
                                            <div class="form-tit">
                                                <h4>interests</h4>
                                                <h1>Hobbies</h1>
                                            </div>
                                            <div class="chosenini">
                                                <div class="form-group">
                                                    <select class="chosen-select" name="hobbies[]" data-placeholder="Select your Hobbies" multiple>
                                                        <option></option>
                                                        <option>Modelling </option>
                                                        <option>Watching </option>
                                                        <option>movies </option>
                                                        <option>Playing </option>
                                                        <option>volleyball</option>
                                                        <option>Hangout with family </option>
                                                        <option>Adventure travel </option>
                                                        <option>Books reading </option>
                                                        <option>Music </option>
                                                        <option>Cooking </option>
                                                        <option>Yoga</option>
                                                    </select>
                                                </div>
                                                <div class="text-danger" id="hobbies-error"></div>

                                            </div>
                                        </div>
                                        <!--END PROFILE BIO-->
                                        <button type="button" id="submit_btn" class="btn btn-primary">Submit</button>
                                    </form>
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
            $('#submit_btn').on('click', function(e) {
                e.preventDefault();
                $('#preloader').show();
                $.ajax({
                    url: $('#UserProfileEditRequest').attr('action'),
                    type: 'POST',
                    data: $('#UserProfileEditRequest').serialize(),
                    success: function(response) {
                        if (response.success) {
                            $('#preloader').hide();
                            toastr.success(response.success);
                        window.location.herf = {{ route('frontend.dashboard') }};
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

                     $('.error-message').html('');

                       $.each(errors, function(field, messages) {
                          $('#' + field + '-error').html(messages[0]);  // Assuming error elements are named like 'email-error', 'password-error', etc.
                               });

                          } else {
                      // Handle other status codes
                      }
}

                });
            });
        });
    </script>
@stop
