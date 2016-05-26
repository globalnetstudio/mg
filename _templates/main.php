<!DOCTYPE html>
<html lang="es-MX">
	<head>
		<meta charset="UTF-8">
		<title>M&amp;G Profesionales en limpieza<?php echo "{$page_title}"; ?></title>
		<meta name="robots" content="<?php echo $meta_robots; ?>">
		<meta name="description" content="<?php echo $meta_description; ?>">
		<!-- Normalize -->
		<link rel="stylesheet" href="/css/normalize.css">

		<!-- Google Fonts -->
		<link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>

		<!-- Fontastic -->
		<link rel="stylesheet" href="/css/fontastic.css">

		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">

		<!-- Jquery -->
	  <script src="/js/jquery.min.js"></script>

	  <!-- bxSlider Javascript file -->
		<script src="/js/jquery.bxslider.min.js"></script>

		<!-- Jquery Easing -->
		<script src="/js/jquery.easing.js"></script>

		<!-- bxSlider CSS file -->
		<link rel="stylesheet" href="/css/jquery.bxslider.css">

		<!-- Jquery Validation -->
	  <script src="/js/jquery-validate.min.js"></script>

	  <!-- Styles -->
		<link rel="stylesheet" href="/css/styles.css">

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	  <!--[if lt IE 9]>
	  	<link rel="stylesheet" href="/css/styles-i8.css">
	    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>	    
	    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	  <![endif]-->
	  <!--[if lt IE 10]>
			<script src="/js/placeholders.min.js"></script>
			<script src="/js/flexibility.min.js"></script>
  	<![endif]-->
	</head>
	<body id="<?php echo $page_name; ?>">

		<hgroup>
			<h1 class="hide">M&amp;G Soluciones</h1>
			<h2 class="hide">Profesionales en limpieza</h2>
		</hgroup>

		<header>

			<div class="header">

				<?php include('_partials/mobile-menu.php'); ?>

				<div class="top-header">

					<div class="wrapper">

						<div id="logo">
							<a href="/"><img src="/images/mg-soluciones-logo.png" alt="M&amp;G Profesionales en Limpieza Logo"></a>
							<p class="slogan">PROFESIONALES EN LIMPIEZA</p>
						</div> <!-- /#logo -->

						<?php include('_partials/contact-menu.php'); ?>

					</div> <!-- /.wrapper -->

				</div> <!-- /.top-header -->

				<div class="bottom-header">
					<?php include('_partials/carousel.php'); ?>
				</div> <!-- /.bottom-header -->

			</div> <!-- /.header -->

		</header>

		<section>
			<div class="content">
				<?php include_once($page_view); ?>
			</div> <!-- /.content -->
		</section>

		<aside>
			<div class="bottom-address">
				<p><img src="/images/icons/mark-icon.png" alt="Mark Icon">&nbsp;Av.Insurgentes Sur 2047, Edificio B, Col. San Ángel, C.P. 01000 Ciudad de México</p>
			</div><!-- /.bottom-address -->
		</aside>

		<a class="back-to-top"><i class="icon-arrow-up"></i></a>

		<footer>
			<div class="footer">
				<div class="container clearfix">

					<p class="copyright">Copyright <?php echo date('Y'); ?> &copy; M&amp;G Soluciones <span class="dot">&#8226;</span> <span class="reserved">Todos los Derechos Reservados</span></p>

					<p class="developed_by">Desarrollo por <img src="/images/icons/global-net-studio-logo.png" alt="Global Net Studio Logo"> <a href="http://globalnetstudio.com/" target="_blank">Global Net Studio</a></p>

				</div> <!-- /.container -->
			</div> <!-- /.footer -->
		</footer>

		<!-- Custom Scripts -->
		<script src="/js/scripts.js"></script>
	</body>
</html>