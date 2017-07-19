<!DOCTYPE html>
<html>

@include('include.head')

<body class="fixed-header mac desktop pace-done menu-pin menu-behind">

@include('include.nav')

<div class="page-container ">

    @include('include.header')

@yield('content')

@include('sections.all')

</div>

@include('sections.blank')

@include('include.footer')


</body>
</html>