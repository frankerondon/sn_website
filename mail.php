<?php
//print_r($_REQUEST);
if(isset($_REQUEST['enquiry'])){
        $message = 'Hai';

        $message .= '<br /><br /><br />
    
                <table width="280" border="0" cellspacing="0" cellpadding="3">
    
                  <tr>
    
                    <td><strong>Name</strong></td>
    
                    <td> : ' . $_REQUEST['name'] . '</td>
    
                  </tr>
    
                  <tr>
    
                    <td><strong>Email</strong></td>
    
                    <td> : ' . $_REQUEST['email'] . '</td>
    
                  </tr>  
                  
                  <tr>
    
                    <td><strong>Subject</strong></td>
    
                    <td> : ' . $_REQUEST['sub'] . '</td>
    
                  </tr>
    
                   <tr>
    
                    <td><strong>Message</strong></td>
    
                    <td> : ' . $_REQUEST['message'] . '</td>
    
                  </tr>
    
                </table>
    
                <br />	';
    
        $to = 'snintegritytk@gmail.com';
    
        $subject = 'SN Integrity - Enquiry form';

        $headers = 'MIME-Version: 1.0' . "\r\n";
    
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    
        $headers .= 'From: SN Integrity <info@snintegrity.com>' . "\r\n";
		
		
		
		$nombre_cliente= $_REQUEST['name'];
		$email_cliente= $_REQUEST['email'];
		$subject_cliente= $_REQUEST['sub'];
		$mensaje_cliente= $_REQUEST['message'];
		
		echo '<br/><br/><br/>';
		
		echo var_dump($nombre_cliente);
		echo var_dump($email_cliente);
		echo var_dump($subject_cliente);
		echo var_dump($mensaje_cliente);
		
		
		echo '<br/><br/><br/>';
		echo '<br/><br/><br/>';
		
		try{
			
			//Conexion servidor local
			//$conexion= new PDO('mysql:host=localhost;dbname=sn_clients','root','');
			
			
			//Conexion servidor prueba 000webhost
			$conexion= new PDO('mysql:host=localhost;dbname=id14312982_sn_clients','id14312982_root_cloud','>su$Z83>phn<bLfl');
			
			
			echo 'SE CONECTO MUY BIEN';
			
			$consulta= $conexion->prepare("INSERT INTO potential_clients (name,email,subject,message) VALUES ('$nombre_cliente','$email_cliente','$subject_cliente','$mensaje_cliente');");
			
			$consulta->execute();
			echo '<br/>';
			echo 'REALIZO BIEN LA INSERCION DE DATOS';
			
		}
		catch(PDOException $e){
			echo $e.getMessage();
		}
		
		
		
		echo '<br/><br/><br/>';
		echo '<br/><br/><br/>';
		
		
		
		
		
		
		
		mail($to, $subject, $message, $headers) or die("2");

        die("1");

		
}


?>