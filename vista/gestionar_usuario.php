<!DOCTYPE HTML>

<html>
<?php
session_start();
if($_SESSION['us_tipo']==1||$_SESSION['us_tipo']==2){
    
?>
	<head>
		<title>Información de Extensión y Servicios a la Comunidad</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />

		<link rel="stylesheet" href="../assets/css/main.css" />
		<link rel="stylesheet" href="../assets/css/datatables.css" />
		<link rel="stylesheet" href="../assets/css/sweetalert2.css" />
		<link rel="stylesheet" href="../assets/css/main2.css" />
		<link rel="stylesheet" href="../assets/css/select2.css" />
		<link rel="stylesheet" href="../assets/css/all.min.css" />
		<link rel="stylesheet" href="../assets/css/adminlte.min.css" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	</head>
	<body class="is-preload">

<!-- modal -->
	<div class="modal fade" id="confirmar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Confirmar Acción</h5>
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <div class="modal-body">
                <div class="text-center">
                    <b>
                        <?php
                            echo $_SESSION['nombre_us']; 
                            echo (" ¿está seguro de continuar?");
                        ?>
                    </b>
                </div>
                <span></span>
                <div class="alert alert-success text-center" id="confirmado" style="display:none">
                    <span><i class="fas fa-check mr-1"></i>función ejecutada correctamente.</span>
                </div>
                <div class="alert alert-danger text-center" id="rechazado" style="display:none">
                    <span><i class="fas fa-times mr-1"></i>Password no es correcto, intente de nuevo.</span>
                </div>
                <form id="form-confirmar">
                <div class="input-group mb-3">
                    <div class="imput-group-prepend">
                        <span class="input-group-text"><i class="fas fa-unlock"></i></span>
                    </div>
                    <input id="oldpass"type="password" class="form-control" placeholder="Ingresa su contraseña para continuar">
                    <input type="hidden" id="id_user">
                    <input type="hidden" id="funcion">
                </div>
                </div>
                    <div class="modal-footer">
                        <button type="button" class="btn small " data-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn primary small">Continuar con la ejecución</button>
                        </form>
                    </div>
                </div>
        </div>
    </div>
<!-- edn modal -->

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
										<h2>Gestion usuario</h2>
									</header>
									<p>Aqui puedes gestionar todos los usuarios y tendras privilegio de ascender o descender un usuario al igual que eliminar un perfil.</p>
								
                                    <div class="container-fluid ">
                                        <div class="card-success">
                                            <div class="card-header">
                                                <h3 class="card-title">Buscar usuario</h3></h1>
                                                <div class="input-group">
                                                    <input type="text" id="buscar"class="form-control float-left mt-1" placeholder="Ingrese nombre de usuario a consultar">
                                                    <div class="input-group-append">
                                                        <button class="btn btn-default">
                                                            <i class="fas fa-search "></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body ">
                                                <div id="usuarios" class="row d-flex align-items-stretch">
                                                
                                                </div>  
                                            </div>
                                            <div class="card-footer">
											
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
			<script src="../assets/js/select2.js"></script>
			<script src="../assets/js/sweetalert2.js"></script>
			<script src="../assets/js/demo.js"></script>
			<script src="../assets/js/adminlte.min.js"></script>
			<script src="../assets/js/bootstrap.bundle.js"></script>

			<script src="../assets/js/jquery.min.js"></script>
			<script src="../assets/js/browser.min.js"></script>
			<script src="../assets/js/breakpoints.min.js"></script>
			<script src="../assets/js/util.js"></script>
			<script src="../assets/js/main.js"></script>
			<script src="../js/Gestion_usuario.js"></script>

	</body>
<?php
}
else{
    header('location: ../index.php');
}
?>
</html>