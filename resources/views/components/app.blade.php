<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Fixedgear | {{ $title }}</title>
    <link href="{{ asset('assets/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <script src="https://kit.fontawesome.com/e273e69b57.js" crossorigin="anonymous"></script>
    <link href="{{ asset('assets/css/admin.min.css') }}" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        @section('sidebar')
        @show
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        @section('wrapper')
        @show
        <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->

    <div class="container">
        @yield('content')
    </div>


    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('assets/js/admin.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <!-- Core plugin JavaScript-->
    <script src="{{ asset('assets/js/jquery.easing.min.js') }}"></script>
    <!-- Custom scripts for all pages-->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>

    <!-- Page level plugins -->
    <script src="{{ asset('assets/js/chart.min.js') }}"></script>
    <!-- Page level custom scripts -->
    <script src="{{ asset('assets/js/chart-area-demo.js') }}"></script>
    <script src="{{ asset('assets/js/chart-pie-demo.js') }}"></script>


</body>

</html>
