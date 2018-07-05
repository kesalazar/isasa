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
            <div class="col">
                <div class="text-right">
                   <input type="submit" class="btn btn-secondary" value="Cerrar Sesión" onclick="location='index.html'"> 
                </div>                
            </div>
        </div>
        <div class="row">
            <div class="col-md"></div>
            <div class="col-md"><br>
                <div class="alert alert-secondary" role="alert">
                	<h4 class="alert-heading">
                        <img src="./imagenes/ico_isasa.png" width="30" height="30" class="d-inline-block align-top" alt="">  Bienvenido                        
                    </h4><hr>
                </div>                    
            </div>
            <div class="col-md"></div>
            <br> 
        </div><br>
        <div class="row">
            <div class="col">
                <div class="text-center">
                    <input type="submit" class="btn btn-secondary" value="Comienza un nuevo proyecto" onclick="location='guardar.php'">
                </div><br><br>
            </div>
        </div>  
        <div class="row">
        	<div class="col-md-4">                
            </div>
        	<div class="col-md-4">
                <input type="submit" class="btn btn-secondary" value="Ver tus proyectos" onclick="location='recuperar.php'">       
                <div class="text-center"><br><br><br><br><br><br><br><br><br>
                <p>&#174; ISASA 2018</p> 
                </div>
        	</div>
        	<div class="col-md-4"></div>
        </div>    
    </div>
</body>
</html>