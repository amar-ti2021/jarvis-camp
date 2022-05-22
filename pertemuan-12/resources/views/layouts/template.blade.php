<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | {{ $title }}</title>
  
  <!-- CSS plugins  -->
  @include('partials.css-plugins')
</head>


<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  @include('partials.navbar')

  <!-- Main Sidebar Container -->
  @include('partials.main-sidebar')

  <!-- Content Wrapper. Contains page content -->
  @yield('content')

  <!-- Footer -->
  @include('partials.footer')
  

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
</div>
<!-- ./wrapper -->
  <!-- JS Plugins -->
  @include('partials.js-plugins')
  @stack('scripts')
</body>
</html>
