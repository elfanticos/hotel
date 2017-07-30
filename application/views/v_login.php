<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="<?php echo RUTA_PLUGIN?>bootstrap-3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo RUTA_PLUGIN?>node_modules/material-design-lite/material.min.css">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" type="text/css" href="<?php echo RUTA_FONT?>font-google.css">
    <link rel="stylesheet" type="text/css" href="<?php echo RUTA_CSS?>estilos.css">
	<title><?php echo $title ?> | Inicio</title>
<style>
.demo-card-square.mdl-card {
  width: 320px;
  height: 320px;
}
.demo-card-square > .mdl-card__title {
  color: #fff;
  background:
    url('../assets/demos/dog.png') bottom right 15% no-repeat #46B6AC;
}
</style>
</head>
<body>
	<div class="container">
	  <h1 class="text-center lobster-regular">Hotel El condado</h1>
		<div class="card-center">
			<div class="mdl-card  mdl-shadow--2dp">
				  <div class="mdl-card__title">
				     <h2 class="mdl-card__title-text lobster-regular">Bienvenido</h2>
				  </div>
				  <div class="mdl-card__supporting-text">
					  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
					    <input class="mdl-textfield__input" type="text" id="user">
					    <label class="mdl-textfield__label" for="user">Usuario</label>
					    <span class="mdl-textfield__error">Ingrese el usuario</span>
					  </div>
					  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
					    <input class="mdl-textfield__input" type="text" id="clave">
					    <label class="mdl-textfield__label" for="clave">Contrase&ntilde;a</label>
						<span class="mdl-textfield__error">Ingrese la contraseña</span>
					  </div>
				  </div>
				  <div class="mdl-card__actions">
				     <button class="mdl-button mdl-js-button">Cancelar</button>
				     <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">Aceptar</button>
				  </div>
			</div>
		</div>
	</div>
    <script src="<?php echo RUTA_PLUGIN?>jquery/jquery-3.2.1.js"></script>
	<script src="<?php echo RUTA_PLUGIN?>bootstrap-3.3.7/js/bootstrap.min.js"></script>
	<script src="<?php echo RUTA_PLUGIN?>node_modules/material-design-lite/material.min.js"></script>
</body>
</html>