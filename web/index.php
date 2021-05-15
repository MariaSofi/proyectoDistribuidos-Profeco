<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="stylesheet" href="css/ccsIndex.css" >

  <title>Offer + Principal</title>

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
      <form action="" method="GET">
         <input type="text" name="busqueda" required>
          <input type="submit" value="Buscar" name="enviar">
        </form>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="agregarProducto.php">Agregar Producto</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="wishlist.php">WishList</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="visualizarReporteLey.php">Reportes</a>
          </li>
          
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <div class="col-lg-3">

        <!-- <h1 class="my-4">Shop Name</h1> --> 
        
        <br>
        <br>
        <br>
        <div class="list-group">
          <a href="index.php" class="list-group-item active">Supermercado Ley</a>
       
          <a href="Soriana.php" class="list-group-item">Soriana</a>
          <a href="Aurrera.php" class="list-group-item">Aurrera</a>
          <a href="Walmart.php" class="list-group-item">Walmart</a>
        </div>

        

      </div>
      <!-- /.col-lg-3 -->

      <br>

<div>



</div>

<?php
include_once("conexionBDSupermercado.php");
if(isset($_GET['enviar'])){
   $busqueda= $_GET['busqueda'];

   $query = "SELECT * FROM productos WHERE nombre LIKE '%$busqueda%'";
	$result = $mysqli->query($query);
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
       echo $row['nombre'].'<br>';
       echo $row['descripcion'].'<br>';
       echo $row['precio'].'<br>';
       echo $row['supermercado'].'<br>';
  }
}

?>

<?php
include_once("conexionBDAurrera.php");
if(isset($_GET['enviar'])){
   $busqueda= $_GET['busqueda'];

   $query = "SELECT * FROM productos WHERE nombre LIKE '%$busqueda%'";
	$result = $mysqli->query($query);
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
       echo $row['nombre'].'<br>';
       echo $row['descripcion'].'<br>';
       echo $row['precio'].'<br>';
       echo $row['supermercado'].'<br>';
  }
}

?>

<?php
include_once("conexionBDSoriana.php");
if(isset($_GET['enviar'])){
   $busqueda= $_GET['busqueda'];

   $query = "SELECT * FROM productos WHERE nombre LIKE '%$busqueda%'";
	$result = $mysqli->query($query);
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
       echo $row['nombre'].'<br>';
       echo $row['descripcion'].'<br>';
       echo $row['precio'].'<br>';
       echo $row['supermercado'].'<br>';
  }
}

?>

<?php
include_once("conexionBDWalmart.php");
if(isset($_GET['enviar'])){
   $busqueda= $_GET['busqueda'];

   $query = "SELECT * FROM productos WHERE nombre LIKE '%$busqueda%'";
	$result = $mysqli->query($query);
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
       echo $row['nombre'].'<br>';
       echo $row['descripcion'].'<br>';
       echo $row['precio'].'<br>';
       echo $row['supermercado'].'<br>';
  }
}
?>
<br><br><br>

        <div class="tabla">
                <table class="table table-striped" >
	<tr>
		<td width="20px">Nombre</td>
		<td width="200px">Descripcion</td>
		<td width="200px">Precio</td>

	</tr>
  <?php 
	include("conexionBDSupermercado.php");
	$query = "SELECT * FROM productos";
	$result = $mysqli->query($query);
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
    ?>
		<tr>
			<td><?php echo $row['nombre'];?></td>
     <td><?php echo $row['descripcion'];?></td>
			<td><?php echo $row['precio'];?></td>
      <td><a href='detalle.php?id=<?php echo $row['id'];?>'>Ver</a></td>
		</tr>
    <?php  
	}
?>

</table>
<a href="reporteLey.php" class="get-started-btn" >Mandar Reporte</a>
                </div>
        <!-- /.row -->

      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy;  Sistemas Distribuidos 2021</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
