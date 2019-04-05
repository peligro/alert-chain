
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Despacho a Domicilio - @yield('title')</title>
    <meta name="author" content="Web Master César Cancino Zapata | yo@cesarcancino.com" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="shortcut icon" href="{{asset('public/img/favicon.ico')}}" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
     <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
    <link href="{{asset('public/css/sb-admin-2.min.css')}}" rel="stylesheet" />
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="{{asset('public/js/html5shiv.js')}}"></script>
      <script src="{{asset('public/js/respond.min.js')}}"></script>
    <![endif]-->
  @stack('css')
  </head>
  <body class="bg-gradient-primary">
    <!--contenido-->
            @yield('content')
          <!--/contenido-->

  <!-- Bootstrap core JavaScript-->
  <script src="{{asset('public/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('public/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{asset('public/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{asset('public/js/sb-admin-2.min.js')}}"></script>
  @stack('scripts')
</body>
</html>