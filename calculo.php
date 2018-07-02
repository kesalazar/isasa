<?php
if(isset($_GET['largo']) and isset($_GET['ancho'])){
 $largo = $_GET['largo'];
 $ancho = $_GET['ancho'];
 $uso=$_GET['Cargas'];
} else{
  header('location: index.php?errno=0');
}
?>
<?php 
include ("db_connect.php");
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
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ISASA</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <style>
body {
    background-image: url("CWALL3.jpg"); 
    background-repeat: no-repeat;
    background-position: center;
    margin-right: 1px;
    background-attachment: fixed;
}
h5 {
	background-color: rgba(180, 180, 180, 0.8);: 
}
</style>
</head>
<body>
<?php
function vol($lar,$anc,$esp){
    $volumen = $lar * $anc * $esp;
    return $volumen;
}
function mat($vol,$mat1){
    $material=$vol*$mat1;
    return $material;
}

?>
	 
	<style type="text/css">
		table {
    border-collapse: collapse;
    width: 100%;
    background-color: rgba(255, 232, 0, 0.6)
}

th, td {
    padding: 8px;
    text-align: center;
    border-bottom: 1px solid #ddd;
}
	</style>
	<header>
		<div class="container text-center">
			<h1>ISASA</h1>
		</div>
		<div class="container text-center">
			<h5>Hola! Gracias por utilizar ISASA! <br>
				Según las dimensiones: largo <?php echo $largo ?> m, ancho <?php echo $ancho ?>m y espesor <?php echo $espesor ?>m, te sugerimos estas cantidades!
                <br></h5>
                 
<table style="width:100%">
  <tr>
    <th>Material</th>
    <th>Cantidad</th> 
    <th>Precio</th>
  </tr>
  <tr>
    <td>Cemento</td>
    <td> <?php echo $cal1=ceil((mat(vol($largo,$ancho,$espesor),$d_cemento))/$k_cemento);?> sacos </td> 
    <td> <?php echo $pr1=$cal1*$p_cemento; ?> CLP </td>
  </tr>
  <tr>
    <td>Arena</td>
    <td> <?php echo $cal2=ceil((mat(vol($largo,$ancho,$espesor),$d_arena))/$k_arena);?> sacos</td> 
    <td> <?php echo $pr2=$cal2*$p_arena;?> CLP</td>
  </tr>
  <tr>
    <td>Ripio</td>
    <td> <?php echo $cal3=ceil((mat(vol($largo,$ancho,$espesor),$d_ripio))/$k_ripio);?> sacos</td> 
    <td> <?php echo $pr3=$cal3*$p_ripio;?> CLP </td>
  </tr>
  <tr>
    <td>Agua</td>
    <td> <?php echo $cal4=(mat(vol($largo,$ancho,$espesor),$d_agua));?> lts</td> 
    <td> <?php echo $pr4=ceil(($cal4/$k_agua)*$p_agua);?> CLP </td>
  </tr>
  <tr>
  	<td>Total</td>
  	<td></td>
  	<td> <?php echo $pr1+$pr2+$pr3;?> CLP</td>
  </tr>
</table>
	<br>
	<p>*Para el cálculo de materiales se han considerado sacos de 25 kg. Los precios son referenciales</p>
		</div>
	</header>
	<div class="container">
		<h3 class="text-center">  </h3> 
	</div>
	<div class="container" class="text-center">
		<input type="submit" value="Nuevo cálculo" name="recalcula" onclick="location='index.php'" ></div>
</body>

</html>