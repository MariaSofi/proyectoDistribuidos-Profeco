<?php
  session_start();
  include("conexionBDSupermercado.php");
  if(isset($_SESSION['carrito'])){
    $arreglo=$_SESSION['carrito'];
    $encuentro=false;
    
    if($encuentro==true){
     
    }else{
      if(isset($_GET['id'])){
        $id = $_GET['id'];
        $nombre="";
        $precio=0;
        $descripcion="";
        $query ="SELECT * FROM productos WHERE id='$id'";
        $result = $mysqli->query($query);
        while($f=mysqli_fetch_array($result, MYSQLI_ASSOC)){
          $nombre=$f['nombre'];
          $precio=$f['precio'];
          $descripcion=$f['descripcion'];
        }
        $arreglo[]=array(
                          'Nombre'=>$nombre,
                          'Precio'=>$precio,
                          'Descripcion'=>$descripcion);
         
        $_SESSION['carrito']=$arreglo;
      }
    
    }
  

  }else{
    if(isset($_GET['id'])){
      $id = $_GET['id'];
      $nombre="";
      $precio=0;
      $descripcion="";
      $query ="SELECT * FROM productos WHERE id='$id'";
      $result = $mysqli->query($query);
      while($f=mysqli_fetch_array($result, MYSQLI_ASSOC)){
        $nombre=$f['nombre'];
        $precio=$f['precio'];
        $descripcion=$f['descripcion'];
      }
      $arreglo[]=array(
                        'Nombre'=>$nombre,
                        'Precio'=>$precio,
                        'Descripcion'=>$descripcion);
      $_SESSION['carrito']=$arreglo;
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/cssWishlist.css" >
  <title>Document</title>

   <!-- Bootstrap core CSS -->
   <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="css/shop-homepage.css" rel="stylesheet">
</head>
<body>
<header>

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
            <a class="nav-link" href="agregarProducto.php">Agregar Producto</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="wishlist.php">WishList</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Reporte</a>
          </li>
          
        </ul>
      </div>
    </div>
  </nav>
  
  <div class="container ">
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
            <a href="Walmart.php" class="list-group-item">Walmart</a>
          </div>

    </div>
  </div>


		<h1>WishList</h1>
		
    <div class="table">
                <table class="table table-striped">
    <?php
     if(isset($_SESSION['carrito'])){
          $datos=$_SESSION['carrito'];
          for($i=0;$i<count($datos);$i++){
      ?>
      <div class="tablita">
         <tr><td>Nombre:<?php echo $datos[$i]['Nombre'];?></td></tr>
         <tr><td>Precio:<?php echo $datos[$i]['Precio'];?></td></tr>
         <tr><td>Descripcion:<?php echo $datos[$i]['Descripcion'];?></td></tr>
      </div>   
      <?php      
          }
     } else{
       echo '<h2> La lista esta vacia</h2>';
     }
     

    ?>
     <a href="index.php">Volver</a>
     </table>
                </div>
      </div>  
      
      </div>
   
    </div>
      <!-- Footer -->
  <div class="footer">
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2020</p>
    </div>
    <!-- /.container -->
  </footer>

	</div>
  
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
			
</body>
</html>




