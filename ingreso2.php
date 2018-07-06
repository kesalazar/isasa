<?php 
$usuario=$_POST['usuario'];
$pass=$_POST['clave'];
$consulta=Validarusuarios($usuario,$pass);
function Validarusuarios($usuario,$pass)
{
    include "./funciones_librerias/db_connect.php";
    $sentencia="SELECT `usuario`, `clave` FROM `usuarios` WHERE `usuario`='$usuario' AND (`clave`='$pass') ";
    $resultado=$conexion->query($sentencia) or die(mysqli_error($conexion));
    $fila=$resultado->fetch_assoc();
    return[
        $fila['usuario'],
        $fila['clave'],
    ];
}
$as=$consulta[0];
echo $as;
?>
<?php

// Se evalúa a true ya que $var está vacia
if ($as != null) {
    echo 'usuario valido';
    header('Location: bienvenido_ingreso.php');

}else{
    echo 'algo anda mal';
    header('Location: ingreso.php');
}
?>