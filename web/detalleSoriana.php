<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
	<link rel="stylesheet" href="css/cssDetalles.css" >

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
          <li class="nav-item">
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
			
		<a href="Soriana.php" class="list-group-item active">Soriana</a>
		<a href="Aurrera.php" class="list-group-item">Aurrera</a>
		<a href="Walmart.php" class="list-group-item">Walmart</a>
		</div>
	  </div>
</div>
</div>

<div class="detalles">
<div class="table">
                <table class="table table-striped">

				<?php
	include("conexionBDSoriana.php");
	if(isset($_GET["id"]))
	$id = $_GET['id'];
	$query = "SELECT * FROM  productos WHERE ID = '$id'";
	$result = $mysqli->query($query);
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
		
		$nombre = $row['nombre'];
		$descripcion = $row['descripcion'];
		$precio = $row['precio'];

		
		echo "<tr><td>$nombre</tr></td>";
		echo "<table>";
		echo "<tr><td>autor: $descripcion</td></tr>";
		echo "<tr><td>$precio</td></tr>";
		echo "</table>";
		echo "<td><a href='wishlistSoriana.php?id=$id'>Eliminar</a></td>";
	}
	?>
				</table>
                </div>
</div>

  <!-- Footer -->
  <div class="footer">
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy;   Sistemas Distribuidos 2021</p>
    </div>
    <!-- /.container -->
  </footer>

	</div>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>
</html>