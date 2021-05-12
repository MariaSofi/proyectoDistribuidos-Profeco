
<?php include "funciones.php" ?>
<?php


if (isset($_GET["id"]))
$producto_id = $_GET["id"];
if (isset($productos[$producto_id]))
$producto = $productos[$producto_id];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="row">
        
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
            <a href="#"><img class="card-img-top" src="<?php echo $producto["imagen"];?>"></a>
              <div class="card-body">
                <h4 class="card-title">
                  <h4><?php echo $producto["nombre"];  'pesos'?></h4>
                </h4>
                <h5><?php echo $producto["precio"];?></h5>
                <p class="card-text"><?php echo $producto["descripcion"];?></p>
              </div>
              <div class="card-footer">
                
              </div>
            </div>
           
          </div>
        
          

        </div>
</body>
</html>




