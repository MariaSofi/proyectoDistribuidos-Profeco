<?php

include("conexionBD.php");

$nombre = $_POST["nombre"];
$contra   = $_POST["contra"];

//Login
if(isset($_POST["btningresar"]))
{
	$query = mysqli_query($conn,"SELECT * FROM datos WHERE nombre = '$nombre' AND contra='$contra'");
	$nr = mysqli_num_rows($query);
	
	if($nr==1)
	{
		echo "<script>  window.location='index.php' </script>";
	}else
	{
		echo "<script> alert('Usuario no existe'); window.location='loginCliente.php' </script>";
	}
}

//Registrar
if(isset($_POST["btnregistrar"]))
{
	$sqlgrabar = "INSERT INTO datos(nombre,contra) values ('$nombre','$contra')";
	
	if(mysqli_query($conn,$sqlgrabar))
	{
		echo "<script> window.location='loginCliente.php' </script>";
	}else 
	{
		echo "Error: ".$sqlgrabar."<br>".mysql_error($conn);
	}
}


?>