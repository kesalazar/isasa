<?php 
require_once ('./funciones_librerias/db_connect.php');
$conexion=connect();
if (isset($_POST['usuario']) and isset($_POST['clave'])){
 
 if (empty($_POST['usuario']) or empty($_POST['clave'])) {
   header('Location: registro1.php?error=1');
 }
 else{
 if (!empty($_POST)) {

    $usuario = $_POST['usuario'];
    $clave = $_POST['clave'];

     
     $sql = "INSERT INTO usuarios(usuario, clave) VALUES ('$usuario','$clave')"; 
     $stm = $conexion->prepare($sql);
     $usuarios = array('$usuario' => $usuario,'$clave' => $clave);

      $stm->execute($usuarios);
      mysqli_close($conexion);
      header('Location: ingreso.php?msg=2');
     
    }
  }
}       
?>



                <div class="row">
                    <div class="col-sm-4"></div>
                    <div class="col-sm-4">
                        <div class="form-group row">                
                        <input type="submit" class="btn btn-secondary" value="Guardar">
                        <a href="./recuperar.php" class="btn btn-secondary">Cancelar</a>                
                        </div>
                    </div>
                    <div class="col-sm-4"></div>
                </div>
        </form>      