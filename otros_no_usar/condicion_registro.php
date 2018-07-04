<?php 
require_once ('./funciones_librerias/db_connect.php');
$conexion=connect();        
        $usuario=$_POST['usuario'];
        $password=$_POST['password'];
        $repassword=$_POST['repassword'];

if ($sql = "SELECT 'usuario','clave' FROM 'usuarios' WHERE 'usuario'='".$usuario."'")  {
        echo "no";
} else {
        $sql="INSERT INTO usuarios (usuario,clave) VALUES ('$usuario','$password')"; 
    $resultado=mysqli_query($conexion,$sql);
}
?>
<?php 
if (mysqli_query($conexion,$sql)) {
     echo "no";
} else {
     $sqli="INSERT INTO usuarios (usuario,clave) VALUES ('$usuario','$password')"; 
      $resultado=mysqli_query($conexion,$sqli);
    }
?>