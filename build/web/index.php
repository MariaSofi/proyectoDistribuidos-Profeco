<?php
$productos = array();
$productos[001] = array(
  "nombre" = > "Carne de res",
  "descripcion" = > "Carne de buena calidad ",
  "imagen" = "/img/carnederes.jpg",
  "precio" = 130,
  "precioOferta" = 90

)

$productos[002] = array(
  "nombre" = > "Pan Bimbo",
  "descripcion" = > "Pan Blanco de la marca Bimbo ",
  "imagen" = "/img/panbimbo.jpg",
  "precio" = 60,
  "precioOferta" = 40

)

$productos[003] = array(
  "nombre" = > "Jamon FUD",
  "descripcion" = > "Jamon de pavo virginia ",
  "imagen" = "/img/jamonfud.jpg",
  "precio" = 70,
  "precioOferta" = 50

)

$productos[004] = array(
  "nombre" = > "Mazatun",
  "descripcion" = > "Lomo de atun, aleta amarilla en agua",
  "imagen" = "/img/carnederes.jpg",
  "precio" = 130,
  "precioOferta" = 90

)

$productos[005] = array(
  "nombre" = > "Nutrioli",
  "descripcion" = > "Puro de soya, pura salud ",
  "imagen" = "/img/nutrioli.png",
  "precio" = 50,
  "precioOferta" = 35

)

$productos[006] = array(
  "nombre" = > "Mantequilla Lala",
  "descripcion" = > "Mantequilla sin sal ",
  "imagen" = "/img/mantequilla.jpg",
  "precio" = 60,
  "precioOferta" = 40

)






?>


<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

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
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
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
          <a href="supermercadoLey.html" class="list-group-item">Supermercado Ley</a>
       
          <a href="Soriana.html" class="list-group-item">Soriana</a>
          <a href="Aurrera.html" class="list-group-item">Aurrera</a>
          <a href="Walmart.html" class="list-group-item">Walmart</a>
        </div>

      </div>
      <!-- /.col-lg-3 -->

      <div class="col-lg-9">

        <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>

        <div class="row">
          
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Item One</a>
                </h4>
                <h5>$24.99</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div>

          

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
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2020</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
