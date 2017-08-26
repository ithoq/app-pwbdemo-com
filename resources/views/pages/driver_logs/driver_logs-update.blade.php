@extends('layouts.master')

@section('content')

    <!-- START PAGE CONTENT -->
    <div class="content ">

        <!-- START JUMBOTRON -->
        <div class="jumbotron" data-pages="parallax">
            <div class=" container-fluid   container-fixed-lg sm-p-l-0 sm-p-r-0">
                <div class="inner">
                    <!-- START BREADCRUMB -->
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{$ezapp_set['base_url']}}/dashboard">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="{{$ezapp_set['base_url']}}/{{EZ_SET_MODEL}}">{{EZ_SET_MODEL}}</a></li>
                        <li class="breadcrumb-item active">Update {{EZ_SET_MODEL}}</li>
                    </ol>
                    <!-- END BREADCRUMB -->
                    <div class="row">
                        <div class="col-xl-7 col-lg-6 ">
                            <!-- START card -->
                            <div class="card card-default">
                                <div class="card-block text-center">
                                <!--img class="image-responsive-height demo-mw-600" src="{{$ezapp_set['base_url']}}/assets/img/demo/form_hero.gif" alt=""-->
                                    <h3>This is some sample Text.</h3>
                                </div>
                            </div>
                            <!-- END card -->
                        </div>
                        <div class="col-xl-5 col-lg-6 ">
                            <!-- START card -->
                            <div class="card card-transparent">
                                <div class="card-header ">
                                    <div class="card-title">Getting started
                                    </div>
                                </div>
                                <div class="card-block">
                                    <h3>One of the most underestimated elements of design is typography. However, it’s
                                        critical in both print and web media. We Made it Perfect in both.</h3>
                                    <br>
                                    <div>
                                        <div class="profile-img-wrapper m-t-5 inline">
                                            <img width="35" height="35" src="{{$ezapp_set['base_url']}}/assets/img/profiles/avatar_small.jpg" alt="" data-src="{{$ezapp_set['base_url']}}/assets/img/profiles/avatar_small.jpg" data-src-retina="{{$ezapp_set['base_url']}}/assets/img/profiles/avatar_small2x.jpg">
                                            <div class="chat-status available">
                                            </div>
                                        </div>
                                        <div class="inline m-l-10">
                                            <p class="small hint-text m-t-5">VIA senior product manage
                                                <br> for UI/UX at REVOX</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END card -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END JUMBOTRON -->

        <!-- START CONTAINER FLUID -->
        <div class=" container-fluid   container-fixed-lg">
            <div class="row">
                <div class="col-lg-12">
                    <!-- START card -->
                    <div class="card card-default">
                        <div class="card-header ">
                            <div class="card-title">
                                Create New Vendor
                            </div>
                        </div>
                        <div class="card-block">
                            <h5>
                                Update {{EZ_SET_MODEL}} Informaiton
                            </h5>
                            <form class="" method="post" action="{{$ezapp_set['base_url']}}/{{EZ_SET_MODEL}}/save" role="form">

                                {{ csrf_field() }}
                                <input type="hidden" name="job_id" value="{{$ezapp_set['job_id']}}" />

                                <div class="row">
                                    <div class="col-md-1">
                                        <div class="form-group form-group-default">
                                            <label>Empty</label>
                                            <input type="checkbox" name="empty" data-init-plugin="switchery" data-size="large" data-color="primary"/>
                                        </div>
                                    </div>
                                    <div class="col-md-1">
                                        <div class="form-group form-group-default">
                                            <label>Load</label>
                                            <input type="checkbox" name="load" data-init-plugin="switchery" data-size="large" data-color="primary" />
                                        </div>
                                    </div>
                                    <div class="col-md-10"></div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <hr/>
                                        <input type="submit" class="btn btn-primary btn-lg" value="SAVE">
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                    <!-- END card -->
                </div>

            </div>
        </div>
        <!-- END CONTAINER FLUID -->


    </div>
    <!-- END PAGE CONTENT -->

@endsection