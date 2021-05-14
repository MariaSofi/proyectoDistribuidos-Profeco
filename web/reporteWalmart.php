<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
	if(isset($_GET["identificador"]))
		$identificador = $_GET['identificador'];
	else
		$identificador = 0;
  ?>

<table class = "table">
<form name="form" action="agregarReporteWalmart.php" method="post">
	<input type="hidden" name="identificador" value="<?php echo $identificador;?>">
    <tr>
		<td style="text-align:center" >Supermercado </td>
		<td><input type="text" name="supermercado" value="Walmart" required="required" readonly></td>
    </tr>
    <tr>
      <td style="text-align:center">Mensaje</td>
      <td><textarea name="mensaje" cols="50" rows="5" required="required"></textarea></td>
    </tr>
    <tr>
      <td style="text-align:right"><input type="submit" id="submit" style="background-color: #FF9900" name="submit" value="Enviar Reporte"></td>
    </tr>
  </form>
</table>
</body>
</html>