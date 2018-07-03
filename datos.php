<?php
$msg ='';
if (isset($_GET['errno'])){
    switch($_GET['errno']){
        case 0:
        $msg = '<p class="alert alert-danger">Debe ingresar por index.php</p>';
        break;
        case 1;
        $msg = '<p class="alert alert-warning">Debe llenar ambos campos.</p>';
        break;
        default:
        $msg ='';
        break; 
    }
}
?>
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
<body>
	<header>
		<div class="container text-center">
			<br>
			<div class="row">
				<div class="col-md"></div>
				<div class="col-md">
					<div class="alert alert-secondary" role="alert">
                    <h2 class="alert-heading">ISASA</h2>
                    <p class="text-justify">
                    <hr>	
					<h5>RADIER</h5>
					<p>Ingresa dimensiones y uso del radier</p>
                    </p>                    
            		</div>
				</div>
				<div class="col-md"></div>
			</div>
		</div>
	</header>
	<div class="container text-center">
		<form class="form-signin" action="calculo.php" method="get">
			<br>
			<p class="btn btn-light">Largo</p><br>
            <input type="number" min="0.05" step="0.001" id= "inputlargo" name="largo" class="form-control" placeholder="Largo en metros" required autofocus>
			<br>
			<p class="btn btn-light">Ancho</p><br>
			<input type="number" min="0.05" step="0.001" id= "inputancho" name="ancho" class="form-control" placeholder="Ancho en metros" required>
			<br>
			<p class="btn btn-light">Uso</p><br>
			<select class="btn btn-light"name="Cargas">
					<option value="liviana">Cargas Livianas</option> 
					<option value="media">Cargas Medianas</option> 
					<option value="pesada">Cargas Pesadas</option>
				 </select>
			<br><br>
			<input type="submit" class="btn btn-light"value="Calcular">
			<br><br>
		  </form> 
	</div>
</body>
</html>