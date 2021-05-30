<!DOCTYPE html>
<html lang="en">
<head>
	<title> منظومة الشهادات</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="{{asset('images/icons/favicon.ico')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/animate/animate.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/animsition/css/animsition.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/daterangepicker/daterangepicker.css')}}">

<!--===============================================================================================-->
@stack("css-style")




<script type="text/javascript" src="{{asset('js/datepicker/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/datepicker/moment.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/datepicker/daterangepicker.min.js')}}"></script>



	<link rel="stylesheet" type="text/css" href="{{asset('css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
<!--===============================================================================================-->
<link  rel='stylesheet' href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">




</head>

<!--Navbar -->
<nav class=" printer mb-4 navbar navbar-expand-lg navbar-dark unique-color-dark">
                <a class="navbar-brand" href="#"> <img  src="{{asset('images/icons/Logo.png')}}" height="150"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4" aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                    <ul class="navbar-nav ml-auto">
					<li>
							<h1 style="color:#FFF">مركز تأهيل الحاسبات ق.م</h1>
						</li>
                        <li style="margin-right: 32px;" class="nav-item active">
						@if(auth()->user())
  						<a style="color: transparent;
    							background-color: transparent;
								border-color: transparent;" 
							href='{{url("logout")}}' class='btn btns btn-primary'>تسجيل خروج</a>
						  @endif                        
						</li>
						
						<li>
							<h1 style="margin-right:170px;color:#FFF">برنامج شؤون الدارسين</h1>
						</li>
                        
                </div>
            </nav>
            <!--/.Navbar -->
          
          <hr class="my-4">
          
           <div class="text-center darken-grey-text mb-4">
<body>	



