<?php 
$usuario=$_POST['usuario'];
$pass=$_POST['clave'];
$consulta=Validarusuarios($usuario,$pass);
function Validarusuarios($usuario,$pass)
{
    include "./funciones_librerias/db_connect.php";
    $sentencia="SELECT `cod_us`,`nombre`, `clave` FROM `usuarios` WHERE `nombre`='$usuario' AND (`clave`='$pass') ";
    $resultado=$conexion->query($sentencia) or die(mysqli_error($conexion));
    $fila=$resultado->fetch_assoc();
    return[
        $fila['cod_us'],
        $fila['nombre'],
        $fila['clave'],
    ];
}
$cod=$consulta[0];
?>
<?php
session_start();
$_SESSION['cod']=$cod;
// Se evalúa a true ya que $var está vacia
if ($cod != null) {
    header('Location: bienvenido_ingreso.php');
}else{
    
    echo ("<script type=\"text/javascript\">alert(\"Los datos ingresados no son validos\"); 
          window.location.href='ingreso.php';
          </script>");
    
}
?>