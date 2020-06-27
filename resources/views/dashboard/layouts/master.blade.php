<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Multikart admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Multikart admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="{{ asset('assets/images/dashboard/favicon.png" type="image/x-icon') }}">
    <link rel="shortcut icon" href="{{ asset('assets/images/dashboard/favicon.png" type="image/x-icon') }}">
    <title> @yield('title') </title>

    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Font Awesome-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/fontawesome.css') }}">

    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/flag-icon.css') }}">

    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/icofont.css') }}">

    <!-- Prism css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/prism.css') }}">

    <!-- Chartist css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/chartist.css') }}">

    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.css') }}">

    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/admin.css') }}">
    
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @yield('css')
</head>

<body>

<!-- page-wrapper Start-->
<div class="page-wrapper">

    @include('dashboard.layouts.partials.header')

    <!-- Page Body Start-->
    <div class="page-body-wrapper">

        @include('dashboard.layouts.partials.page-sidebar')

        @include('dashboard.layouts.partials.right-sidebar')

        <div class="page-body">

            <!-- Container-fluid starts-->
            <!-- Container-fluid Ends-->
            @yield('content')

            <!-- Container-fluid starts-->
            <!-- Container-fluid Ends-->

        </div>
        @include('dashboard.layouts.partials.footer')

    </div>

</div>

<!-- latest jquery-->
<script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>

<!-- Bootstrap js-->
<script src="{{ asset('assets/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.js') }}"></script>

<!-- feather icon js-->
<script src="{{ asset('assets/js/icons/feather-icon/feather.min.js') }}"></script>
<script src="{{ asset('assets/js/icons/feather-icon/feather-icon.js') }}"></script>

<!-- Sidebar jquery-->
<script src="{{ asset('assets/js/sidebar-menu.js') }}"></script>

<!--chartist js-->
<script src="{{ asset('assets/js/chart/chartist/chartist.js') }}"></script>

<!--chartjs js-->
<script src="{{ asset('assets/js/chart/chartjs/chart.min.js') }}"></script>

<!-- lazyload js-->
<script src="{{ asset('assets/js/lazysizes.min.js') }}"></script>

<!--copycode js-->
<script src="{{ asset('assets/js/prism/prism.min.js') }}"></script>
<script src="{{ asset('assets/js/clipboard/clipboard.min.js') }}"></script>
<script src="{{ asset('assets/js/custom-card/custom-card.js') }}"></script>

<!--counter js-->
<script src="{{ asset('assets/js/counter/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('assets/js/counter/jquery.counterup.min.js') }}"></script>
<script src="{{ asset('assets/js/counter/counter-custom.js') }}"></script>

<!--peity chart js-->
<script src="{{ asset('assets/js/chart/peity-chart/peity.jquery.js') }}"></script>

<!--sparkline chart js-->
<script src="{{ asset('assets/js/chart/sparkline/sparkline.js') }}"></script>

<!--Customizer admin-->
<script src="{{ asset('assets/js/admin-customizer.js') }}"></script>

<!--dashboard custom js-->
<script src="{{ asset('assets/js/dashboard/default.js') }}"></script>

<!--right sidebar js-->
<script src="{{ asset('assets/js/chat-menu.js') }}"></script>

<!--height equal js-->
<script src="{{ asset('assets/js/height-equal.js') }}"></script>

<!-- lazyload js-->
<script src="{{ asset('assets/js/lazysizes.min.js') }}"></script>

<!--script admin-->
<script src="{{ asset('assets/js/admin-script.js') }}"></script>

@yield('js')

</body>
</html>
