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

							<!-- Content -->
								<section>
									<header class="main">
										<h2>Educación permanente</h2>
                                    </header>

                                    <!-- Content -->
                                        <div>
                                            <h2 id="content"></h2>
                                                <p>Se trata de un proceso de formación para la vida pertinente y una apuesta para el desarrollo profesional. Desde esta área se promueven eventos abiertos para toda la comunidad y se desarrollan procesos formativos específicos según las necesidades de las empresas y las comunidades. <br><br>
                                                Para dinamizar este proceso la Universidad ofrece eventos de corta, mediana y larga duración como charlas, conferencias, diálogos, coloquios o cátedras abiertas; foros, simposios, paneles, congresos o seminarios, así como diplomados, cursos y talleres. <br><br>
                                                <strong>La Universidad Católica Luis Amigó</strong> tiene una amplia oferta de eventos académicos dirigidos a la comunidad interna y externa, pero también al sector productivo.</p>
										</div>

									<hr class="major" />

                                    <!-- Elements -->
									<h3 id="elements">En la Universidad te brindamos herramientas para que crezcas como profesional</h3>
                                        <div class="features">
                                            <article>
                                                    <span class="">
                                                        <img class="icon" src="../images/actualizacion-de-sistema.svg" alt="">
                                                    </span>
                                                    <div class="content">
                                                        <h3>Actualiza tu conocimiento</h3>
                                                        <p></p>
                                                    </div>
                                            </article>
                                            <article>
                                                    <span class="">
                                                        <img class="icon" src="../images/leyendo.svg" alt="">
                                                    </span>
                                                    <div class="content">
                                                        <h3>Las dinámicas del mundo exigen preparación constante</h3>
                                                        <p></p>
                                                    </div>
                                            </article>
                                            <article>
                                                    <span class="">
                                                        <img class="icon" src="../images/trabajador.svg" alt="">
                                                    </span>
                                                    <div class="content">
                                                        <h3>Obtener una visión amplia de los contexto</h3>
                                                        <p></p>
                                                    </div>
                                            </article>
                                            <article>
                                                    <span class="">
                                                        <img class="icon" src="../images/tendencias.svg" alt="">
                                                    </span>
                                                    <div class="content">
                                                        <h3>Conocimiento por tendencias y preferencias</h3>
                                                        <p></p>
                                                    </div>
                                            </article>
                                            <article>
                                                    <span class="">
                                                        <img class="icon" src="../images/libro.svg" alt="">
                                                    </span>
                                                    <div class="content">
                                                        <h3>Estudiar, informarse, investigar y cuestionarse</h3>
                                                        <p></p>
                                                    </div>
                                            </article>
                                            <article>
                                                    <span class="">
                                                        <img class="icon" src="../images/verificacion.svg" alt="">
                                                    </span>
                                                    <div class="content">
                                                        <h3>Ofertas a la medida de las personas, la sociedad y las organizaciones</h3>
                                                        <p></p>
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