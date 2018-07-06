<?php 
$consulta=ConsultaProyectos($_GET['nombres']);
function ConsultaProyectos($no_proy)
{
    include "./funciones_librerias/db_connect.php";
    $sentencia="SELECT * FROM proyectos WHERE nombres='".$no_proy."'";
    $resultado=$conexion->query($sentencia) or die(mysqli_error($conexion));
    $fila=$resultado->fetch_assoc();

    return[
        $fila['nombres'],
        $fila['Largo'],
        $fila['Ancho'],
        $fila['Uso']
    ];
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
					<h5>Edita un proyecto de RADIER</h5>
					<h6>Modifica dimensiones y uso del radier</h6>                 
            		</div>
				</div>
				<div class="col-md-2">
					<div class="text-right">
                   	<input type="submit" class="btn btn-secondary" value="Cerrar Sesión" onclick="location='index.html'"> 
                	</div>
				</div>
			</div>
</div>
<div class="container text-center">
		<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">	
        <form action="./editar2.php" method="POST">
        	<br>
        	<div class="row">
        	<div class="col-md-2"></div>
			<div class="col-md-8"> 
                <p for="nombre" class="btn btn-secondary btn-sm">Nombre</p><br>                
                <input type="text" class="alert alert-dark" id="nombres" name="nombres" value="<?php echo $consulta[0] ?>"><br>
                <p for="largo" class="btn btn-secondary btn-sm">Largo</p><br>                
                <input type="number" class="alert alert-dark" id="Largo" name="Largo" value="<?php echo $consulta[1] ?>"><br>
                <p for="ancho" class="btn btn-secondary btn-sm">Ancho</p><br>
                <input type="number" class="alert alert-dark" id="Ancho" name="Ancho" value="<?php echo $consulta[2] ?>"><br>
                <p for="uso" class="btn btn-secondary btn-sm">Uso</p><br>
                <input type="number" class="alert alert-dark" id="Uso" name="Uso" value="<?php echo $consulta[3] ?>" ><br>
                <button type="submit" class="btn btn-secondary">Guardar</button><br><br>
                <a href="./recuperar.php" class="btn btn-secondary">Cancelar</a><br><br>
            </div>
            <div class="col-md-2"></div>
            </div>
        </form>	
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
    </div>
</div>
</body>
</html>