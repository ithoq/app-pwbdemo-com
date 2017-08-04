@extends('layouts.master-auth')

@section('content')

<!-- START Login Background Pic Wrapper-->
<div class="bg-pic">
    <!-- START Background Pic-->
    <img src="assets/img/login/login-main.jpg" data-src="assets/img/login/login-main.jpg" data-src-retina="assets/img//login/login-main.jpg" alt="" class="lazy">
    <!-- END Background Pic-->

    <!-- START Background Caption-->
    <div class="bg-caption pull-bottom sm-pull-bottom text-white p-l-20 m-b-20">
        <h2 class="semi-bold text-white">
            EZ APP Makes It Easy To Enjoy What matters Most In Life By Saving You Time and Money!</h2>
        <p class="small">
            This is a prototype software EZAPP © 2017 <a href="http://www.platinumwb.com" target="_blank" style="color:white;">PlatinumWB</a>
        </p>
    </div>
    <!-- END Background Caption-->

</div>
<!-- END Login Background Pic Wrapper-->

<!-- START Login Right Container-->
<div class="login-container bg-white">
    <div class="p-l-50 m-l-20 p-r-50 m-r-20 p-t-50 m-t-30 sm-p-l-15 sm-p-r-15 sm-p-t-40">
        <!-- img src="assets/img/logo.png" alt="logo" data-src="assets/img/logo.png" data-src-retina="assets/img/logo_2x.png" width="78" height="22"-->
        <h1>EZ APP</h1>
        <p class="p-t-35">Sign Into Your Account</p>
        <!-- START Login Form -->

        <form id="form-login" class="p-t-15" role="form" action="index.html">
            {{ csrf_field() }}

            <!-- START Form Control-->
            <div class="form-group form-group-default">
                <label>Email</label>
                <div class="controls">
                    <input type="text" name="email" placeholder="Your Email" class="form-control" required>
                </div>
            </div>
            <!-- END Form Control-->

            <!-- START Form Control-->
            <div class="form-group form-group-default">
                <label>Password</label>
                <div class="controls">
                    <input type="password" class="form-control" name="password" placeholder="Your Password" required>
                </div>
            </div>

            <!-- START Form Control-->
            <!--
            <div class="row">
                <div class="col-md-6 no-padding sm-p-l-10">
                    <div class="checkbox ">
                        <input type="checkbox" value="1" id="checkbox1">
                        <label for="checkbox1">Keep Me Signed in</label>
                    </div>
                </div>
                <div class="col-md-6 d-flex align-items-center justify-content-end">
                    <a href="#" class="text-info small">Help? Contact Support</a>
                </div>
            </div>
            -->
            <!-- END Form Control-->

            <button class="btn btn-primary btn-cons m-t-10" type="submit">Sign In</button>
        </form>
        <!--END Login Form-->

        <div class="pull-bottom sm-pull-bottom">
            <div class="m-b-30 p-r-80 sm-m-t-20 sm-p-r-15 sm-p-b-20 clearfix">
                <div class="col-sm-3 col-md-2 no-padding">
                    <!--img alt="" class="m-t-5" data-src="assets/img/demo/pages_icon.png" data-src-retina="assets/img/demo/pages_icon_2x.png" height="60" src="assets/img/demo/pages_icon.png" width="60" -->
                </div>
                <div class="col-sm-9 no-padding m-t-10">
                    <p>
                        <!--small>
                            Create a pages account. If you have a facebook account, log into it for this
                            process. Sign in with <a href="#" class="text-info">Facebook</a> or <a href="#"
                                                                                                   class="text-info">Google</a>
                        </small-->
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END Login Right Container-->


@endsection

