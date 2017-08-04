<!DOCTYPE html>
<html>

@include('include.head')

<body class="fixed-header">

@include('include.nav')

<!-- START PAGE-CONTAINER -->
<div class="page-container ">

    @include('include.header')

@yield('content')

@include('sections.all')

</div>
<!-- END PAGE CONTAINER -->

@include('include.footer')


</body>
</html>