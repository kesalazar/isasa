<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link href="./css/login.css" rel="stylesheet">
    <link rel="shortcut icon" href="./imagenes/ico_isasa.png"/>
    <title>Registro ISASA</title>
</head>
<body class="text-center">
    <div class="container"><br><br><br>
        <div class="row">
        	<div class="col-md-1"></div>
        	<div class="col-md-5">                
                <div class="text-left">
                <button type="button" class="btn btn-secondary btn-lg btn-block" onclick="location='datos.php'">
                	Continuar con un cálculo nuevo
            	</button>
                </div>
        	</div>
        	<div class="col-md-5">
        		<div class="text-right">
                <button 
                type="button" class="btn btn-secondary btn-lg btn-block">Ver tus cálculos anteriores
            	</button>
                </div>
        	</div>
        	<div class="col-md-1"></div>
        </div>  
        <div class="row">
        	<div class="col-md"></div>
        	<div class="col-md"><br><br><br>                
                <div class="text-center">
                <p>&#174; ISASA 2018</p> 
                </div>
        	</div>
        	<div class="col-md"></div>
        </div>    
    </div>
</body>
<?php 
require_once ('./funciones_librerias/db_connect.php');
$conexion=connect();        
        $usuario=$_POST['usuario'];
        $password=$_POST['password'];
$sql="INSERT INTO usuarios (usuario,clave) VALUES ('$usuario','$password')";   
$resultado=mysqli_query($conexion,$sql);

mysqli_close($conexion);
?>
</html>