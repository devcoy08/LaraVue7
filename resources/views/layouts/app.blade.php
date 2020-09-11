<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" value="{{ csrf_token() }}"/>
    <title>AdminLTE 3 | Starter</title>

      <!-- Google Font: Source Sans Pro -->
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
      <!-- Font Awesome Icons -->
      <link rel="stylesheet" href="assets/fontawesome-free/css/all.min.css">
      <!-- Theme style -->
      <link rel="stylesheet" href="dist/css/adminlte.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
    {{-- <link href="{{ mix('css/app.css') }}" type="text/css" rel="stylesheet"/> --}}
    <style>
        .bg-light {
            background-color: #eae9e9 !important;
        }
    </style>
</head>
<body class="hold-transition sidebar-mini">
<div id="app">
 
</div>

  <script src="assets/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.min.js"></script>

  <script src="{{ mix('js/app.js') }}" type="text/javascript"></script>

  <script>
    var newURL = window.location.pathname 
   
      if(newURL == "/dashboard" || newURL == "/")
      {
        $('a[href*="/Dashboard"]').addClass("active");
      }
     $('a[href*="'+newURL+'"]').addClass("active");
 
   
    console.log(newURL);
  </script>
</body>
</html>