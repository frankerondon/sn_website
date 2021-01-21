<?php

	header("Content-Type:application/xls");
	header("Content-Disposition: attachment; filename=webinar-suscribers-data.xls");

	class suscriberW{
		public $fname;
		public $lname;
		public $company;
		public $jobtitle;
		public $email;
		
		public function __construct($fn,$ln,$c,$jt,$e){
			$this->fname= $fn;
			$this->lname= $ln;
			$this->company= $c;
			$this->jobtitle= $jt;
			$this->email= $e;
		}
		
		function showFname(){
			print $this->fname;
		}
		
		function showLname(){
			print $this->lname;
		}
		
		
		function showCompany(){
			print $this->company;
		}
		
		function showJtitle(){
			print $this->jobtitle;
		}
		
		function showEmail(){
			print $this->email;
		}
	}
	
	$arrSuscribers= array();

	try{
		
		//Conexion servidor local localhost
		//$conexion= new PDO('mysql:host=localhost;dbname=sn_clients','root','');
		
		//Conexion servidor 000webhost
		$conexion= new PDO('mysql:host=localhost;dbname=id14312982_sn_clients','id14312982_root_cloud','>su$Z83>phn<bLfl');
		

		//echo 'SE CONECTO MUY BIEN';
		
		$consulta= $conexion->prepare("SELECT * FROM webinar_suscribers;");
		$consulta->execute();
		//echo '<br/>';
		//echo 'REALIZO BIEN LA LECTURA DE DATOS DE DATOS';
		//echo '<br/><br/><br/>';
		$resultados= $consulta->fetchAll();
		//print_r($resultados);
		//echo '<br/><br/><br/>';
		foreach($resultados as $r){
			//echo $r['fname'].' '.$r['lname'].' '.$r['company'].' '.$r['jobtitle'].' '.$r['email'];
			//echo '<br/><br/>';
			$clientBuff= new suscriberW($r['fname'],$r['lname'],$r['company'],$r['jobtitle'],$r['email']);
			array_push($arrSuscribers,$clientBuff);
			
		}
		//echo '<br/><br/><br/><br/>';
		//echo 'Arreglo de Suscriptores del Webinar<br/>';
		//print_r($arrSuscribers);
		//var_dump($arrSuscribers);
		
		
		//echo '<br/><br/><br/><br/>';
		
		/*
		echo '<table id=“” class=“table table-striped table-bordered”>';
		echo '<tr>';
		echo '<th>First Name</th>';
		echo '<th>Last Name</th>';
		echo '<th>Company</th>';
		echo '<th>Job Title</th>';
		echo '<th>Email</th>';
		echo '</tr>';
		echo '<tbody>';
		*/
		
		/*
		foreach($arrSuscribers as $clients){
			echo '<tr>';
			echo '<td>'.$clients->showFname().'</td>';
			echo '<td>'.$clients->showLname().'</td>';
			echo '<td>'.$clients->showCompany().'</td>';
			echo '<td>'.$clients->showJtitle().'</td>';
			echo '<td>'.$clients->showEmail().'</td>';			
			echo '</tr>';
		}
		*/
		
		//echo '</tbody>';
		
	}
	catch(PDOException $e){
		echo $e.getMessage();
	} 
?>


<table>
	<caption style="text-align:center"><strong>Webinar Suscribers Data</strong></caption>
	<tr>
		<th>First Name</th>
		<th>Last Name</th>
		<th>Company</th>
		<th>Job Title</th>
		<th>Email</th>
	</tr>
	<?php 
		foreach($arrSuscribers as $clientes){
			?>
				<tr>
					<td><?php echo $clientes->showFname();?></td>
					<td><?php echo $clientes->showLname();?></td>
					<td><?php echo $clientes->showCompany();?></td>
					<td><?php echo $clientes->showJtitle();?></td>
					<td><?php echo $clientes->showEmail();?></td>
				</tr>
			<?php
		}
	?>
</table>








