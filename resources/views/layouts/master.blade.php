<!DOCTYPE html>
<html>

@include('include.head')

<body class="fixed-header menu-pin">

@include('include.nav')

<!-- START PAGE-CONTAINER -->
<div class="page-container ">

    @include('include.header')

        <!-- START PAGE CONTENT WRAPPER -->
        <div class="page-content-wrapper ">

            @yield('content')

            @include('include.page-footer')

        </div>
        <!-- END PAGE CONTENT WRAPPER -->
<?php /*
@include('sections.right-menu')
@include('sections.search')
*/ ?>

</div>
<!-- END PAGE CONTAINER -->

@include('include.footer')


</body>
</html>