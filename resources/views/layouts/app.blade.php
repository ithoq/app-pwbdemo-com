<!DOCTYPE html>
<html>

@include('include.auth-head')

<body class="fixed-header">

<div class="login-wrapper ">
    @yield('content')
</div>

@include('include.auth-footer')

</body>
</html>