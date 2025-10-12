<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Multipurpose, super flexible, powerful, clean modern responsive bootstrap 5 admin template">
    <meta name="keywords"
        content="admin template, ki-admin admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="la-themes">

    <link rel="icon" type="image/x-icon" href="{{ asset('assets/images/logo/favicon.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/logo/favicon.png') }}">

    <title>Ecommerce Dashboard | ki-admin - Premium Admin Template</title>

    <!-- Animation css -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/animation/animate.min.css') }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap"
        rel="stylesheet">

    <!-- Flag Icon css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/flag-icons-master/flag-icon.css') }}">

    <!-- Tabler Icons -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/tabler-icons/tabler-icons.css') }}">

    <!-- Apexcharts css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/apexcharts/apexcharts.css') }}">

    <!-- Glight css -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/glightbox/glightbox.min.css') }}">

    <!-- Bootstrap css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/bootstrap/bootstrap.min.css') }}">

    <!-- Simplebar css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/simplebar/simplebar.css') }}">

    <!-- App css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">

    <!-- Responsive css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/responsive.css') }}">

    <!--font-awesome-css-->
    <link href="../assets/vendor/fontawesome/css/all.css" rel="stylesheet">

    <!-- iconoir icon css  -->
    <link href="../assets/vendor/ionio-icon/css/iconoir.css" rel="stylesheet">


    <!-- Font Awesome JS Core -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/js/all.min.js" integrity="sha512-..."
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</head>

<body>
    <div class="app-wrapper " style="box-shadow: none">

        {{-- loader --}}
         <div class="loader-wrapper">
            <div class="loader_24"></div>
        </div>

        {{-- manu bar --}}
        @include('layouts.admin.partials.manu_navigation')
        {{-- Body main section --}}
        <div class="app-content " style="box-shadow: none">
            <div class="">

                {{-- Header Section --}}
                @include('layouts.admin.partials.header')
                <main>
                    <div class="container-fluid ">
                        @yield('content')
                    </div>
                </main>
            </div>
        </div>
        <!-- Body main section ends -->
        <!-- tap on top -->
        <div class="go-top">
            <span class="progress-value">
                <i class="ti ti-chevron-up"></i>
            </span>
        </div>

        <!-- Footer Section -->
        <x-admin.footer />
    </div>

    <!-- welecome modal start-->
    {{-- <x-admin.modal /> --}}
    <!-- modal end -->

    <!-- customizer -->
    <div id="customizer"></div>

    <!-- latest jquery -->
    <script src="{{ asset('assets/js/jquery-3.6.3.min.js') }}"></script>

    <!-- Bootstrap js -->
    <script src="{{ asset('assets/vendor/bootstrap/bootstrap.bundle.min.js') }}"></script>

    <!-- Simple bar js -->
    <script src="{{ asset('assets/vendor/simplebar/simplebar.js') }}"></script>

    <!-- phosphor js -->
    <script src="{{ asset('assets/vendor/phosphor/phosphor.js') }}"></script>

    <!-- Glight js -->
    <script src="{{ asset('assets/vendor/glightbox/glightbox.min.js') }}"></script>

    <!-- apexcharts -->
    <script src="{{ asset('assets/vendor/apexcharts/apexcharts.min.js') }}"></script>

    <!-- Customizer js -->
    <script src="{{ asset('assets/js/customizer.js') }}"></script>

    <!-- Ecommerce js -->
    <script src="{{ asset('assets/js/ecommerce_dashboard.js') }}"></script>

    <!-- App js -->
    <script src="{{ asset('assets/js/script.js') }}"></script>

</body>

</html>
