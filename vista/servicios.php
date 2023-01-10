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
							</header>
								<section>
									<header class="">
										<h2>Servicios</h2>
									</header>
									<div class="features">
										<article>
											<span class="">
												<img class="icon" src="../images/equilibrar.svg" alt="">
											</span>
											<div class="content">
												<h3><a href="https://www.funlam.edu.co/modules/consultoriojuridico/" class="logo" target="_blank">Consultorio Jurídico</a></h3>
											</div>
										</article>
										<article>
											<span class="">
												<img class="icon" src="../images/psicologia.svg" alt="">
											</span>
											<div class="content">
												<h3><a href="https://www.funlam.edu.co/modules/facultadpsicologia/category.php?categoryid=19" class="logo" target="_blank">Laboratorio de Psicología</a></h3>
											</div>
										</article>
										<article>
											<span class="">
												<img class="icon" src="../images/idiomas.svg" alt="">
											</span>
											<div class="content">
												<h3><a href="#" class="logo" target="_blank">Departamento de Idiomas</a></h3>
											</div>
										</article>
										<article>
											<span class="">
												<img class="icon" src="../images/contabilidad.svg" alt="">
											</span>
											<div class="content">
												<h3><a href="#" class="logo" target="_blank">Consultorio Contable</a></h3>
											</div>
										</article>
										<article>
											<span class="">
												<img class="icon" src="../images/sabiduria.svg" alt="">
											</span>
											<div class="content">
                                                <a href=""></a>
												<h3><a href="https://www.funlam.edu.co/modules/ofertaacademica/category.php?categoryid=4" class="logo" target="_blank">Educación Continua</a></h3>
											</div>
										</article>
										<article>
											<span class="">
												<img class="icon" src="../images/publicidad-digital.svg" alt="">
											</span>
											<div class="content">
												<h3><a href="https://www.funlam.edu.co/uploads/direccionextension/8_Portafolio_Educacion_permanente.pdf" class="logo" target="_blank">Portafolio Digital</a></h3>
											</div>
										</article>
										<article>
											<span class="">
												<img class="icon" src="../images/innovacion12.svg" alt="">
											</span>
											<div class="content">
												<h3><a href="https://www.funlam.edu.co/modules/ofertaacademica/category.php?categoryid=4" class="logo" target="_blank">Emprendimiento, Transferencia e Innovación</a></h3>
											</div>
										</article>
										<article>
											<span class="">
												<img class="icon" src="../images/practicas.svg" alt="">
											</span>
											<div class="content">
												<h3><a href="https://www.funlam.edu.co/uploads/documentosjuridicos/1704_El_ABC_de_la_practicas.pdf" class="logo" target="_blank">Prácticas Profesionales</a></h3>
											</div>
										</article>
										<article>
											<span class="">
												<img class="icon" src="../images/tendencias.svg" alt="">
											</span>
											<div class="content">
												<h3><a href="https://www.funlam.edu.co/modules/direccionextension/item.php?itemid=2" class="logo" target="_blank">Consultorio de Comercio Exterior</a></h3>
											</div>
										</article>
									</div>
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