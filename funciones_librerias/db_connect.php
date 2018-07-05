<?php
$conexion= new mysqli("localhost","root","","materiales");
    # verificar la conexión
    # devuelve el código de error de la última llamada
    if (mysqli_connect_errno()) {
        # die(): imprime un mensaje y termina el script actual
        printf("Fallo la conexion");
    } else {
        //printf("estas conectado");
    }
?>