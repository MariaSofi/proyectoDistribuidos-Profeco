<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/cssRegistrar.css" >
    
</head>
<body>
    <form class="box" action="loginregistrar.php" method="POST">
        <h1>Registrar</h1>

        <input type="text" placeholder="&#128273; Usuario" name="nombre" required>
        <input type="password" placeholder="&#128274; Contraseña" name="contra" required>
        <input type="submit" value="Registrar" name="btnregistrar">

        
        <a href="loginCliente.php" style="float:right">Regresar</a>

    </form>
</body>
</html>