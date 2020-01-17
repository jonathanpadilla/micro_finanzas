<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    @section('head.meta-tags') @show
    <!-- fontawesome icons CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/fontawesome4.7.0/css/font-awesome.min.css') }}" type="text/css">
    <!-- Custome scrollbar CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/jquery-custom-scrollbar-0.5.5/jquery-custom-scrollbar-0.5.5/jquery.custom-scrollbar.css')  }}" type="text/css">
    <!-- framework CSS -->
    <link id="theme" rel="stylesheet" href="{{ asset('assets/css/style-helpdesk.css') }}" type="text/css">
    @section('head.stylesheet') @show

    <title>@section('head.title') Micro finanzas @show</title>
</head>

<body class="fixed-header sticky-footer menuleft-open">
<div class="loader-logo">
    <img src="../assets/img/logo.png" alt="bootstrap template design by maxartkiller">
    <br>
    <div class="loader-ellipsis">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>
<div class="wrapper">

    @include('layouts/sidebar-top')
    @include('layouts/sidebar-left')

    <!-- main container starts -->
    <div class="main-container">

        @section('header')
            @include('layouts/header')
        @show

        <!-- Begin page content -->
        <div class="container">
            <div class="row">
                @section('content')
                    Contenido
                @show
            </div>
        </div>

    </div>
    <!-- main container ends -->
    @include('layouts/sidebar-right')

</div>
<!-- wrapper ends -->

@include('layouts/footer')

<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="{{ asset('assets/vendor/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('assets/vendor/popper.min.js') }}"></script>
<script src="{{ asset('assets/vendor/bootstrap-4.1.1/bootstrap.min.js') }}"></script>

<!--Cookie js for theme chooser and applying it -->
<script src="{{ asset('assets/vendor/cookie/jquery.cookie.js') }}"></script>

<!-- Circular progress -->
<script src="{{ asset('assets/vendor/jquery-custom-scrollbar-0.5.5/jquery-custom-scrollbar-0.5.5/jquery.custom-scrollbar.min.js') }}"></script>

<!-- Circular progress -->
<script src="{{ asset('assets/vendor/cicular_progress/circle-progress.min.js') }}"></script>

<!-- Sparklines chartsw -->
<script src="{{ asset('assets/vendor/sparklines/jquery.sparkline.min.js') }}"></script>

<!-- Other JavaScript -->
<script src="{{ asset('assets/js/main.js') }}"></script>

@section('scripts') @show

</body>

</html>
