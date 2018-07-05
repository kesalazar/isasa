<?php 
 EliminarProyecto($_GET['nombres']);

 function EliminarProyecto($nombres)
 {
	include "./funciones_librerias/db_connect.php";
	$sentencia= "DELETE FROM proyectos WHERE nombres='".$nombres."' ";
	$conexion->query($sentencia) or die ("Error al eliminar".mysqli_error($conexion));
 }
?>
<script type="text/javascript">
   alert("Proyecto eliminado exitosamente!!!");
   window.location.href="recuperar.php";
</script>