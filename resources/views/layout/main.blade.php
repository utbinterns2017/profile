<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>KEEP Account</title>
	<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


	<style>
		.navbar{
			letter-spacing: 4px;
			padding:10px;
			font-size:16px;
			border-radius: 0px;
			margin-bottom: 0 !important;
			box-shadow: 0px 2px 15px #888888;
		}

		.navbar .navbar-brand{
			color:#25B6CE;
			font-size:22px;
		}

		.navbar li a{
			color:#000;
		}

		.navbar li a:hover{
			background-color:#2d2d30;
			color:#4058d1;
		}

		.navbar li a:focus{
			background-color:#2d2d30;
		}

		.navbar .navbar-toggle .icon-bar {
			background-color: white;
		}
	</style>
	@yield('styles')
	
</head>
<body>
	<!--Navigation-->
	<nav class="navbar">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span> 
				</button>
				<a class="navbar-brand" href="/" style="padding-left: 50px">KEEP</a>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav">
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="/">Student's Name <span class="glyphicon glyphicon-search"></span></a></li>
					
				</ul>
			</div>
		</div>
	</nav>
	
	<div class="container" style="background-color: white; padding-top:15px; min-height: 80vh;" >

		@yield('content')
	</div>

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	
	@yield('scripts')

	@include('partials.footer')
</body>


</html>