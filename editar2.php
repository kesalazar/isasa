<?php

  ModificarProyecto($_POST['nombres'],$_POST['Largo'],$_POST['Ancho'],$_POST['Uso']);

  function ModificarProyecto($nombres,$largo,$ancho,$uso)
      {
        include "./funciones_librerias/db_connect.php";
        $sentencia= "UPDATE proyectos SET nombres='".$nombres."', Largo='".$largo."', Ancho='".$ancho."', Uso='".$uso."' WHERE nombres='".$nombres."' ";
        $conexion->query($sentencia) or die (mysqli_error($conexion));

      }
?>
<script type="text/javascript">
   alert("Datos actualizados exitosamente!!!");
   window.location.href="recuperar.php";
</script>