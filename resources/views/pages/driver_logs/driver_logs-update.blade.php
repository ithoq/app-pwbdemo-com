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
                        <div class="col-xl-5 col-lg-6 ">
                            <!-- START card -->
                            <div class="card card-transparent">
                                <div class="card-block">
                                    <div>
                                        <div class="profile-img-wrapper m-t-5 inline">
                                            <img width="35" height="35" src="{{$ezapp_set['base_url']}}/assets/img/profiles/avatar_small.jpg" alt="" data-src="{{$ezapp_set['base_url']}}/assets/img/profiles/avatar_small.jpg" data-src-retina="{{$ezapp_set['base_url']}}/assets/img/profiles/avatar_small2x.jpg">
                                            <div class="chat-status available">
                                            </div>
                                        </div>
                                        <div class="inline m-l-10">
                                            <p class="small hint-text m-t-5">John Doe
                                                <br> J & J Driver</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END card -->
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xl-12 col-lg-12 ">
                            <!-- START card -->
                            <div class="card card-transparent">
                                <div class="card-block">
                                <!--img class="image-responsive-height demo-mw-600" src="{{$ezapp_set['base_url']}}/assets/img/demo/form_hero.gif" alt=""-->
                                    <h3><strong>JOB #</strong> {{$ezapp_set['job_id']}}<br /><strong>Date: </strong>Thursday August 4, 2017</h3>
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
                                Update Log Informaiton
                            </div>
                        </div>
                        <div class="card-block">
                            <form class="" method="post" action="{{$ezapp_set['base_url']}}/{{EZ_SET_MODEL}}/save" role="form">

                                {{ csrf_field() }}
                                <input type="hidden" name="job_id" value="{{$ezapp_set['job_id']}}" />

                                <div class="row">

                                    <div class="col-md-1">
                                        <div id="empty" class="form-group form-group-default input-empty">
                                            <label>Empty</label>
                                            <input type="checkbox" name="empty" data-init-plugin="switchery" data-size="large" data-color="primary" <?php echo($ezapp_set['driver_logs']['empty'] == 1)? 'checked="checked"':''; ?>/>
                                        </div>
                                    </div>

                                    <div id="load" class="col-md-1">
                                        <div class="form-group form-group-default input-load" >
                                            <label>Load</label>
                                            <input type="checkbox" name="load" data-init-plugin="switchery" data-size="large" data-color="primary" <?php echo($ezapp_set['driver_logs']['load'] == 1)? 'checked="checked"':''; ?> />
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

    <!-- {{$ezapp_set['driver_logs']['empty']}} -->
    <!-- {{$ezapp_set['driver_logs']['load']}} -->
    <script src="{{$ezapp_set['base_url']}}/assets/plugins/jquery/jquery-1.11.1.min.js" type="text/javascript"></script>
    <script>
        $(document).ready(function() {

            <?php if ( $ezapp_set['driver_logs']['empty'] == 1 ) { ?>
                $("#load").toggle();
            <?php } ?>

            <?php if ($ezapp_set['driver_logs']['load'] == 1 ) { ?>
            $("#empty").toggle();
            <?php } ?>

            $("#empty").on('click', function(event) {
                $("#load").toggle();
            });

            $("#load").on('click', function(event) {
                $("#empty").toggle();
            });

        });

    </script>


@endsection