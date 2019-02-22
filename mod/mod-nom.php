 ﻿<?php
		$servidor = "localhost";
		$usuari = "root";
		$password = "";
		$db = "futbol";

		$codi = $_REQUEST['codi'];
		$nom = $_REQUEST['nom'];
		
		// Create connection
		$conn = new mysqli($servidor, $usuari, $password, $db);
		
		// Check connection
		if ($conn->connect_error) {
			die("Connexió KO: " . $conn->connect_error);
		} else {
				
				
				if ($nom !="") {
					$sql = "update equips set nom=\"" .$nom. "\" where codi=".$codi;
				}
				
				
				if ($conn->query($sql) === TRUE) {
					echo "El registro fue modificado correctamente <a href=../form-nom.php>Volver</a>";
				} else {
					echo "Error: " . $sql . "<br>" . $conn->error;
				}

			$conn->close();
		}
		?>
