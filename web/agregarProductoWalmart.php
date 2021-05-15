<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/cssAgregarProducto.css" >
    <title>A g r e g a r</title>
    
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

          <li class="nav-item active">
            <a class="nav-link" href="agregarProducto.php">Agregar Producto</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="wishlist.php">WishList</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#">Reporte</a>
          </li>
          
        </ul>
      </div>
    </div>
  </nav>

  <div class="container">

  <div class="row">
  

    <div class="col-lg-3">

      <!-- <h1 class="my-4">Shop Name</h1> --> 
      
      <br>
      <br>
      <br>
      <div class="list-group">
        <a href="index.php" class="list-group-item">Supermercado Ley</a>
     
        <a href="Soriana.php" class="list-group-item">Soriana</a>
        <a href="Aurrera.php" class="list-group-item">Aurrera</a>
        <a href="Walmart.php" class="list-group-item active">Walmart</a>
      </div>

    </div>
  </div>
</div>

<div class="formulario" >
<?php
	if(isset($_GET["identificador"]))
		$identificador = $_GET['identificador'];
	else
		$identificador = 0;
  ?>

<table class = "table">
<form name="form" action="agregar4.php" method="post">
	<input type="hidden" name="identificador" value="<?php echo $identificador;?>">
  <input type="hidden" name="idSupermercado" value="<?php echo $idSupermercado;?>">
  <tr>
		<td style="text-align:center" >Nombre Produco </td>
		<td><input type="text" name="nombre" required="required"></td>
    </tr>
    <tr>
      <td style="text-align:center">Precio</td>
      <td><input type="number" name="precio" required="required" ></td>
    </tr>
    <tr>
      <td style="text-align:center">Descripcion</td>
      <td><textarea name="descripcion" cols="50" rows="5" required="required"></textarea></td>
    </tr>
    <tr>
		<td style="text-align:center" > </td>
		<td><input type="text" name="supermercado" value="Walmart" required="required" readonly></td>
    </tr>
    <tr>
      <td style="text-align:right"><input type="submit" id="submit" style="background-color: #FF9900" name="submit" value="Enviar Mensaje"></td>
    </tr>
  </form>
</table>
</div>

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