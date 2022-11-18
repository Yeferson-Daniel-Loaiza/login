<?php
if (!empty($_POST["enviar"])) {
    if (empty($_POST["nombre"]) or empty($_POST["correo"] or empty($_POST["clave"]))) {
        echo '<div class="alert">uno de los campos esta vacio</div>';
    }else {
        $nombre=$_POST["nombre"];
        $correo=$_POST["correo"];
        $clave=$_POST["clave"];
        $sql = $conexion->query("INSERT INTO login(nombre, correo, clave) VALUES ('$nombre','$correo','$clave')");
        if ($sql) {
            echo '<div class="sucess">usuario registrado exitosamente</div>';
        }
        else {
           echo '<div class="alert">usuario no registrado correctamente</div>';
        }
    }
}

?>