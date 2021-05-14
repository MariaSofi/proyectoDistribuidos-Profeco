<?php
	include("conexionBDAurrera.php");
	
	if(isset($_POST["submit"])){
		if(!empty($_POST['mensaje'])){
			$supermercado=$_POST['supermercado'];
            $mensaje=$_POST['mensaje'];
			$identificador=$_POST['identificador'];
			
			
			
			//Evitamos que el usuario ingrese HTML
			$descripcion = htmlentities($descripcion);
			echo "identificador:";
			echo $identificador;
			
			//Grabamos el mensaje en la base de datos.
			$query = "INSERT INTO reportes (supermercado, mensaje, identificador) VALUES ('$supermercado', '$mensaje', '$identificador')";
			
			echo $query;
			echo "identificador:";
			echo $identificador;
			$result = $mysqli->query($query);
			Header("Location: Aurrera.php");
		}
	}
?>