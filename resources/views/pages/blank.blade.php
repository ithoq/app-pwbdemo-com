@extends('layouts.master')

@section('content')

<div class="page-content-wrapper content-builder active full-height" id="plainContent">

    <div class="content">

        <div class="container-fluid container-fixed-lg">
            <ul class="breadcrumb">
                <li>
                    <a href="#">Home</a>
                </li>
                <li><a href="#" class="active">Plain template</a>
                </li>
            </ul>

            <h3 class="page-title">Page Title</h3>
        </div>
        <div class="container-fluid container-fixed-lg">


        </div>
    </div>



    @include('include.page-footer')

</div>

@endsection