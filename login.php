<!DOCTYPE html>
<html lang="es">

<head>
	<title>LogIn</title>
	<meta charset="UTF-8">
	<meta name="viewport"
		content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	
	<!--JQUERY-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
    <!-- FRAMEWORK BOOTSTRAP para el estilo de la pagina-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    
    <!-- Los iconos tipo Solid de Fontawesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
    <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

    <!-- Nuestro css-->
    <link rel="stylesheet" type="text/css" href="css/login.css" th:href="@{css/login.css}">

	<style>
		.vertical-center {
			min-height: 100%;
			min-height: 100vh;
			display: flex;
			align-items: center;
		}
	</style>
	
</head>

<body class="cover">
	<div class="modal-dialog text-center">
		<div class="col-sm-8 main-section">
			<div class="modal-content">
				<div class="col-12 user-img">
					<!--<img src="imagenes/userimg.png">-->
				</div>
				<form class="col-12" action="verificarAcceso.php" method="POST">
					<!--<p class="text-center "><i class="zmdi zmdi-account-circle zmdi-hc-5x"></i></p>-->
					<p class="text-center  text-uppercase">¡Bienvenido!</p>
					<div class="form-group " id="user-group">
						<input class="form-control" id="id" name="user" type="text" required placeholder="usuario">
					</div>
					<div class="form-group" id="contrasena-group">
						<input class="form-control" id="password" name="password" type="password" required placeholder="contraseña">
					</div>
					<div class="form-group text-center">
						<button type="submit" value="" class="btn btn-raised "><i class="fas fa-sign-out-alt"></i>Ingresar</button>
						<p class="text-center  mt-md mb-md">&copy; Copyright © 2022.</p>
					</div>
					
				</form>
			</div>
		</div>

		<!--<div class="right-sing">
			<img align="center" src="imagenes/logo.jpg" width="100%">
		</div>-->
		<div class="col-sm-1"></div>
	</div>

	<!--====== Scripts -->
	<script src="./js/jquery-3.1.1.min.js"></script>
	<script src="./js/bootstrap.min.js"></script>
	<script src="./js/material.min.js"></script>
	<script src="./js/ripples.min.js"></script>
	<script src="./js/sweetalert2.min.js"></script>
	<script src="./js/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="./js/main.js"></script>
	<script>
		$.material.init();
	</script>
</body>

</html>
