<!DOCTYPE html>
<html lang="en">
@include('layout.head')

<body>
    <!-- HEADER -->
    @include('layout.header')
    <!-- /HEADER -->
    <!-- NAVIGATION -->
    @include('layout.nav')
    <!-- /NAVIGATION -->
    <!-- BREADCRUMB -->
    @include('layout.breadcrumb')
    <!-- /BREADCRUMB -->

    {{-- Page content goes here --}}
    @yield('content')
</body>

<!-- jQuery Plugins -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/slick.min.js"></script>
<script src="js/nouislider.min.js"></script>
<script src="js/jquery.zoom.min.js"></script>
<script src="js/main.js"></script>

</html>
