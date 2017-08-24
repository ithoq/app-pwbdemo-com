@extends('layouts.master')

@section('content')

    <!-- START PAGE CONTENT -->
    <div class="content ">

        @if ($ezapp_set['modal'] === true )
        @include('pages.'.EZ_SET_MODEL.'.modals.'.EZ_SET_MODEL.'-create-modal')
        @endif

        <div class="jumbotron" data-pages="parallax">
            <div class=" container-fluid   container-fixed-lg sm-p-l-0 sm-p-r-0">
                <div class="inner">
                    <!-- START BREADCRUMB -->
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{$ezapp_set['base_url']}}/dashbaord">Dashboard</a></li>
                        <li class="breadcrumb-item active">{{EZ_SET_MODEL}}</li>
                    </ol>
                    <!-- END BREADCRUMB -->
                    <div class="row">
                        <div class="col-xl-7 col-lg-6 ">
                            <!-- START card -->
                            <div class="full-height">
                                <div class="card-block text-center">
                                    <img class="image-responsive-height demo-mw-600" src="assets/img/demo/tables.jpg" alt="">
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
                                    <h3>Easier than finding a needle in the haystack.</h3>
                                    <p>Sharing the same stylized design layout, these tables allows for the effective compilation and organization of data with easy access and maneuverability for users. </p>
                                    <p class="small hint-text m-t-5">VIA senior product manage
                                        <br> for UI/UX at REVOX</p>
                                    <br>
                                    <button class="btn btn-primary btn-cons">More</button>

                                    @if ($ezapp_set['modal'] === true )
                                    <button id="show-modal" class="btn btn-primary btn-cons"><i class="fa fa-plus"></i> Add {{EZ_SET_MODEL}}
                                    </button>
                                    @endif


                                </div>
                            </div>
                            <!-- END card -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END JUMBOTRON -->

        @include('page-layouts.list')

    </div>
    <!-- END PAGE CONTENT -->

@endsection