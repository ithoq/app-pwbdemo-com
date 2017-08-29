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
                        <div class="col-xl-5 col-lg-6 ">
                            <!-- START card -->
                            <div class="card card-transparent">
                                <div class="card-block">
                                    <h3>Manage Your Driver Logs.</h3>
                                    <p>Use the table below to manage your driver logs.  Click on a log to update.  Click on Add Driver Log to add new Log.</p>

                                    <hr />

                                    @if ($ezapp_set['modal'] === true )
                                        <button id="show-modal" class="btn btn-primary btn-cons"><i class="fa fa-plus"></i> Add New Log
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

        @include('page-layouts.driver_logs.driver_logs-list')

    </div>
    <!-- END PAGE CONTENT -->

@endsection