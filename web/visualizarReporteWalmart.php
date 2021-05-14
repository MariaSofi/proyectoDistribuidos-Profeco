<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="tabla">
                <table class="table table-striped">
<?php 
		include("conexionBDWalmart.php");
        $query = "SELECT * FROM  reportes WHERE identificador = 0 ";
        $result = $mysqli->query($query);
        while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            $supermercado = $row['supermercado'];
            $mensaje = $row['mensaje'];
            echo "<tr>";
                echo "<td>$supermercado</td>";
                echo "<td>$mensaje</td>";
            echo "</tr>";
        }
?>
</table>
                </div>
</body>
</html>