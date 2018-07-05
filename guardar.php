<?php

require('./funciones_librerias/db_connect.php');
$msg='';
if(!empty($_POST)){
    $conexion = connect();
    
    $sql = 'INSERT INTO `proyectos`(`nombres`, `Largo`, `Ancho`, `Uso`) VALUES (?,?,?,?)';

    if ( $stmt = mysqli_prepare($conexion, $sql)){
        $nombres = $_POST['nombres'];
        $largo = $_POST['largo'];
        $ancho= $_POST['ancho'];
        $uso = $_POST['uso'];

        # verificar los datos;

        # reemplazo de valores sobre el stament sql

        mysqli_stmt_bind_param($stmt,'ssss', $nombres, $largo, $ancho, $uso);

        # ejecutar consulta sql
        if(mysqli_stmt_execute($stmt)){
            #el dato se gurdo de forma exitosa
            header('location: recuperar.php?msg=1');
        } else{
            #no se pudo guardar el registro
            $msg = '<p class="alert alert-danger">Se produjo un erro al guardar los datos.</p>';
        }
        mysqli_stmt_close($conexion);

    }
    mysqli_close($conexion);
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/estilo_datos.css"> 
    <!-- Bootstrap style -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

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
                <div class="row">
            <div class="col">
                <div class="text-right">
                   <input type="submit" class="btn btn-secondary" value="Cerrar Sesión" onclick="location='index.html'"> 
                </div>                
            </div>
        </div>            
                </div>
			</div>
		</div>
	<div class="container text-center">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
        <form action="./guardar.php" method="post">
        <br>
			<div class="row">
				<div class="col-md-2"></div>
				<div class="col-md-8">
                    <p class="btn btn-secondary btn-sm">Largo</p><br>
					<input class="alert alert-dark" type="text" id= "inputnombre" name="nombres" class="form-control" placeholder="Nombre del proyecto" required autofocus>
					<br>
					<p class="btn btn-secondary btn-sm">Largo</p><br>
					<input class="alert alert-dark" type="number" min="0.05" step="0.001" id= "inputlargo" name="largo" class="form-control" placeholder="Largo en metros" required autofocus>
					<br>
					<p class="btn btn-secondary btn-sm">Ancho</p><br>
					<input class="alert alert-dark" type="number" min="0.05" step="0.001" id= "inputancho" name="ancho" class="form-control" placeholder="Ancho en metros" required>
					<br>
					<p class="btn btn-secondary btn-sm">Uso</p><br>
					<select class="alert alert-dark" name="uso">
							<option value="0.05">Cargas Livianas</option> 
							<option value="0.08">Cargas Medianas</option> 
							<option value="0.12">Cargas Pesadas</option>
					</select>
					<br><br>
                </div>
                <div class="row">
                    <div class="col-sm-4"></div>
                    <div class="col-sm-4">
                        <div class="form-group row">                
                        <input type="submit" class="btn btn-secondary" value="Guardar">
                        <a href="./recuperar.php" class="btn btn-secondary">Cancelar</a>                
                        </div>
                    </div>
                    <div class="col-sm-4"></div>
                </div>
        </form>      
    </div>    
</body>
</html>