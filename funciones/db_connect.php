<?php
function connect() {
    $host = 'localhost';
    $port = 3306;
    $user = 'root';
    $pass = '';
    $dbname = 'materiales';

    # crear conexión
    $link = mysqli_connect($host, $user, $pass, $dbname, $port);
    # verificar la conexión
    # devuelve el código de error de la última llamada
    if (!$link) {
        # die(): imprime un mensaje y termina el script actual
        die('Error de conexión: ' . mysqli_connect_errno());
    } else {
        return $link;
    }
}
?>