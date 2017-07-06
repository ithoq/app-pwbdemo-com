<!DOCTYPE html>
<html>

@include('include.head')

<body class="fixed-header ">

@include('include.nav')

<div class="page-container ">

    @include('include.header')

@yield('content')

@include('sections.all')

</div>

@include('sections.all2')

@include('include.footer')


</body>
</html>