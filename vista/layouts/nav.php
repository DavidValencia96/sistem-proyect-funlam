<nav id="menu">
	<header class="major">
		<h2>Menú</h2>
	</header>
	<h4>Bienvenido(a) 
		<?php  
			echo $_SESSION['nombre_us'];
		?> 
		<br>
		<?php
			$fechaActual = date('D-M-Y');
			echo $fechaActual;
		?> 
		<?php 
			ini_set('date.timezone','America/Bogota'); 
			echo date("g:i A");
		?>
	</h4>
	<ul>
		<li><a href="./index.php">Inicio</a></li>
		<li><a href="./proyectos.php">Proyectos</a></li>
		<li><a href="./servicios.php">Servicios</a></li>
		<li><a href="./portafolio.php">Portafolio digital</a></li>
		<li><a href="./edu_permanente.php">Educación permanente</a></li>
		<li><a href="./practicas.php">Prácticas</a></li>
		<li><a href="./noticias.php">Noticias</a></li>
		<li><a href="./emp_innovacion.php">Emprendimiento e innovación</a></li>
		<li><a href="./actualizar_datos.php">Actulizar mis datos</a></li>

		<?php if ($_SESSION[ 'us_tipo' ] == 1 || $_SESSION[ 'us_tipo' ] == 2) { ?>
		<li>
			<span class="opener">Gestión de cátegorias</span>
			<ul>
				<li><a href="./gestion_proyectos.php">Gestión proyectos</a></li>
				<li><a href="./gestion_portafolio.php">Gestión portafolio</a></li>
				<li><a href="./gestion_practicas.php">Gestión prácticas</a></li>
				<li><a href="./gestion_noticias.php">Gestión noticias</a></li>
				<li><a href="./gestion_emp_innovacion.php">Gestión Emprendimiento e innovación</a></li>
				
			</ul>
		</li>
		<li>
			<span class="opener">Gestión de usuarios</span>
			<ul>
				<li><a href="./gestionar_usuario.php">Gestiónar usuario</a></li>
			</ul>
		</li>
		<?php
		}
		?>
		<li><a href="./../controlador/Logout.php" class="primary">Cerrar sesión</a></li>
	</ul>
</nav>