<?php 
$usuario=$_POST['usuario'];
$password=$_POST['clave'];
$consulta=Consultausuarios($_POST['usuario']);
function Consultausuarios($no_us)
{
    include "./funciones_librerias/db_connect.php";
    $sentencia="SELECT * FROM usuarios WHERE usuario='".$no_us."'";
    $resultado=$conexion->query($sentencia) or die(mysqli_error($conexion));
    $fila=$resultado->fetch_assoc();
    return[
        $fila['cod_us'],
        $fila['usuario'],
        $fila['clave'],
    ];
}
$a=$consulta[1];
?>
<?php

// Se evalúa a true ya que $var está vacia
if ($a!=null) {
    echo 'usuario existe';
    header('Location: registro1.php');

}else{
    echo 'usuario no existe';
    session_start();
    $_SESSION['usuario']=$usuario;
    $_SESSION['password']=$password;
    header('Location: ingreso_registro.php');
}
?>