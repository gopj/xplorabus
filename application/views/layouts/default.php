
<!DOCTYPE html>
<html lang="en">
<head>

<!-- SITE TITTLE -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Xplorabus</title>

<!-- PLUGINS CSS STYLE -->
<link href="plugins/jquery-ui/jquery-ui.css" rel="stylesheet">
<link href="plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="plugins/rs-plugin/css/settings.css" media="screen">
<link rel="stylesheet" type="text/css" href="plugins/selectbox/select_option1.css">
<link rel="stylesheet" type="text/css" href="plugins/datepicker/datepicker.css">
<link rel="stylesheet" type="text/css" href="plugins/isotope/jquery.fancybox.css">
<link rel="stylesheet" type="text/css" href="plugins/isotope/isotope.css">

<!-- GOOGLE FONT -->
<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

<!-- CUSTOM CSS -->
<link href="css/style.css" rel="stylesheet">
<link rel="stylesheet" href="css/colors/default.css" id="option_color">


<!-- FAVICON -->
<link rel="shortcut icon" type="image/png" href="img/favicon.png"/>

</head>

<body class="changeHeader">
	<div class="main-wrapper">

	<!-- HEADER -->
	<header>
		<nav class="navbar navbar-default navbar-main navbar-fixed-top" role="navigation">
		<div class="container">

			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#"></a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse navbar-ex1-collapse">
				<ul class="nav navbar-nav navbar-right">
					<li class="active dropdown singleDrop">
						<a href="#">Inicio</a>
					</li>
					<li class="dropdown megaDropMenu">
						<a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="300" data-close-others="true" aria-expanded="false">Paquetes</a>
						<ul class="row dropdown-menu">
							<li class="col-sm-3 col-xs-12">
								<ul class="list-unstyled">
									<li>Tour Packages Grid View</li>
									<li><a href="packages-grid-left-sidebar.html">Packages Sidebar Left</a></li>
									<li><a href="packages-grid-right-sidebar.html">Packages Sidebar Right</a></li>
									<li><a href="packages-grid.html">Packages 3 Columns</a></li>
								</ul>
							</li>
							<li class="col-sm-3 col-xs-12">
								<ul class="list-unstyled">
									<li>Tour Packages List View</li>
									<li><a href="packages-list-left-sidebar.html">Packages Sidebar Left</a></li>
									<li><a href="packages-list-right-sidebar.html">Packages Sidebar Right</a></li>
									<li><a href="packages-list.html">Packages List</a></li>
								</ul>
							</li>
						</ul>
					</li>
					<li class="dropdown singleDrop">
						<a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Destinos</a>
						<ul class="dropdown-menu dropdown-menu-left">
							<li><a href="destination-cities.html">Destination Cities</a></li>
							<li><a href="destination-single-city.html">Single Destination</a></li>
						</ul>
					</li>
					<li class="dropdown singleDrop">
						<a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Gáleria</a>
						<ul class="dropdown-menu dropdown-menu-right">
							<li><a href="about-us.html">Exteriores</a></li>
							<li><a href="contact.html">Interiores</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
		</nav>
	</header>

	<?php echo $output; ?>

	<!-- JAVASCRIPTS -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="plugins/jquery-ui/jquery-ui.js"></script>
	<script src="plugins/bootstrap/js/bootstrap.min.js"></script>
	<script src="plugins/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
	<script src="plugins/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
	<script src="plugins/selectbox/jquery.selectbox-0.1.3.min.js"></script>
	<script src="plugins/datepicker/bootstrap-datepicker.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
	<script src="plugins/counter-up/jquery.counterup.min.js"></script>
	<script src="plugins/isotope/isotope.min.js"></script>
	<script src="plugins/isotope/jquery.fancybox.pack.js"></script>
	<script src="plugins/isotope/isotope-triger.js"></script>
	<script src="plugins/countdown/jquery.syotimer.js"></script>
	<script src="plugins/smoothscroll/SmoothScroll.js"></script>
	<script src="js/custom.js"></script>

</body>

</html>

