
<!DOCTYPE html>
<html lang="en">
<head>

<!-- SITE TITTLE -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Xplorabus</title>

<!-- PLUGINS CSS STYLE -->
<link href="<?=base_url();?>plugins/jquery-ui/jquery-ui.css" rel="stylesheet">
<link href="<?=base_url();?>plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="<?=base_url();?>plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="<?=base_url();?>plugins/rs-plugin/css/settings.css" media="screen">
<link rel="stylesheet" type="text/css" href="<?=base_url();?>plugins/selectbox/select_option1.css">
<link rel="stylesheet" type="text/css" href="<?=base_url();?>plugins/datepicker/datepicker.css">
<link rel="stylesheet" type="text/css" href="<?=base_url();?>plugins/isotope/jquery.fancybox.css">
<link rel="stylesheet" type="text/css" href="<?=base_url();?>plugins/isotope/isotope.css">

<!-- GOOGLE FONT -->
<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

<!-- CUSTOM CSS -->
<link href="<?=base_url();?>css/style.css" rel="stylesheet">
<link rel="stylesheet" href="<?=base_url();?>css/colors/default.css" id="option_color">


<!-- FAVICON -->
<link rel="shortcut icon" type="image/png" href="<?=base_url();?>img/favicon.png"/>


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
					<a class="navbar-brand" href="<?= base_url(); ?>"></a>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-ex1-collapse">
					<ul class="nav navbar-nav navbar-right">
						<li class="active dropdown singleDrop">
							<a href="#">Inicio</a>
						</li>
						<li class="dropdown singleDrop">
							<a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Unidades</a>
							<ul class="dropdown-menu dropdown-menu-left">
								<li><a href="<?=base_url();?>xplorame/autobuses"> PB IRIZAR – SCANIA MODELO 2017 </a></li>
								<li><a href="<?=base_url();?>xplorame/autobuses"> I6 IRIZAR – SCANIA MODELO 2017 </a></li>
								<li><a href="<?=base_url();?>xplorame/autobuses"> PB IRIZAR – MAN MODELO 2014 </a></li>
							</ul>
						</li>
						<li class="dropdown singleDrop">
							<a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Xplorame</a>
							<ul class="dropdown-menu dropdown-menu-left">
								<li><a href="<?=base_url();?>xplorame/videos"> Videos </a></li>
							</ul>
						</li>
						<li class="dropdown singleDrop">
							<a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Xplorabus</a>
							<ul class="dropdown-menu dropdown-menu-right">
								<li><a href="#"> Mision </a></li>
								<li><a href="#"> Vision </a></li>
								<li><a href="#"> Objetivos </a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</header>

	<?php echo $output; ?>

	<!-- FOOTER -->
	<footer>
	<div class="footer clearfix">
		<div class="container">
		<div class="row">
			<div class="col-sm-3 col-xs-12">
			<div class="footerContent">
				<a href="<?= base_url(); ?>" class="footer-logo"><img src="<?=base_url('img/logo-color-sm.png"')?> alt="footer-logo" style="width:255px; height:100px;border:0;"></a>
				<p>Pez Vela Travel Bus es una empresa con amplia experiencia en el servicio de renta de autobuses.
				La calidad de nuestras unidades y la atención a nuestros clientes son nuestro mayor compromiso. </p>
			</div>
			</div>
			<div class="col-sm-3 col-xs-12">
			<div class="footerContent">
				<h5>Contactanos</h5>
				
				<ul class="list-unstyled">
				<li><i class="fa fa-home" aria-hidden="true"></i>Prolongación Av. Elías Zamora Verduzco s/n, Salagua, Manzanillo, Colima</li>
				<li><i class="fa fa-phone" aria-hidden="true"></i> (314) 333 0063 </li>
				<li><i class="fa fa-envelope-o" aria-hidden="true"></i><a href="mailTo:pezvelatravelbus@hotmail.com">pezvelatravelbus@hotmail.com</a></li>
				</ul>
			</div>
			</div>
			<div class="col-sm-3 col-xs-12">
			<div class="footerContent imgGallery">
				<h5>Galería</h5>
				<div class="row">
				<div class="col-xs-4">
					<a class="fancybox-pop" href="<?= base_url('img/home/gallery/gallery-1.jpg'); ?>"><img src="<?=base_url('img/home/gallery/thumb-gallery-1')?>.jpg" alt="image"></a>
				</div>
				<div class="col-xs-4">
					<a class="fancybox-pop" href="<?= base_url('img/home/gallery/gallery-2.jpg'); ?>"><img src="<?=base_url('img/home/gallery/thumb-gallery-2')?>.jpg" alt="image"></a>
				</div>
				<div class="col-xs-4">
					<a class="fancybox-pop" href="<?= base_url('img/home/gallery/gallery-3.jpg'); ?>"><img src="<?=base_url('img/home/gallery/thumb-gallery-3')?>.jpg" alt="image"></a>
				</div>
				<div class="col-xs-4">
					<a class="fancybox-pop" href="<?= base_url('img/home/gallery/gallery-4.jpg'); ?>"><img src="<?=base_url('img/home/gallery/thumb-gallery-4')?>.jpg" alt="image"></a>
				</div>
				<div class="col-xs-4">
					<a class="fancybox-pop" href="<?= base_url('img/home/gallery/gallery-5.jpg'); ?>"><img src="<?=base_url('img/home/gallery/thumb-gallery-5')?>.jpg" alt="image"></a>
				</div>
				<div class="col-xs-4">
					<a class="fancybox-pop" href="<?= base_url('img/home/gallery/gallery-6.jpg'); ?>"><img src="<?=base_url('img/home/gallery/thumb-gallery-6')?>.jpg" alt="image"></a>
				</div>
				</div>
			</div>
			</div>
			<div class="col-sm-3 col-xs-12">
			<div class="footerContent">
				<h5>Promociones</h5>
				<p>Si quieres saber más, registra tu email o visita nuestras redes sociales. </p>
				<div class="input-group">
				<input type="text" class="form-control" placeholder="Registra tu email" aria-describedby="basic-addon21">
				<span class="input-group-addon" id="basic-addon21"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></span>
				</div>
				<ul class="list-inline">
				<li><a href="https://www.facebook.com/XploraBus-1986914584868535/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
				<li><a href="https://plus.google.com/u/0/s/XPLORABUS%20PEZ%20VELA%20TRAVEL/top" target="_blank"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
				<li><a href="https://www.youtube.com/channel/UC9Dso5uxH9qnHulirl09ayA" target="_blank"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
				</ul>
			</div>
			</div>
		</div>
		</div>
	</div>
	<div class="copyRight clearfix">
		<div class="container">
		<div class="row">
			<div class="col-sm-6 col-sm-push-6 col-xs-12">
			<ul class="list-inline">
				<!-- <li><a href="#">Privacy Policy</a></li>
				<li><a href="#">About Us</a></li>
				<li><a href="#">Support</a></li>
				<li><a href="#">Blog</a></li> -->
			</ul>
			</div>
			<div class="col-sm-6 col-sm-pull-6 col-xs-12">
			<div class="copyRightText">
				<p>Copyright © <?=date("Y");?>. All Rights Reserved by <a target="_blank" href="http://www.gopycom.net/">gopycom</a>.</p>
			</div>
			</div>
		</div>
		</div>
	</div>
	</footer>
	
</div>

<!-- INQUIRY MODAL -->
<div class="modal fade bookingModal modalBook" id="inquiryModal" tabindex="-1">
	<div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		<h4 class="modal-title">Inquiry About Tour</h4>
		</div>
		<div class="modal-body">
		<form action="#">
			<div class="form-group">
			<input type="text" class="form-control" id="yourName" placeholder="Your Name">
			</div>
			<div class="form-group">
			<input type="email" class="form-control" id="yourEmail" placeholder="Your Email">
			</div>
			<div class="form-group">
			<input type="text" class="form-control" id="phoneNumber" placeholder="Phone Number">
			</div>
			<div class="form-group">
			<textarea class="form-control" rows="3" placeholder="Message"></textarea>
			</div>
			<button type="submit" class="btn buttonCustomPrimary">Submit</button>
		</form>
		</div>
	</div>
	</div>
</div>

	<!-- JAVASCRIPTS -->

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"> </script>
	<script src="<?=base_url('plugins/jquery-ui/jquery-ui.js')?>"> </script>
	<script src="<?=base_url('plugins/bootstrap/js/bootstrap.min.js')?>"> </script>
	<script src="<?=base_url('plugins/rs-plugin/js/jquery.themepunch.tools.min.js')?>"> </script>
	<script src="<?=base_url('plugins/rs-plugin/js/jquery.themepunch.revolution.min.js')?>"> </script>
	<script src="<?=base_url('plugins/selectbox/jquery.selectbox-0.1.3.min.js')?>"> </script>
	<script src="<?=base_url('plugins/datepicker/bootstrap-datepicker.js')?>"> </script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"> </script>
	<script src="<?=base_url('plugins/counter-up/jquery.counterup.min.js')?>"> </script>
	<script src="<?=base_url('plugins/isotope/isotope.min.js')?>"> </script>
	<script src="<?=base_url('plugins/isotope/jquery.fancybox.pack.js')?>"> </script>
	<script src="<?=base_url('plugins/isotope/isotope-triger.js')?>"> </script>
	<script src="<?=base_url('plugins/countdown/jquery.syotimer.js')?>"> </script>
	<script src="<?=base_url('plugins/smoothscroll/SmoothScroll.js')?>"> </script>
	<script src="<?=base_url('js/custom.js')?>"> </script>


</body>

</html>
