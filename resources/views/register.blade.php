@extends('layouts.app')

@section('content')

    <!--forms-->
<div class="space-medium">
    <div class="container">
        <div class="row">

            <!--/.login-form-->
            <!--sing-up-form-->
            <div class="col-md-12">
                <div class="account-holder">
                    <h3>Register to Gym Naitei</h3>
                    <br>
                    <div class="social-btn">
                        <h6>Sign up With</h6>
                        <div class="fb-btn">
                            <i class="fa fa-facebook-official"></i><a href="#" class="fb-btn-text">Facebook</a>
                        </div>
                        <div class="google-btn">
                            <i class="fa fa-google"></i><a href="#" class="google-btn-text">Google</a>
                        </div>
                    </div>
                    <div class="row">
                        @if(count($errors)>0)
                        <div class="alert alert-danger">
                            @foreach($errors -> all() as $err)
                                {{$err}} <br>
                            @endforeach
                        </div>
                        @endif

                        <form action="{{route('postregister')}}" method="post">
                            {{csrf_field()}}
                            <fieldset>
                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <label class="control-label required" for="name"> Name<sup style="color:red">*</sup></label>
                                    <input id="name" name="name" required type="text" class="form-control" placeholder="Enter Your Name">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <label class="control-label required" for="email">Email<sup style="color:red">*</sup></label>
                                    <input id="email" name="email" required type="text" class="form-control" placeholder="Enter Email Address">
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <label class="control-label required" for="password">Password<sup style="color:red">*</sup></label>
                                    <input id="password" name="password" required type="password" class="form-control" placeholder="password">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <label class="control-label required" for="password">Confirm Password<sup style="color:red">*</sup></label>
                                    <input id="password" name="confirmpassword" required type="password" class="form-control" placeholder="Confirm password">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <label class="control-label required" for="password">Purpose of Training<sup style="color:red">*</sup></label>
                                    <div style="font-size: 20px; margin-left: 15px">
                                        Coach <input type="checkbox" name="person1" value="ok" style="margin-right: 40px; margin-left: 10px">
                                        Trainer <input type="checkbox" name="person2"value="ok1" style="margin-left: 10px">

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <label class="control-label " for="date">Age</label>
                                    <input id="date" name="age" type="text" class="form-control" placeholder="Age">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <label class="control-label " for="address">Address</label>
                                    <input id="address" name="address" type="password" class="form-control" placeholder="Address">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <label class="control-label " for="weight">Weight</label>
                                    <input id="weight" name="weight" type="number" class="form-control" placeholder="Weight">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <label class="control-label " for="height">Weight</label>
                                    <input id="height" name="height" type="number" class="form-control" placeholder="Height">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <label class="control-label " for="job">Job</label>
                                    <input id="job" name="job" type="text" class="form-control" placeholder="Your Job">
                                </div>
                                <div class="mb30">
                                    <p>Already have an account?   <a href="/login">Login</a></p>
                                </div>
                            </div>

                            <div class="col-md-6 ">
                                <button class="btn btn-primary btn-block">Register</button>
                            </div>
                            <div class="col-md-6 ">
                                <input type="reset"  value="Reset" class="btn btn-primary btn-block">
                            </div>
                            </fieldset>
                        </form>
                    </div>
                </div>

            </div>
            <!--/.sing-up-form-->

        </div>

    </div>
</div>
</div>
<!--/.forms-->
@endsection


