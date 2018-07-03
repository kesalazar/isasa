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
<html lang="en">
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
    <div class="container"><br>
        <div class="row">
            <div class="col-md"></div>
            <div class="col-md"><br><br><br>
                <div class="alert alert-secondary" role="alert">
                	<h4 class="alert-heading">
                        <img src="./imagenes/ico_isasa.png" width="30" height="30" class="d-inline-block align-top" alt="">  Registro ISASA
                    </h4>
   					<form class="form-signin" action="datos.php" method="post">
      					<label for="inputName" class="sr-only">Email address</label>
      					<input type="text" id="inputName" name="name" class="form-control" placeholder="Ingrese su nombre" 
      					required autofocus><br>
      					<label for="inputEmail" class="sr-only">Password</label>
      					<input type="password" id="inputEmail" name="email" class="form-control" placeholder="Contraseña" required>
      					<button class="btn btn-secondary" type="submit">Registrar</button>
    				</form>
                </div>                    
            </div>
            <div class="col-md"></div>
            <br> 
        </div><br><br><br><br>  
        <div class="row">
        	<div class="col-md"></div>
        	<div class="col-md">
        		<div class="text-center">
                <input type="submit" class="btn btn-secondary" value="Continuar sin Registrar" name="invitado"  onclick="location='datos.php'">
                </div><br><br><br>                
                <div class="text-center">
                <p>&#174; ISASA 2018</p> 
                </div>
        	</div>
        	<div class="col-md"></div>
        </div>    
    </div>
</body>
</html>

