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
										<h2>Emprendimiento e Innovación</h2>
									</header>
										<p>La Universidad Católica Luís Amigó ha desarrollado grandes proyectos de intervención, asesoría y consultoría con el Estado, el Sector Empresarial y la Sociedad, aportando al desarrollo social y productivo desde el conocimiento y el saber.</p>
										<h3 id="content">Aquí las ultimas novedades:</h3>
										<div class="row">
												<?php 
													include_once('../modelo/Conexion2.php');
													$resultado=$conexion->query("select id_emprendimiento , nombre_empren, descripcion_empren, responsable, fecha_subida, nombres, apellidos,enlace_externo 
													from empren_innovacion
													join usuarios on nombres=nombres and  apellidos = apellidos and responsable = id_usuario Order by fecha_subida desc");
													if(mysqli_num_rows($resultado)>0){
													while ($fila = mysqli_fetch_array($resultado)) {
												?>
												<div class="col-6 col-12-small">
													<h4><b><?php echo $fila['nombre_empren'];?></b></h4>
													<p ><?php 
														$cadena = $fila['descripcion_empren'];
														if (strlen($cadena) > 1){
															//funcion para daf salto de linea y mostrar x cantidad de caracteres
															echo nl2br(substr($cadena, 0 ,300) . '...');
														}
													?><a href="./info_emp_innovacion.php?id_emprendimiento=<?php echo $fila['id_emprendimiento'];?>">  Más Información</a></p>
													<h5 class="mb-2">Publicado por: <?php echo $fila['nombres'],'&nbsp;', $fila['apellidos'];?>,&nbsp;fecha:  <?php echo $fila['fecha_subida'];?></h5>
													<hr class="major">
												</div>
												
											<?php
												}}
											?> 
										<div>
											<div id="proyectopublich">
                                                
                                            </div>
										</div>
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
			<script src="../js/MostrarProyecto.js"></script>

	</body>
<?php
}
else{
    header('location: ../index.php');
}
?>
</html>