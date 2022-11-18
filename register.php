<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="icon3.0_white.jpg" type="image/x-icon">
    <title>Register</title>
  </head>
  <body>
    <div class="fondo">
        <form action="#" method="post">
          <?php
            include("conexion.php");
            include("proceso_registrro.php");
          ?>
            <h1>Register</h1>
            <div class="inputs">
              <input type="text" placeholder="Nombre Completo..." name="nombre"/>
              <input type="email" placeholder="Correo electronico.." name="correo"/>
              <input type="password" placeholder="Contraseña" name="clave"/>
              <input type="submit" value="Registrar" class="submit" name="enviar">
            </div>
            <p>¿tienes una cuenta <a href="login.php">click aqui</a> </p>
          </form>
    </div>
    <style>
      .alert{
        background: red;
        color: white;
        padding:5px 20px;
      }
      .sucess{
        background: green;
        color: white;
        padding: 5px 20px;
      }
    </style>
  </body>
</html>
