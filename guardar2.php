<?php
 NuevoProducto($_POST['nombres'],$_POST['Largo'],$_POST['Ancho'],$_POST['Uso']);
 function NuevoProducto($nombres,$largo,$ancho,$uso)
 {
   include "./funciones_librerias/db_connect.php";
   $sentencia= "INSERT INTO proyectos (nombres, Largo, Ancho, Uso) VALUES ('".$nombres."','".$largo."','".$ancho."','".$uso."')";
   $conexion->query($sentencia) or die (mysqli_error($conexion));
 }

?>
<script type="text/javascript">
   alert("Datos ingresados exitosamente!!!");
   window.location.href="recuperar.php";
</script>
