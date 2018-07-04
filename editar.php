<?php

require('./config/db_connect.php');
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
    <link rel="stylesheet" href="./css/estilo_calculo.css"> 
    <link rel="stylesheet" href="./css/estilo_datos.css"> 
    <!-- Bootstrap style -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

    <title>ISASA</title>
</head>
<body>
    <!-- begin navbar -->
    <?php include('./inc/navbar.php');?>
    <!-- end navbar -->
    
    <div class="container">
        <h2 class="mt-5 text-uppercase">Editar</h2>

        <form action="./editar.php" method="post">
            <div class="form-group row">
                <label for="nombre" class="col-sm-2 col-form-label">Nombre</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nombre" name="nombres" >
                </div>
            </div>
            <div class="form-group row">
                <label for="largo" class="col-sm-2 col-form-label">Largo</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" id="largo" name="largo" >
                </div>
            </div>
            <div class="form-group row">
                <label for="ancho" class="col-sm-2 col-form-label">Ancho</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" id="ancho" name="ancho" >
                </div>
            </div>
            <div class="form-group row">
                <label for="uso" class="col-sm-2 col-form-label">Uso</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" id="uso" name="uso" >
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-outline-primary">Guardar</button>
                    <a href="./recuperar.php" class="btn btn-outline-danger">Cancelar</a>
                </div>
            </div>
        </form>
    </div>

</body>
</html>