<!DOCTYPE HTML>

<html>
<?php
session_start();
if($_SESSION['us_tipo']==1||$_SESSION['us_tipo']==2||$_SESSION['us_tipo']==3){
    
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

	<!-- modal-->
	<div class="modal fade" id="cambiocontra" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Cambiar password</h5>
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <div class="modal-body">
                <div class="text-center mb-2">
                    <b>
                        <?php
                            echo $_SESSION['nombre_us']; echo (" aquí puedes cambiar tu contraseña.");
                        ?>
                    </b>
                </div>
                <div class="alert alert-success text-center" id="update" style="display:none">
                    <span><i class="fas fa-check mr-1"></i>Contraseña actualizada.</span>
                </div>
                <div class="alert alert-danger text-center" id="noupdate" style="display:none">
                    <span><i class="fas fa-times mr-1"></i>La contraseña actual no es correcta.</span>
                </div>
                <form id="form-pass">
                <div class="input-group mb-3">
                    <div class="imput-group-prepend">
                        <span class="input-group-text"><i class="fas fa-unlock"></i></span>
                    </div>
                    <input id="oldpass"type="password" class="form-control" placeholder="Ingrese su contraseña actual">
                </div>
                <div class="input-group mb-3">
                    <div class="imput-group-prepend">
                        <span class="input-group-text"><i class="fas fa-lock"></i></span>
                    </div>
                    <input autocomplete="off" id="newpass"type="text" class="form-control" placeholder="Ingrese la contraseña nueva">
                </div>
                </div>
                    <div class="modal-footer">
                        <button type="button" class="btn  secondary small" data-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn primary small">Actualizar contraseña</button>
                        </form>
                    </div>
                </div>
                
        </div>
    </div>
	<!-- end  modal-->

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
										<h3>Actualizar datos</h3>
									</header>
									<div class="row">
										<div class="card card-light  col-md-4">
											<div class="card-header">
												<h3 class="card-title mt-1"><b>Mis datos</b></h3>
											</div>
											<div class="card-body">
												<strong >
													<i class=""></i>Nombres
												</strong>
												<p id="nombres" class="text-muted">prueba</p>
												<strong >
													<i class=""></i>Apellidos
												</strong>
												<p id="apellidos" class="text-muted">prueba</p>
												<strong>
													<i class=""></i>Carrera
												</strong>
												<p id="carrera" class="text-muted">prueba</p>
												<strong>
													<i class=""></i>E-mail
												</strong>
												<p id="email" class="text-muted">prueba</p>
												<strong>
													<i class=""></i>Sobre mi
												</strong>
												<p id="sobre_mi" class="text-muted">Informacion sobre mi personalidad</p>
												<button data-toggle="modal" data-target="#cambiocontra" type="button" class="btn primary small ">Cambiar password</button>
												<BR><button class="edit btn  small mt-2 ">Click para editar datos</button>

											</div>
											<div class="card-footer">
											<p class="text-muted"></p>
											</div>
										</div>

										<div class="col-md-8">
											<div class="card card">
												<div class="card-header">
													<h3 class="card-title mt-1"><b>Editar datos personales</b></h3>
												</div>
												<div class="card-body">
												<div class="alert alert-success text-center" id="editado" style="display:none">
													<span><i class="fas fa-check mr-1"></i>Editado</span>
												</div>
												<div class="alert alert-danger text-center" id="noeditado" style="display:none">
													<span><i class="fas fa-times mr-1"></i>Edición deshabilitada</span>
												</div>
													<form id="form-usuario" class="form-horizontal">
														<div class="form-group row">
															<label for="nombres1" class="col-sm-3 col-form-label">Nombres</label>
															<div class="col-sm-9">
																<input type="text" id="nombres1" name="nombres1" class="form-control" disabled>
															</div>
														</div>
														<div class="form-group row">
															<label for="apellidos1" class="col-sm-3 col-form-label">Apellidos</label>
															<div class="col-sm-9">
																<input type="text" id="apellidos1" name="apellidos1" class="form-control" disabled>
															</div>
														</div>
														<div class="form-group row">
															<label for="carrera1" class="col-sm-3 col-form-label">Carrera</label>
															<div class="col-sm-9">
																<input type="text" id="carrera1" name="carrera1" class="form-control" required>
															</div>
														</div>
														<div class="form-group row">
															<label for="email1" class="col-sm-3 col-form-label">E-mail</label>
															<div class="col-sm-9">
																<input type="text" id="email1" name="email1" class="form-control" required>
															</div>
														</div>
														<div class="form-group row">
															<label for="sobre_mi" class="col-sm-3 col-form-label">Sobre mi</label>
															<div class="col-sm-9">
																<textarea class="form-control" name="sobre_mi1" id="sobre_mi1" cols="30" rows="2" maxlength="250" required></textarea>
															</div>
														</div>
														<div class="form-group row">
															<div class="offset-sm-2 col-sm-10 float-right">
																<button class="btn btn-block btn primary small">Guardar cambios</button>
															</div>
														</div>
													</form>
												</div>
												<div class="card-footer">
													<p class="text-muted">Los datos ingresados aquí, se manejan de manera privada.</p>
												</div>
											</div>
										</div>
									</div>
								<!-- formulario 2
									<form id="form-usuario">
										<div class="row gtr-uniform">
											<div class="col-5 col-12-xsmall">
                                                <h6>Nombres</h6>
                                                <input type="text" name="nombres" id="nombres" value="" placeholder="Nombres" >
                                            </div>
											<div class="col-5 col-12-xsmall">
                                                <h6>Apellidos</h6>
												<input type="text" name="apellidos" id="apellidos" value="" placeholder="Apellidos" >
                                            </div>
											<div class="col-5 col-12-xsmall">
                                                <h6>Carrera profesional</h6>
												<input type="text" name="carrera" id="carrera" value="" placeholder="Nombre carrera profesional">
											</div>
											<div class="col-5 col-12-xsmall">
                                                <h6>Correo electrónico</h6>
												<input type="email" name="email" id="email" value="" placeholder="Email" >
											</div>
											<div class="col-12">
                                                <h6>Sobre mi</h6>
												<textarea name="sobre_mi" id="sobre_mi" placeholder="Escriba aqui" rows="2" maxlength="250" value=""></textarea>
											</div>
											<!-- Break
											<div class="col-12">
												<ul class="actions">
													<li><input type="reset" value="Reset" class="edit small"></li>
													<li><input type="submit" value="Guardar cambios" class="primary small"></li>
												</ul>
											</div>
										</div>
									</form>
									<hr class="major" />
									<form method="post" action="#">
										<h3>Cambiar contraseña</h3>
										<div class="row gtr-uniform">
											<div class="col-3 col-12-xsmall">
                                                <h6>Contraseña actual</h6>
                                                <input type="password" name="password_actual" id="password_actual" placeholder="Contraseña actual" >
                                            </div>
											<div class="col-3 col-12-xsmall">
                                                <h6>Contraseña nueva</h6>
												<input type="password" name="password_nueva" id="password_nueva" placeholder="Contraseña nueva" >
											</div>
											<div class="col-12">
												<ul class="actions">
													<li><input type="submit" value="Cambiar contraseña" class="primary small"></li>
													<li><input type="reset" value="Canrcelar" class="small"></li>
												</ul>
											</div>
										</div>
									</form>-->
								
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
		<script src="../assets/js/bootstrap.bundle.min.js"></script>

		<script src="../assets/js/jquery.min.js"></script>
		<script src="../assets/js/browser.min.js"></script>
		<script src="../assets/js/breakpoints.min.js"></script>
		<script src="../assets/js/util.js"></script>
		<script src="../assets/js/main.js"></script>
		<script src="../js/Usuario.js"></script>
		

	</body> 
<?php
}
else{
    header('location: ../index.php');
}
?>
</html>