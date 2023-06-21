<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="SAMA RealEstate - سما للعقارات">
    <meta name="keywords" content="Real Estate, Property, Directory Listing, Marketing, Agency" />
    <meta name="author" content="SAMA">
    <title>{{ config('app.name', 'SAMA Real Estate') }}</title>

    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content="SAMA Real Estate" />
    <meta property="og:site_name" content="SAMA Real Estate" />
    <meta property="og:description" content="SAMA for Real-Estate" />
    <meta property="og:type" content="realestate" />

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="manifest" href="site.webmanifest">
    <!-- favicon.ico in the root directory -->
    <link rel="apple-touch-icon" href="{{asset('frontend/images/logo.png')}}">
    <link rel="shortcut icon" href="{{asset('frontend/images/logo.png')}}" type="image/x-icon" />

    <meta name="theme-color" content="#3454d1">
    <link href="{{asset('frontend/css/styles.css?fd365619e86ad9137a29')}}" rel="stylesheet">

    @yield('styles')

</head>

<body>



        @include('frontend.partials.navbar')

        @if(Request::is('/'))
            @include('frontend.partials.slider')
        @endif

        {{-- MAIN CONTENT --}}
        @yield('content')

        {{-- FOOTER --}}
        @include('frontend.partials.footer')




    <!-- SCROLL TO TOP -->
    <a href="javascript:" id="return-to-top"><i class="fa fa-chevron-up"></i></a>
    <!-- END SCROLL TO TOP -->
    <script src="{{asset('frontend/js/index.bundle.js?fd365619e86ad9137a29')}}"></script>

    @yield('scripts')

</body>

</html>