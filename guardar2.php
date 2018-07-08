<?php
session_start();
$cod=$_SESSION['cod'];
echo $cod;
 NuevoProducto($cod,$_POST['nombres'],$_POST['Largo'],$_POST['Ancho'],$_POST['Uso']);
 function NuevoProducto($cod,$nombres,$largo,$ancho,$uso)
 {
   include "./funciones_librerias/db_connect.php";
   $sentencia= "INSERT INTO proyectos (cod_us,proyecto, largo, ancho, uso) VALUES ('".$cod."','".$nombres."','".$largo."','".$ancho."','".$uso."')";
   $conexion->query($sentencia) or die (mysqli_error($conexion));
 }

?>
<script type="text/javascript">
   alert("Datos ingresados exitosamente!!!");
   window.location.href="recuperar.php";
</script>
