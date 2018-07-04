<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link href="./css/login.css" rel="stylesheet">
    <link rel="shortcut icon" href="./imagenes/ico_isasa.png"/>
    <title>Ingreso ISASA</title>
</head>
<body class="text-center">
    <div class="container"><br>
        <div class="row">
            <div class="col-md"></div>
            <div class="col-md"><br>
                <div class="alert alert-secondary" role="alert">
                	<h4 class="alert-heading">
                        <img src="./imagenes/ico_isasa.png" width="30" height="30" class="d-inline-block align-top" alt="">  Registro ISASA
                    </h4><hr>
					<form id="frmRegistro" class="form-signin" action="reg.php" method="post">
      					<input type="text" name="usuario" class="form-control" placeholder="Nombre usuario" required autofocus><br>
      					<input type="password" name="password" class="form-control" placeholder="Contraseña" required>
      					<button class="btn btn-secondary" type="submit">Ingresar</button><hr><br>
                        <input type="submit" class="btn btn-secondary btn-sm" value="Registro" name="aceptar"  onclick="location='registro.php'">
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
                <input type="submit" class="btn btn-secondary" value="Continuar sin ingresar" name="invitado"  onclick="location='datos.php'">
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