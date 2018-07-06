<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/estilo_datos.css"> 
    <!-- Bootstrap style -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="shortcut icon" href="./imagenes/ico_isasa.png"/>

    <title>ISASA</title>
</head>
<body>
<div class="container text-center">
			<br>
			<div class="row">
				<div class="col-md-2"></div>
				<div class="col-md-8">
					<div class="alert alert-dark" role="alert">
                    <h2 class="alert-heading">
                    	<img src="./imagenes/ico_isasa.png" width="30" height="30" class="d-inline-block align-top" alt="">  ISASA
                	</h2>
                    <hr>	
					<h5>Crea un nuevo proyecto de RADIER</h5>
					<h6>Ingresa dimensiones y uso del radier</h6>                 
            		</div>
				</div>
				<div class="col-md-2">
				<div class="text-right">
                   <input type="submit" class="btn btn-secondary" value="Cerrar Sesión" onclick="location='ingreso.php'"> 
                </div> 
				</div>
			</div>
</div>
	<div class="container text-center">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
        		<form action="./guardar2.php" method="post">
        		<br>
				<div class="row">
				<div class="col-md-2"></div>
				<div class="col-md-8">
                    <p class="btn btn-secondary btn-sm">Nombre</p><br>
					<input class="alert alert-dark" type="text" id= "inputnombre" name="nombres" class="form-control" placeholder="Nombre del proyecto" required autofocus>
					<br>
					<p class="btn btn-secondary btn-sm">Largo</p><br>
					<input class="alert alert-dark" type="number" min="0.05" step="0.001" id= "inputlargo" name="Largo" class="form-control" placeholder="Largo en metros" required autofocus>
					<br>
					<p class="btn btn-secondary btn-sm">Ancho</p><br>
					<input class="alert alert-dark" type="number" min="0.05" step="0.001" id= "inputancho" name="Ancho" class="form-control" placeholder="Ancho en metros" required>
					<br>
					<p class="btn btn-secondary btn-sm">Uso</p><br>
					<select class="alert alert-dark" name="Uso">
							<option value="liviana">Cargas Livianas</option> 
							<option value="media">Cargas Medianas</option> 
							<option value="0.12">Cargas Pesadas</option>
					</select><br>
					<button type="submit" class="btn btn-secondary">Guardar</button><br><br>
                	<a href="./bienvenido.php" class="btn btn-secondary">Cancelar</a><br><br>
					<br> 
				</div>
				</div> 
        		</form>      
    		</div>
    	</div>
    	<div class="row">
			<div class="col-md"></div>
        		<div class="col-md">
                <br><br><br>                
                <div class="text-center">
                <p>&#174; ISASA 2018</p> 
                </div>
        		</div>
        	<div class="col-md"></div>
		</div>    
</body>
</html>