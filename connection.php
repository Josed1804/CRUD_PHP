<?php
function conexion() {
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "users_crud_php";
    $connect = mysqli_connect($host, $user, $pass, $db);
    if (!$connect) {
        die("Error de conexión: " . mysqli_connect_error());
    }
    return $connect;
}

