<?php
    if (!empty($_POST["enviar"])) {
        if (empty($_POST["correo"]) and empty($_POST["clave"])) {
            echo '<div class="alert">uno de los campos esta vacio</div>';
        }else {
            $correo=$_POST["correo"];
            $clave=$_POST["clave"];
            $sql = $conexion->query("SELECT * FROM login WHERE correo='$correo' and clave='$clave'");
            if ($datos = $sql->fetch_object()) {
                header("location:inicio.php");
            }
            else {
               echo '<div class="alert">usuario no registrado</div>';
            }
        }
    }
?>