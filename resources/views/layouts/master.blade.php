<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
        <!-- plugins:css -->
        <link rel="stylesheet" href="{{ asset('css/materialdesignicons.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/vendor.bundle.base.css') }}">
        <!-- Layout styles -->
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <!-- End layout styles -->
        <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}" />
    </head>
    <body>
        <div class="container-scroller">
          <!-- partial:partials/_navbar.html -->
          @include('layouts/partials/_navbar')
          <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_sidebar.html -->
            @include('layouts/partials/_sidebar')
            <div class="main-panel">
              <div class="content-wrapper">
                @yield('content')
              </div>
              <!-- content-wrapper ends -->
              <!-- partial:partials/_footer.html -->
              @include('layouts/partials/_footer')
            </div>
          </div>
        </div>
        <!-- plugins:js -->
        <script src="{{ asset('js/vendor.bundle.base.js') }}"></script>
        <!-- inject:js -->
        <script src="{{ asset('js/off-canvas.js') }}"></script>
        <script src="{{ asset('js/hoverable-collapse.js') }}"></script>
        <script src="{{ asset('js/misc.js') }}"></script>
    </body>
</html>
