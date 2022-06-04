<!DOCTYPE html>
<html lang="en">


<head>
    <title>UIIT </title>
    <!-- META TAGS -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Education master is one of the best educational html template, it's suitable for all education websites like university,college,school,online education,tution center,distance education,computer education">
    <meta name="keyword" content="education html template, university template, college template, school template, online education template, tution center template">
    <!-- FAV ICON(BROWSER TAB ICON) -->
    <link rel="shortcut icon" href="images/fav.ico" type="image/x-icon">
    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700%7CJosefin+Sans:600,700" rel="stylesheet">
    <!-- FONTAWESOME ICONS -->
    <link rel="stylesheet" href="{{ asset ('frontend-theme/css/font-awesome.min.css')}}">
    <!-- ALL CSS FILES -->
    <link href="{{ asset ('frontend-theme/css/materialize.css')}}" rel="stylesheet">
    <link href="{{ asset ('frontend-theme/css/bootstrap.css')}}" rel="stylesheet" />
    <link href="{{ asset ('frontend-theme/css/style.css')}}" rel="stylesheet" />
    <!-- RESPONSIVE.CSS ONLY FOR MOBILE AND TABLET VIEWS -->
    <link href="{{ asset ('frontend-theme/css/style-mob.css')}}" rel="stylesheet" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
@include('frontend.layouts2.mobile_menu')
@include('frontend.layouts2.header')
@yield('content')
@include('frontend.layouts2.footer')


    <!--Import jQuery before materialize.js-->
    <script src="{{ asset ('frontend-theme/js/main.min.js')}}"></script>
    <script src="{{ asset ('frontend-theme/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset ('frontend-theme/js/materialize.min.js')}}"></script>
    <script src="{{ asset ('frontend-theme/js/custom.js')}}"></script>
</body>

</html>