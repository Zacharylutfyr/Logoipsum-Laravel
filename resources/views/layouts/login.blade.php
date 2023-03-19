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


       <!-- todo Content -->
       @yield('content')
       <!-- todo Last Content -->
   

      <!-- Font Awesome JS -->
    <!-- Bootstrap JS -->
    @include('includes.script')

  </body>
</html>