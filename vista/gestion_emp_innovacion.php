<!DOCTYPE HTML>

<html>
<?php
session_start();
if($_SESSION['us_tipo']==1||$_SESSION['us_tipo']==2){
    
?>
	<head>
		<title>Información de Extensión y Servicios a la Comunidad</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
        <link rel="stylesheet" href="../assets/css/main.css"/>
        <link rel="stylesheet" href="../assets/css/sweetalert2.css"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

	</head>
	<body class="is-preload">
        <!-- modal -->
        <div class="modal fade" id="crearempren" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="card card-success">
                        <div class="card-header">
                            <h4 class="card-title">Gestión emprendimiento e innovación</h4>
                            
                        </div>
                        <div class="card-body">
                            <div class="alert alert-success text-center" id="add-prov" style="display:none">
                                <span><i class="fas fa-check mr-1"></i>Emprendimiento e Innovación creado correctamente.</span>
                            </div>
                            <div class="alert alert-danger text-center" id="noadd-prov" style="display:none">
                                <span><i class="fas fa-times mr-1"></i>El Emprendimiento e Innovación ya exite.</span>
                            </div>
                            <div class="alert alert-success text-center" id="edit_prov" style="display:none">
                                <span><i class="fas fa-check mr-1"></i>Se modifico correctamente.</span>
                            </div>
                            <form id="form-crear">
                                <div class="form-group">
                                    <label for="nombre">Nombre de emprendimiento e innovación</label>
                                    <input autocomplete="off" id="nombre" type="text" class="form-control" placeholder="Nombre de Empre. e Innova." required>
                                </div>
                                <div class="form-group">
                                    <label for="descripcion">Descripción de emprendimiento e innovación</label>
                                    <textarea class="myTextarea" autocomplete="off" class="form-control" name="descripcion" id="descripcion" cols="30" rows="2" required></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="enlace">Enlace externo</label>
                                    <input autocomplete="off" id="enlace" type="text" class="form-control" placeholder="Enlace externo">
                                </div>
                                <div class="form-group">
                                    <label for="fecha">Fecha creado</label>
                                    <input  id="fecha" type="date" class="form-control" value="<?php echo date("Y-m-d");?>" placeholder="Fecha de hoy" disabled>
                                </div>
                                <div class="form-group">
                                    <label for="imagen"></label>
                                    <input id="imagen" type="file" class="form-control" placeholder="Agrega una imagen" hidden>
                                </div>
                                <div class="form-group">
                                    <label for="responsable"></label>
                                    <input id="responsable" type="text" class="form-control" value="<?php echo $_SESSION['usuario'];?> " placeholder="Ingrese su nombre completo" hidden>
                                </div>
                                <input type="hidden" id="id_edit_empren">
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn primary small float-right m-1">Guardar proyecto</button>
                            <button type="button" data-dismiss="modal" class="btn secondary small float-right m-1">Cancelar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="cambiologo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Cambiar logo</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <div class="modal-body">
                    <div class="text-center">
                        <img id="logoactual"src="../images/proyectos/location.png" class="profile-user-img img-fluid img-circle">
                    </div>
                    <div class="text-center">
                        <b id="nombre_logo"> </b>
                    </div>
                    <div class="alert alert-success text-center" id="edit-prov" style="display:none">
                        <span><i class="fas fa-check mr-1"></i>Logo cambiado.</span>
                    </div>
                    <div class="alert alert-danger text-center" id="noedit-prov" style="display:none">
                        <span><i class="fas fa-times mr-1"></i>Formato no soportado, solo se permite (.jpg, .png, o gif).</span>
                    </div>
                    <form id="form-logo" ectype="multipart/form-data">
                    <div class="input-group mb-3 ml-5 mt-2">
                        <input type="file" name="photo" class="input-group">
                        <input type="hidden" name="funcion" id="funcion">
                        <input type="hidden" name="id_logo_prov" id="id_logo_prov">
                        <input type="hidden" name="avatar" id="avatar">
                    </div>
                    </div>
                        <div class="modal-footer">
                            <button type="button" class="btn secondary small" data-dismiss="modal">Cerrar</button>
                            <button type="submit" class="btn primary small">Guardar cambios</button>
                            </form>
                        </div>
                    </div>
                    
            </div>
        </div>

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
										<h2>Gestion de emprendimiento e innovación</h2>
                                    </header>

                                    <!-- Content -->
                                        <div>
                                            <h2 id="content"></h2>
                                                <p>Aquí puede agregar información relacionada a <a href="./emp_innovacion.php">Emprendimiento e Innovación</a>.</p>
										</div>
                                </section>
                                <section>
                                    <div class="container-fluid">
                                        <div class="card card-success">
                                            <div class="card-header">
                                                <h3 class="card-title">Buscar o <button type="button" data-toggle ="modal" data-target="#crearempren" class="btn primary ml-2">Crear artículo</button></h3>
                                                <div class="input-group">
                                                    <input type="text" id="buscar_empren"class="form-control float-left" placeholder="Ingrese nombre de Emprendimiento e Innovación">
                                                    <div class="input-group-append">
                                                        <button class="btn btn-default">
                                                            <i class="fas fa-search"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div id="emprendimiento" class="row d-flex align-items-stretch">
                                                
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
            <script src="../js/Emprendimiento.js"></script>

	</body>
<?php
}
else{
    header('location: ../index.php');
}
?>
</html>