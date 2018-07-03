<?php
if(isset($_GET['largo']) and isset($_GET['ancho'])){
 $largo = $_GET['largo'];
 $ancho = $_GET['ancho'];
 $uso=$_GET['Cargas'];
} else{
  header('location: index.php?errno=0');
}
session_start();
//consulta dosificaciones y precios unitarios 
include ("./funciones_librerias/db_connect.php");
$conexion=connect();
$sql="SELECT espesor_m,agua_lts,arena_kg,ripio_kg,cemento_kg FROM dosificaciones_por_m3 WHERE uso_carga='".$uso."'";
$result=mysqli_query($conexion, $sql);
while($row = mysqli_fetch_assoc($result)) {
         $espesor=$row['espesor_m'];
         $d_agua=$row['agua_lts'];
         $d_arena=$row['arena_kg'];
         $d_ripio=$row['ripio_kg'];
         $d_cemento=$row['cemento_kg'];
        }

$sql="SELECT material,precio,kilos FROM precios WHERE material='agua'";
$result=mysqli_query($conexion, $sql);
while($row = mysqli_fetch_assoc($result)) {
		   $p_agua=$row['precio'];
           $k_agua=$row['kilos'];        
       }

$sql="SELECT material,precio,kilos FROM precios WHERE material='arena'";
$result=mysqli_query($conexion, $sql);
while($row = mysqli_fetch_assoc($result)) {
		   $p_arena=$row['precio'];
           $k_arena=$row['kilos'];        
        }    

$sql="SELECT material,precio,kilos FROM precios WHERE material='cemento'";
$result=mysqli_query($conexion, $sql);
while($row = mysqli_fetch_assoc($result)) {
		   $p_cemento=$row['precio'];
           $k_cemento=$row['kilos'];        
        }

$sql="SELECT material,precio,kilos FROM precios WHERE material='gravilla'";
$result=mysqli_query($conexion, $sql);
while($row = mysqli_fetch_assoc($result)) {
		   $p_ripio=$row['precio'];
           $k_ripio=$row['kilos'];        
        }                    
mysqli_close($conexion);

//cálculos materiales y precios
include ("./funciones_librerias/f_volumen.php");
include ("./funciones_librerias/f_material.php");
$volumen=vol($largo,$ancho,$espesor);
$cal1=ceil(mat($volumen,$d_cemento)/$k_cemento);
$pr1=$cal1*$p_cemento;
$cal2=ceil(mat($volumen,$d_arena)/$k_arena);
$pr2=$cal2*$p_arena;
$cal3=ceil(mat($volumen,$d_ripio)/$k_ripio);
$pr3=$cal3*$p_ripio;
$cal4=mat($volumen,$d_agua);
$pr4=ceil(($cal4/$k_agua)*$p_agua);
$precio_total=$pr1+$pr2+$pr3+$pr4;
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ISASA</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/estilo_calculo.css"> 
    <link rel="shortcut icon" href="./imagenes/ico_isasa.png"/>
</head>
<body>
	<header>
		<div class="container text-center">
      <br>
      <div class="row">
        <div class="col-md"></div>
        <div class="col-md">
          <div class="alert alert-secondary" role="alert">
            <h2 class="alert-heading"><img src="./imagenes/ico_isasa.png" width="30" height="30" class="d-inline-block align-top" alt="">  ISASA</h2>                                        
          </div>
        </div>
        <div class="col-md"></div>
      </div>
		</div>
		<div class="text-center">
			<h7 class="btn btn-secondary btn-lg">
        Hola! Gracias por utilizar ISASA! Según las dimensiones: 
        largo <?php echo $largo ?> m, ancho <?php echo $ancho ?>m y espesor     
        <?php echo $espesor ?>m, te sugerimos estas cantidades!</h7>
      <br><br>
    </div>
    <div class="container">
      <table>
  <tr>
    <th>Material</th>
    <th>Cantidad</th> 
    <th>Precio</th>
  </tr>
  <tr>
    <td>Cemento</td>
    <td> <?php echo $cal1;?> sacos </td> 
    <td> <?php echo $pr1;?> CLP </td>
  </tr>
  <tr>
    <td>Arena</td>
    <td> <?php echo $cal2;?> sacos</td> 
    <td> <?php echo $pr2;?> CLP</td>
  </tr>
  <tr>
    <td>Ripio</td>
    <td> <?php echo $cal3;?> sacos</td> 
    <td> <?php echo $pr3;?> CLP </td>
  </tr>
  <tr>
    <td>Agua</td>
    <td> <?php echo $cal4;?> lts</td> 
    <td> <?php echo $pr4;?> CLP </td>
  </tr>
  <tr>
  	<th>Total</th>
  	<td></td>
  	<th> <?php echo $precio_total;?> CLP</th>
  </tr>
      </table>
      	<div class="text-center">
       		<h6>
       		<em>
      		*Para el cálculo de materiales se han considerado sacos de 25 kg (arena y cemento) y 20 kg (ripio). Los precios son referenciales
      		</em>
      		</h6>
      	</div>      	
     </div><br>
	</header>
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <div class="text-right">
          <input type="submit" class="btn btn-secondary" value="Nuevo cálculo" name="recalcula" onclick="location='datos.php'">
        </div>        
      </div>
      <div class="col-md-3"></div>
      <div class="col-md-3"></div>
      <div class="col-md-3">
        <div class="text-left">
          <input type="submit" class="btn btn-secondary" value="Imprimir Reporte" onclick="location='pdf1.php'"  name="pdf">
        </div>                 
      </div>
    </div><br><br><br>
    <div class="text-center">
      <p>&#174; ISASA 2018</p> 
    </div>  
  </div>
    <?php $_SESSION['lar']=$largo?>
    <?php $_SESSION['anc']=$ancho?>
    <?php $_SESSION['esp']=$espesor?>
    <?php $_SESSION['ccem']=$cal1?>
    <?php $_SESSION['tcem']=$pr1?>
    <?php $_SESSION['care']=$cal2?>
    <?php $_SESSION['tare']=$pr2?>
    <?php $_SESSION['crip']=$cal3?>
    <?php $_SESSION['trip']=$pr3?>
    <?php $_SESSION['cagu']=$pr4?>
    <?php $_SESSION['tagu']=$cal4?>
    <?php $_SESSION['total']=$precio_total?>    
</body>
</html>