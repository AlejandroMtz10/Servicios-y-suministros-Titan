<?php 

	try{

		$conection = new PDO('mysql:host=localhost;dbname=serviciosTitan','root','');
		
		//echo "Conexion exitosa";
			
	}catch(PDOException $e){
			echo "Error ".$e->getMessage();
	}
		
	
?>