<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>Login</title>
  <!--favicon-->
  <link rel="icon" href="{{asset ('admin-theme/assets/images/favicon.ico')}}" type="image/x-icon">
  <!-- Bootstrap core CSS-->
  <link href="{{asset ('admin-theme/assets/css/bootstrap.min.css')}}" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="{{asset ('admin-theme/assets/css/animate.css')}}" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="{{asset ('admin-theme/assets/css/icons.css')}}" rel="stylesheet" type="text/css"/>
  <!-- Custom Style-->
  <link href="{{asset ('admin-theme/assets/css/app-style.css')}}" rel="stylesheet"/>
  
</head>

<body style="background-image: url('{{asset ('admin-theme/assets/images/bg2.jpg') }}'); background-repeat: no-repeat; background-size: cover;">
 <!-- Start wrapper-->

@yield('content')

   <!-- Bootstrap core JavaScript-->
   <script src="{{ asset('admin-theme/assets/js/jquery.min.js')}}"></script>
  <script src="{{ asset('admin-theme/assets/js/popper.min.js')}}"></script>
  <script src="{{ asset('admin-theme/assets/js/bootstrap.min.js')}}"></script>
 
</body>
</html>