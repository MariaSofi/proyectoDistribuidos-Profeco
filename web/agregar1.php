<?php
	include("conexionBDSupermercado.php");
	
	if(isset($_POST["submit"])){
		if(!empty($_POST['descripcion'])){
			$nombre=$_POST['nombre'];
			$precio=$_POST['precio'];
			$descripcion=$_POST['descripcion'];
			$supermercado=$_POST['supermercado'];
			$identificador=$_POST['identificador'];
			
			
			
			//Evitamos que el usuario ingrese HTML
			$descripcion = htmlentities($descripcion);
			echo "identificador:";
			echo $identificador;
			
			//Grabamos el mensaje en la base de datos.
			$query = "INSERT INTO productos (nombre, precio, descripcion, supermercado, identificador) VALUES ('$nombre', '$precio', '$descripcion', '$supermercado', '$identificador')";
			
			echo $query;
			echo "identificador:";
			echo $identificador;
			$result = $mysqli->query($query);
			Header("Location: index.php");
		}
	}
?>