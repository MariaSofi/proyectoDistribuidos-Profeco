<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

	<!-- Bootstrap core CSS -->
	<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="css/shop-homepage.css" rel="stylesheet">

</head>
<body>


<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <!-- -->  
      <a class="navbar-brand" href="#"></a>
      <img src="img/imgPrincipal.png" alt="" height="50" width="150" />
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          
          <li class="nav-item">
            <a class="nav-link" href="agregarProductoSoriana.php">Agregar Producto</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="wishlistSoriana.php">WishList</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="visualizarReporteSoriana.php">Reporte</a>
          </li>
          
        </ul>
      </div>
    </div>
  </nav>

  <div class="contenedor">

<div class="container">

	  <div class="col-lg-3">

		<br>
		<br>
		<br>
		<div class="list-group">
		<a href="index.php" class="list-group-item">Supermercado Ley</a>
			
		<a href="Soriana.php" class="list-group-item">Soriana</a>
		<a href="Aurrera.php" class="list-group-item">Aurrera</a>
		<a href="Walmart.php" class="list-group-item">Walmart</a>
		</div>
	  </div>
</div>
</div>

<?php
	if(isset($_GET["identificador"]))
		$identificador = $_GET['identificador'];
	else
		$identificador = 0;
  ?>

<table class = "table">
<form name="form" action="agregarReporteSoriana.php" method="post">
	<input type="hidden" name="identificador" value="<?php echo $identificador;?>">
    <tr>
		<td style="text-align:center" >Supermercado </td>
		<td><input type="text" name="supermercado" value="Soriana" required="required" readonly></td>
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

<!-- Footer -->
<div class="footer">
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Sistemas Distribuidos 2021</p>
    </div>
    <!-- /.container -->
  </footer>

	</div>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>
</html>