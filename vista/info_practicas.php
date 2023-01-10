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
									<?php 
											include_once('../modelo/Conexion2.php');
											isset($_GET['id_practica']);
											$resultado=$conexion->query("select id_practica, nombre_practica, imagen, descripcion_practica, responsable, fecha_subida, nombres, apellidos, enlace_externo  
											from practicas
											join usuarios on nombres=nombres and  apellidos = apellidos and responsable = id_usuario where id_practica='".$_GET['id_practica']."';");
											if(mysqli_num_rows($resultado)>0){
												while ($fila = mysqli_fetch_array($resultado)) {
									?>
									<header class="main">
									<h2><a href="./practicas.php">Regresar a prácticas</a></h2><hr>
									</header>
									<h3 id="content"><?php echo $fila['nombre_practica'];?></h3>
									
										<div>
											<p><?php echo nl2br($fila['descripcion_practica']);?> 
                                            <br><br><a href="<?php echo $fila['enlace_externo'];?> " target="_blank">Más Información.</a></p>
											<img src="../images/practicas/<?php echo $fila['imagen'];?>" class="image img" width="600px">
											<h5 class="mb-2">Publicado por: <?php echo $fila['nombres'],'&nbsp;', $fila['apellidos'];?>,&nbsp;fecha:  <?php echo $fila['fecha_subida'];?></h5>
											<!--API comentarios facebook-->
											<div id="fb-root"></div>
											<script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v8.0" nonce="cflhqUvy"></script>
											<div class = "fb-comments" data-href = "https://www.funlam.edu.co" data-numposts = "10" data-width = "" > </div>    
										</div>
									
									<?php
											}}
									?>
								</section>
<!--
								<section>
									<header class="main">
										<h2>practicas</h2>
									</header>
									<div id="practicaId">
										
									</div>
								</section>
-->
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
			<script src="../js/Mostrarpractica.js"></script>

	</body>
<?php
}
else{
    header('location: ../index.php');
}
?>
</html>