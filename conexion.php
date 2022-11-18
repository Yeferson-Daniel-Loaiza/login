<?php
    session_start();
    $host = $_ENV["host"];
    $usuario = $_ENV["usuario"];
    $contrasena = $_ENV["contrasena"];
    $database = $_ENV["database"];
    $puerto=$_ENV["puerto"];
    $conexion =  mysqli_connect($host,$usuario,$contrasena,$database,$puerto);
    if ($conexion) {
        
    }else {
        echo "algo fallo";
    }

?>