<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>

<head>
	<title>Registrar Votante</title>
	<!-- Bootstrap -->
	<link href="{{asset('plugins/assets/css/bootstrap.min.css')}}" rel='stylesheet' type='text/css' />
	<link href="{{asset('plugins/assets/css/bootstrap.css')}}" rel='stylesheet' type='text/css' />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script type="{{asset('plugins/assets/js/x-javascript')}}"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!--[if lt IE 9]>
     <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
     <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
	<!--  webfonts  -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
	<!-- // webfonts  -->
	<link href="{{asset('plugins/assets/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
	<link href="{{asset('plugins/assets/css/estilos.css')}}" rel="stylesheet" type="text/css" media="all" />
	<!-- start plugins -->
	<script type="{{asset('plugins/assets/text/javascript')}}" src="js/jquery.min.js"></script>
	<script type="{{asset('plugins/assets/text/javascript')}}" src="js/bootstrap.js"></script>
	<script type="{{asset('plugins/assets/text/javascript')}}" src="js/bootstrap.min.js"></script>
</head>

<body>
	<div class="header_bg">
		<!-- start header -->
		<div class="container">
			<div class="  row header">
				<nav class="navbar" role="navigation">
					<div class="container-fluid">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class=" navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>

						</div>
						<!-- Collect the nav links, forms, and other content for toggling -->

						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="menu nav navbar-nav ">
							<li class=""  ><a href='{{Route('index.index')}}'>Volver</a></li>
							<li class=""><a href="login.blade.php">Cerrar Sesión</a></li>
								
							</ul>

						</div><!-- /.navbar-collapse -->
					</div><!-- /.container-fluid -->
				</nav>
			</div>
			<div class="row slider text-center">
				<div class="col-md-8">
					<div class="col-md-10 slider_text">
						<br>
						<br>
						<br>
						<br>
						<br>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!--formulario-->
	
	<br>
	<br>


	<center>
		
	<div class="form">

			<br>
	
		<center>
		<img src="{{asset('plugins/assets/images/icono.png')}}" class=" img-res img-responsive"/>
		<h2>Registro de los Votantes</h2>
		</center>
		
		
		<hr>
		
		<form class="form" action="single-page.blade.php" method="post">
		

			<div class="col-12 col-sm-12 col-md-6 col-lg-6  form-group">
				<label for="">Cedula:</label>
				<input type="number" class=" borderedondo form-control" name="cedula" required>
			</div>
			<div class="col-12 col-sm-12 col-md-6 col-lg-6 form-group">
				<label for="">Nombres:</label>
				<input type="text" class=" borderedondo form-control" name="nombre" required>
			</div>
			<div class="col-12 col-sm-12 col-md-6 col-lg-6 from-group">
				<label for="">Apellidos:</label>
				<input type="text" class=" borderedondo form-control" name="apellido" required>
			</div>
			<div class="col-12 col-sm-12 col-md-6 col-lg-6 from-group">
				<label for="">Dirección:</label>
				<input type="text" class=" borderedondo form-control" name="apellido" required>
			</div>
			<div class="col-12 col-sm-12 col-md-6 col-lg-6 from-group">
				<label for="">Teléfono:</label>
				<input type="number" class=" borderedondo form-control" name="apellido" required>
			</div>
		
			<div class="col-12 col-sm-12 col-md-6 col-lg-6 form-group">
				<label for="">Departamento:</label>
				<select class=" borderedondo form-control" name="partido" id="">

			 </select>
			</div>

			<div class="col-12 col-sm-12 col-md-6 col-lg-6 form-group">
				<label for="">Municipio:</label>
				<select class=" borderedondo form-control" name="partido" id="">

				</select>
			</div>
			<div class="col-12 col-sm-12 col-md-6 col-lg-6 form-group">
				<label for="">Clave:</label>
				<input type="password" class=" borderedondo form-control" name="clave" required>
			</div>
			
			<div class="col-12  form-group">
				<button class=" btn btn-dark mt-2" type="submit">Guardar</button>
			</div>
		
		
		</form>
		
	</div>
	</center>
	<br>
	<br>
	
	


</body>

</html>