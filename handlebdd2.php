<?php
	
	//$datos = json_decode($_POST['yeison_suscriber'], true);
	$datos_nombre = $_POST['FNAME'];
	$datos_apellido = $_POST['LNAME'];
	$datos_company = $_POST['COMPANY'];
	$datos_cargo = $_POST['JOBTITLE'];
	$datos_email = $_POST['EMAIL'];
	//var_dump($datos);
	var_dump($datos_nombre);
	var_dump($datos_apellido);
	var_dump($datos_company);
	var_dump($datos_cargo);
	var_dump($datos_email);
	
	echo '<br/><br/><br/>';
	echo '<br/><br/><br/>';
	
	
	
	try{
		
		//Conexion servidor local
		//$conexion= new PDO('mysql:host=localhost;dbname=sn_clients','root','');
		
		//Conexion servidor prueba 000webhost
		$conexion= new PDO('mysql:host=localhost;dbname=id14312982_sn_clients','id14312982_root_cloud','>su$Z83>phn<bLfl');
		
		echo 'SE CONECTO MUY BIEN';
		
		$consulta= $conexion->prepare("INSERT INTO webinar_suscribers (fname,lname,company,jobtitle,email) VALUES ('$datos_nombre','$datos_apellido','$datos_company','$datos_cargo','$datos_email');");
			
		$consulta->execute();
		echo '<br/>';
		echo 'REALIZO BIEN LA INSERCION DE DATOS';
		
	}
	catch(PDOException $e){
		echo $e.getMessage();
	}
	
	
	echo '<br/><br/><br/>';
	echo '<br/><br/><br/>';

?>