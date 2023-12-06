<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  

  <!-- Font Awesome -->
@include('Layouts.head')
</head>

<body>


 @include('Layouts.main-sidebar')


    @yield('content')

  @include('Layouts.footer')

@include('Layouts.footer-scripts')
</body>
</html>
