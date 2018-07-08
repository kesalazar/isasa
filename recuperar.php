
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap style -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="shortcut icon" href="./imagenes/ico_isasa.png"/>
    <link rel="stylesheet" href="./css/estilo_guardar.css"> 
    <title>ISASA</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light alert-secondary">
  <a class="navbar-brand" href="index.html"> <img src="./imagenes/ico_isasa.png" width="30" height="30" class="d-inline-block align-top" alt=""> ISASA</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">    
      <div class="btn-group" role="group" aria-label="Basic example">  
      <a class="nav-item nav-link btn btn-outline-secondary" href="bienvenido_ingreso.php">Home</a>
      <a class="nav-item nav-link btn btn-outline-secondary" href="cerrar.php">Cerrar Sesión</a>
    </div>   
  </div>
</nav>  
<div class="container text-center">
			<br>
			<div class="row">
				<div class="col-md-2"></div>
				<div class="col-md-8">
					<div class="alert alert-dark" role="alert">
					<h5>Proyectos existentes</h5>              
          </div>
				</div>
				<div class="col-md-2">                           
        </div>
			</div>
		</div>    
<div class="container">

      <table>
        <thead>
          <tr>
          <th class="table-header" >&num; </th>
            <th class="table-header" >Nombre del proyecto</th>
            <th class="table-header" >Largo </th>
            <th class="table-header" >Ancho </th>
            <th class="table-header" >Uso </th>
            <th class="table-header" colspan="2" width="10%">Acción</th>
          </tr>
        </thead>
        <tbody>
          <?php
          session_start();
          $usu=$_SESSION['cod'];
          if ($usu==null){
            echo ("<script type=\"text/javascript\">alert(\"Por favor, inicie su sesión\"); 
            window.location.href='ingreso.php';
            </script>");
          }
          include "./funciones_librerias/db_connect.php";
          $sentencia= "SELECT * FROM proyectos WHERE cod_us='.$usu.'";
          $resultados=$conexion->query($sentencia) or die (mysqli_error($conexion));
            $i = 1;
            while ($fila= $resultados->fetch_assoc())
            {
                /*por cada registro que recupere*/
            echo '<tr>';
            echo '<td>' . $i++ . '</td>';
            echo '<td>' . $fila['proyecto'] . ' </td>';
            echo '<td>' . $fila['largo'] . '</td>';
            echo '<td>' . $fila['ancho']  .  '</td>';
            echo '<td>' . $fila['uso']  . '</td>';  
            echo "<td><a href='calculo2.php?nombres=".$fila['proyecto']."'><i class='fa fa-eye'></i></a></td>";
            echo "<td><a href='editar.php?nombres=".$fila['proyecto']."'><i class='fas fa-pencil-alt'></i></a></td>";
            echo "<td><a href='eliminar.php?nombres=".$fila['proyecto']."'><i class='fas fa-eraser'></i></a></td>";
            echo '</tr>';
         
            }
        ?>
        </tbody>
        </table>
        <div class="mt-4 mb-4">
        <a href="guardar.php" class="btn btn-secondary">Agregar</a>
      </div>

      
    </div>
    
</body>
</html>