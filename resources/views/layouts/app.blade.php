<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Bootstrap CSS -->
    @include('includes.styles')
    <!-- CSS -->
    @yield('styling')

    <!-- Font Awesome -->
    @include('includes.fawesome')


    <title>@yield('title')</title>
  </head>
  <body>

    <!-- todo Navbar -->
    @include('includes.navbar')
    <!-- todo Last Navbar -->

    <!-- todo Content -->
    @yield('content')
    <!-- todo Last Content -->

    <!-- todo Contact Us -->
    @include('includes.contact-us')
    <!-- todo Last Contact Us -->

    <!-- todo Footer -->
    @include('includes.footer')
    <!-- todo Last Footer -->

    <!-- Font Awesome JS -->
    <!-- Bootstrap JS -->
    @include('includes.script')

  </body>
</html>