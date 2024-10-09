<!doctype html>
<html lang="en">

<head>
    @include('Backend.includes._css')
</head>

<body>
<!--wrapper-->
<div class="wrapper">
    @include('Backend.includes._sidebar')
    @include('Backend.includes._topheader')
    <!--start page wrapper -->
    <div class="page-wrapper">
       @yield('maincontent')
    </div>
    <!--end page wrapper -->
    <!--start overlay-->
   @include('Backend.includes._footer')
</div>
<!--end wrapper-->

{{--JAVASCRIPT--}}
@include('Backend.includes._script')
</body>

</html>
