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
				<div id="main">
					<div class="inner">
						<header id="header">
							<h2 class="align-center">Información de Extensión y Servicios a la Comunidad<br>Universidad Católica Luis Amigó</h2>
						</header>
						<section>
							<?php 
									include_once('../modelo/Conexion2.php');
									isset($_GET['id_emprendimiento']);
									$resultado=$conexion->query("select id_emprendimiento , nombre_empren, imagen, descripcion_empren, responsable, fecha_subida, nombres, apellidos, enlace_externo 
									from empren_innovacion
									join usuarios on nombres=nombres and  apellidos = apellidos and responsable = id_usuario where id_emprendimiento='".$_GET['id_emprendimiento']."';");
									if(mysqli_num_rows($resultado)>0){
										while ($fila = mysqli_fetch_array($resultado)) {
							?>
							<header class="main">
							<h2><a href="./emp_innovacion.php">Regresar a emprendimiento e innovación</a></h2><hr>
							</header>
							<h3 id="content"><?php echo $fila['nombre_empren'];?></h3>
							
								<div class="">
									<p><?php echo nl2br($fila['descripcion_empren']);?> 
                                    <br><br><a href="<?php echo $fila['enlace_externo'];?> " target="_blank">Más Información.</a></p>
									<img src="../images/emprendimiento/<?php echo $fila['imagen'];?>" class="image img" width="600px">
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