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
    
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="./css/login.css" rel="stylesheet">

    <title>Tratamiento de formularios con PHP</title>
</head>
<body class="text-center">

    <form class="form-signin" action="datos.php" method="post">
      <label for="inputName" class="sr-only">Email address</label>
      <input type="text" id="inputName" name="name" class="form-control" placeholder="Ingrese su nombre" required autofocus>
      <label for="inputEmail" class="sr-only">Password</label>
      <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Ingrese su email" required>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Ingresar</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2018</p>
    </form>
    
</body>
</html>

