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
										<h2>Prácticas</h2>
									</header>
										<p>Este Departamento articulará todos los procesos de práctica al interior de la Universidad así como las coordinaciones de práctica de cada programa académico, garantizando la calidad en el proceso, su desarrollo, evaluación permanente, las condiciones óptimas y todo lo que permitan cumplir con los fines propios de este ejercicio.</p>
										<h3 id="content">Aquí las prácticas actuales:</h3>
										<div class="row">
												<?php 
													include_once('../modelo/Conexion2.php');
													$resultado=$conexion->query("select id_practica, nombre_practica, descripcion_practica, responsable, fecha_subida, nombres, apellidos  
													from practicas
													join usuarios on nombres=nombres and  apellidos = apellidos and responsable = id_usuario Order by fecha_subida desc");
													if(mysqli_num_rows($resultado)>0){
													while ($fila = mysqli_fetch_array($resultado)) {
												?>
												<div class="col-6 col-12-small">
													<h4><b><?php echo $fila['nombre_practica'];?></b></h4>
													<p >
														<?php
															$cadena = $fila['descripcion_practica'];
															if (strlen($cadena) > 1){
																echo nl2br(substr($cadena, 0 ,300) . '...');
															}
														?>
														<a href="./info_practicas.php?id_practica=<?php echo $fila['id_practica'];?>">  Leer más.</a>
													</p>
													<h5 class="mb-2">Publicado por: <?php echo $fila['nombres'],'&nbsp;', $fila['apellidos'];?>,&nbsp;fecha:  <?php echo $fila['fecha_subida'];?></h5>
													<hr class="major">
												</div>
												
											<?php
												}}
											?> 
										<div>
											<div id="practicasn null">
                                                
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