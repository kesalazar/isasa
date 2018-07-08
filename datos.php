<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ISASA</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
	<link rel="shortcut icon" href="./imagenes/ico_isasa.png"/>
	<link rel="stylesheet" href="./css/estilo_datos.css"> 
</head>
<nav class="navbar navbar-expand-lg navbar-light alert-secondary">
  <a class="navbar-brand" href="index.html"> <img src="./imagenes/ico_isasa.png" width="30" height="30" class="d-inline-block align-top" alt=""> ISASA</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">    
      <div class="btn-group" role="group" aria-label="Basic example">  
      <a class="nav-item nav-link btn btn-outline-secondary" href="ingreso.php">Ingreso</a>
      <a class="nav-item nav-link btn btn-outline-secondary active">Usar sin registro</a>
      <a class="nav-item nav-link btn btn-outline-secondary" href="registro1.php">Registro</a>
    </div>   
  </div>
</nav>
<body>
	<header>
		<div class="container text-center">
			<br>
			<div class="row">
				<div class="col-md-2"></div>
				<div class="col-md-8">
					<div class="alert alert-dark" role="alert">
					<h5>RADIER</h5>
					<h6>Ingresa dimensiones y uso del radier</h6>                 
            		</div>
				</div>
				<div class="col-md-2"></div>
			</div>
		</div>
	</header>
	<div class="container text-center">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
			<form class="form-signin" action="calculo.php" method="get">
			<br>
			<div class="row">
				<div class="col-md-2"></div>
				<div class="col-md-8">
					<p class="btn btn-secondary btn-sm">Largo</p><br>
					<input class="alert alert-dark" type="number" min="0.05" step="0.001" id= "inputlargo" name="largo" class="form-control" placeholder="Largo en metros" required autofocus>
					<br>
					<p class="btn btn-secondary btn-sm">Ancho</p><br>
					<input class="alert alert-dark" type="number" min="0.05" step="0.001" id= "inputancho" name="ancho" class="form-control" placeholder="Ancho en metros" required>
					<br>
					<p class="btn btn-secondary btn-sm">Uso</p><br>
					<select class="alert alert-dark" name="Cargas">
							<option value="liviana">Cargas Livianas</option> 
							<option value="media">Cargas Medianas</option> 
							<option value="pesada">Cargas Pesadas</option>
					</select>
					<br><br>
					<input type="submit" class="btn btn-secondary" value="Calcular">
					<br><br>					 
				</div>
			</form>	
				<div class="col-md-2"></div>
			</div>			 	
			</div>
			<div class="col-md-2"></div>
		</div>
		<br><br>
    	<div class="text-center">
      	<p>&#174; ISASA 2018</p> 
    	</div>		
	</div>
</body>
</html>