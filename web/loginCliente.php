<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>l o g i n</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/cssLogin.css" >
    </head>
    <body>
    <form action="loginregistrar.php" method="POST">
        <h2>Iniciar sesión</h2>
        <input type="text" placeholder="&#128273; Usuario" name="nombre" required>
        <input type="password" placeholder="&#128274; Contraseña" name="contra" required>
        <input type="submit" value="Ingresar" name="btningresar">

        <br>
        <a href="registrar.php" style="float:right">Crear una cuenta</a>

    </form>
    </body>
</html>
