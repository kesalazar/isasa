<?php 
require_once ('./funciones_librerias/db_connect.php');
session_start();
$usuario=$_SESSION['usuario'];
$password=$_SESSION['password'];
        $sql="INSERT INTO usuarios (cod_us,nombre,clave) VALUES ('','".$usuario."','".$password."')";    
        $conexion->query($sql) or die (mysqli_error($conexion));    
?>
  <script type="text/javascript">
   alert("Usuario ingresado correctamente!!!");
   window.location.href="ingreso.php";
  </script>