<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="icon3.0_white.jpg" type="image/x-icon">
    <title>login</title>
</head>
<body>
    <div class="fondo">
        <form action="#" method="post">
          <?php
            include("conexion.php");
            include("controlador.php");
          ?>
            <h1>Log in!</h1>
            <div class="inputs">
              <input type="email" placeholder="Correo electronico.." name="correo"/>
              <input type="password" placeholder="Contraseña" name="clave"/>
              <input type="submit" value="Acceder" class="submit" name="enviar">
            </div>
            <p>¿no tengo una cuenta <a href="register.php">click aqui</a> </p>
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