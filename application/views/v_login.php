<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="<?php echo RUTA_PLUGIN?>bootstrap-3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo RUTA_FONT?>font-google.css">
    <link rel="stylesheet" type="text/css" href="<?php echo RUTA_CSS?>estilos.css">
	<title><?php echo $title ?> | Inicio</title>
</head>
<body>
	<div class="container">
		<h1 class="text-center lobster-regular hola">Hotel El condado</h1>
			<form>
			  <div class="group">
			    <input type="text"><span class="highlight"></span><span class="bar"></span>
			    <label>Name</label>
			  </div>
			  <div class="group">
			    <input type="email"><span class="highlight"></span><span class="bar"></span>
			    <label>Email</label>
			  </div>
			  <button type="button" class="button buttonBlue">Subscribe
			    <div class="ripples buttonRipples"><span class="ripplesCircle"></span></div>
			  </button>
			</form>
	</div>
    <script src="<?php echo RUTA_PLUGIN?>jquery/jquery-3.2.1.js"></script>
	<script src="<?php echo RUTA_PLUGIN?>bootstrap-3.3.7/js/bootstrap.min.js"></script>
</body>
</html>