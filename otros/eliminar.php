<?php
require('./config/db_connect.php');
if (!empty($_GET)) {
    # code...
    $nombre = $_GET['nombres'];
    $conexion = connect();
    $sql = 'DELETE FROM `proyectos` WHERE `nombres`= ?';

    if ($stmt = mysqli_prepare($conexion, $sql)) {
        mysqli_stmt_bind_param($stmt, 'i', $nombre);
        if (mysqli_stmt_execute($stmt)) {
            mysqli_stmt_close($stmt);
            mysqli_close($conexion);
            header("Location: recuperar.php?msg=3");
        }
    }
} else {
    header("Location: recuperar.php?msg=4");
}

?>