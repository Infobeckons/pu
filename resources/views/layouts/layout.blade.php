<!DOCTYPE html>
<html lang="en">
  <!-- Favicon -->
  <link rel="icon" href="{{asset('dist/img/favicon.ico')}}">
<head>
  @include('include.head')
</head>   
<body class="hold-transition sidebar-mini layout-fixed">

    @include('include.header')
  
  <div class="container">
    @yield('content')
  </div>
  
    @include('include.footer')
    
  </body>
</html>
