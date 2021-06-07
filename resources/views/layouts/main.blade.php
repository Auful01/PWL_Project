<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    {{-- <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"> --}}

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- <title>{{ config('app.name', 'Laravel') }}</title> --}}
    <link rel="shortcut icon" href="{{asset('images/camera-2-64.ico ')}}">
    <title> LoCam.id</title>
{{--
    <link rel="stylesheet" href="{{url('url('https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css')}}" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> --}}


    <!-- Prevent the demo from appearing in search engines -->
    <meta name="robots" content="noindex">

    <script src="https://kit.fontawesome.com/0c295db722.js" crossorigin="anonymous"></script>

    <link type="text/css" href="{{url('assets/vendor/perfect-scrollbar.css')}}" rel="stylesheet">

    <!-- App CSS -->
    <link type="text/css" href="{{url('assets/css/app.css')}}" rel="stylesheet">
    <link type="text/css" href="{{url('assets/css/vendor-material-icons.rtl.css" ')}} rel="stylesheet">

    <!-- Material Design Icons -->
    <link type="text/css" href="{{url('assets/css/vendor-material-icons.css')}}" rel="stylesheet">
    <link type="text/css" href="{{url('assets/css/vendor-material-icons.rtl.css')}}" rel="stylesheet">

    <!-- Font Awesome FREE Icons -->
    <link type="text/css" href="{{url('assets/css/vendor-fontawesome-free.css')}}" rel="stylesheet">
    <link type="text/css" href="{{url('assets/css/vendor-fontawesome-free.rtl.css')}}" rel="stylesheet">


    <!-- Flatpickr -->
    <link type="text/css" href="{{url('assets/css/vendor-flatpickr.css')}}" rel="stylesheet">
    <link type="text/css" href="{{url('assets/css/vendor-flatpickr.rtl.css')}}" rel="stylesheet">
    <link type="text/css" href="{{url('assets/css/vendor-flatpickr-airbnb.css')}}" rel="stylesheet">
    <link type="text/css" href="{{url('assets/css/vendor-flatpickr-airbnb.rtl.css')}}" rel="stylesheet">

    <!-- Vector Maps -->
    <link type="text/css" href="{{url('assets/vendor/jqvmap/jqvmap.min.css')}}" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.5/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">

    {{-- bootstrap --}}
    <!-- CSS only -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body class="layout-default">
    <div class="preloader"></div>

    <div class="mdk-header-layout js-mdk-header-layout">

        @include('layouts.header')

        <div class="mdk-header-layout__content">

            <div class="mdk-drawer-layout js-mdk-drawer-layout" data-push data-responsive-width="992px">
                <div class="mdk-drawer-layout__content page">

                    <div class="container-fluid page__heading-container">
                        <div class="page__heading d-flex align-items-end">
                            <div class="flex">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb mb-0">
                                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">{{ Request::segment(1)}}</li>
                                    </ol>
                                </nav>
                                <h1 class="m-0">{{ Request::segment(1)}}</h1>
                            </div>
                            <div class="flatpickr-wrapper ml-3">
                                <div id="recent_orders_date" data-toggle="flatpickr" data-flatpickr-wrap="true"
                                    data-flatpickr-mode="range" data-flatpickr-alt-format="d/m/Y"
                                    data-flatpickr-date-format="d/m/Y">
                                    <a href="javascript:void(0)" class="link-date" data-toggle>{{ date('Y/m/d | H:i:s') }}</a>
                                    <input class="flatpickr-hidden-input" type="hidden" value="13/03/2018 to 20/03/2018"
                                        data-input>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="container-fluid page__container">
                        @include('sweetalert::alert')
                        @yield('content')

                   </div>

                </div>
                @include('layouts.sidebar')


            </div>
        </div>
    </div>
    @include('layouts.footer')
</body>
@yield('modal')
</html>
