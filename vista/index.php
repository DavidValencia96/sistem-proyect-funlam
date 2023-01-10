<!DOCTYPE HTML>
<html>
<?php
session_start();
if($_SESSION['us_tipo']==1||$_SESSION['us_tipo']==2||$_SESSION['us_tipo']==3){

?>


	<head>
		<title>Información de Extensión y Servicios a la Comunidad</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
		<link rel="stylesheet" href="../assets/css/main.css"/>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">
				<!-- Main -->
					<div id="main">
						<div class="inner">

							<!-- Header -->
							<header id="header">
								<h2 class="align-center">Información de Extensión y Servicios a la Comunidad<br>Universidad Católica Luis Amigó</h2>
							<!--
								<ul class="icons">
									<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
									<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
									<li><a href="#" class="icon brands fa-snapchat-ghost"><span class="label">Snapchat</span></a></li>
									<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
									<li><a href="#" class="icon brands fa-medium-m"><span class="label">Medium</span></a></li>
								</ul>
							-->
							</header>
								<section id="banner">
									<div class="content">
										<header>
											<h2>Acerca de</h2>
										</header>
										<p>Como Universidad, cumple sus funciones de extensión y proyección social, mediante la generación, liderazgo y desarrollo de programas, proyectos, acciones y servicios orientados hacia el mejoramiento de la calidad de vida de las personas y sus comunidades. <br><br>Con base en los avances en la formación, la evolución en la prestación de servicios, los logros desde lo investigativo y la reflexión permanente en contexto, ofrece a las diferentes comunidades, organizaciones y entidades, propuestas de servicios orientadas hacia la atención de las necesidades sociales y productivas: Educación Permanente - Proyectos y servicios especiales - Graduados - Emprendimiento - Transferencia.</p>
									</div>
									<span class="image object">
										<img src="../images/5conceptos.jpg" alt="">
									</span>
								</section>
							<!-- Section -->
								<section>
									<header class="">
										<h2>Tenemos para ti</h2>
									</header>
									<div class="features">
										<article>
											<span class="">
												<img class="icon" src="../images/aula.svg" alt="">
											</span>
											<div class="content">
											<h3 class="main"><a href="./edu_permanente.php">Educación permanente</a></h3>
												<p>Se trata de un proceso de formación para la vida pertinente y una apuesta para el desarrollo profesional.</p>
											</div>
										</article>
										<article>
											<span class="">
												<img class="icon" src="../images/gestion-de-proyectos.svg" alt="">
											</span>
											<div class="content">
											<h3 class="main"><a href="./proyectos.php">Proyectos</a></h3>
												<p>La Universidad Católica Luís Amigó ha desarrollado grandes proyectos de intervención, asesoría y consultoría con el Estado, el Sector Empresarial y la Sociedad.</p>
											</div>
										</article>
										<article>
											<span class="">
												<img class="icon" src="../images/maletin.svg" alt="">
											</span>
											<div class="content">
												<h3 class="main"><a href="./portafolio.php">Portafolio digital</a></h3>
												<p>Tres décadas de historia como una Institución con un enfoque social, generadora de desarrollo, con formación de seres humanos íntegros y cualificados profesionalmente.</p>
											</div>
										</article>
										<article>
											<span class="">
												<img class="icon" src="../images/inteligencia-artificial.svg" alt="">
											</span>
											<div class="content ">
												<h3 class="main"><a href="./emp_innovacion.php">Emprendimiento e Innovación</a></h3>
												<p>Innovación un proceso en el cual el innovador se enfoca en el mercado para satisfacerlo y Emprendimiento comprende una interpretación en términos económicos.</p>
											</div>
										</article>
									</div>
									<header class="">
										<h3>Creamos un espacio diferente pensado para tí. </h3>
									</header>
								</section>
						</div>
					</div>

				<!-- Sidebar -->
					<div id="sidebar">
						<div class="inner">
							<!-- Menu -->
							<?php 
							include_once ('./layouts/nav.php');
							?>

							<!-- Footer -->
							<?php
							include_once ('./layouts/footer.php');
							?>
						</div>
					</div>
			</div>

		<!-- Scripts -->
			<script src="../assets/js/jquery.min.js"></script>
			<script src="../assets/js/browser.min.js"></script>
			<script src="../assets/js/breakpoints.min.js"></script>
			<script src="../assets/js/util.js"></script>
			<script src="../assets/js/main.js"></script>

	</body>
<?php
}
else{
    header('location: ../index.php');
}
?>
</html>