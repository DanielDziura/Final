<?php
		$servidor = "localhost";
		$usuari = "root";
		$password = "";
		$db = "futbol";

		$codi = $_REQUEST['codi'];
		$escut = $_REQUEST['escut'];
		
		// Create connection
		$conn = new mysqli($servidor, $usuari, $password, $db);
		
		// Check connection
		if ($conn->connect_error) {
			die("Connexió KO: " . $conn->connect_error);
		} else {
				
				
				if ($escut !="") {
					$sql = "update equips set escut=\"" .$escut. "\" where codi=".$codi;
				}
				
				
				if ($conn->query($sql) === TRUE) {
					echo "El registro fue modificado correctamente <a href=../form-escut.php>Volver</a>";
				} else {
					echo "Error: " . $sql . "<br>" . $conn->error;
				}

			$conn->close();
		}
		?>