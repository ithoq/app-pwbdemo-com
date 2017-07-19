@extends('layouts.master')

@section('content')

    <div class="page-content-wrapper full-height" id="titleParallax">

        <div class="content">

            <div class="jumbotron  no-margin" data-pages="parallax">
                <div class="container-fluid container-fixed-lg sm-p-l-20 sm-p-r-20">
                    <div class="inner">
                        <h3 class="">Page Title</h3>
                    </div>
                </div>
            </div>

            <div class="container-fluid container-fixed-lg demo-container">

                <ul class="breadcrumb">
                    <li>
                        <a href="#">Home</a>
                    </li>
                    <li>
                        <a href="#" class="active">Parallax for page title</a>
                    </li>
                </ul>


            </div>
        </div>

        @include('include.page-footer')

    </div>

@endsection