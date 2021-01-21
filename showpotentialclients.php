<?php 

	header("Content-Type:application/xls");
	header("Content-Disposition: attachment; filename=potential-clients-data.xls");
	

	class potClient{
		public $name;
		public $email;
		public $subject;
		public $message;
		
		public function __construct($n,$e,$s,$m){
			$this->name=$n;
			$this->email=$e;
			$this->subject=$s;
			$this->message=$m;
		}
		
		function showName(){
			print $this->name;
		}
		
		function showEmail(){
			print $this->email;
		}
		
		function showSubject(){
			print $this->subject;
		}
		
		function showMessage(){
			print $this->message;
		}
	}
	
	$arrPotClients = array();

	try{
		$conexion= new PDO('mysql:host=localhost;dbname=id14312982_sn_clients','id14312982_root_cloud','>su$Z83>phn<bLfl');
		//echo 'SE CONECTO MUY BIEN';
		
		$consulta= $conexion->prepare("SELECT * FROM potential_clients;");
		$consulta->execute();
		//echo '<br/>';
		//echo 'REALIZO BIEN LA LECTURA DE DATOS DE DATOS';
		//echo '<br/><br/><br/>';
		$resultados= $consulta->fetchAll();
		//print_r($resultados);
		//echo '<br/><br/><br/>';
		foreach($resultados as $r){
			//echo $r['name'].' '.$r['email'].' '.$r['subject'].' '.$r['message'];
			//echo '<br/><br/>';
			$clientBuff = new potClient($r['name'],$r['email'],$r['subject'],$r['message']);
			array_push($arrPotClients,$clientBuff);
		}
		//echo '<br/><br/><br/><br/>';
		//echo 'Arreglo de Clientes Potenciales<br/>';
		//print_r($arrPotClients);
		
		/*
		echo '<br/><br/><br/><br/>';
		echo '<table id=“” class=“table table-striped table-bordered”>';
		echo '<tr>';
		echo '<th>Name</th>';
		echo '<th>Email</th>';
		echo '<th>Subject</th>';
		echo '<th>Message</th>';
		echo '</tr>';
		echo '<tbody>';
		*/
		
		/*
		foreach($arrPotClients as $clients){
			echo '<tr>';
			echo '<td>'.$clients->showName().'</td>';
			echo '<td>'.$clients->showEmail().'</td>';
			echo '<td>'.$clients->showSubject().'</td>';
			echo '<td>'.$clients->showMessage().'</td>';
			echo '</tr>';
			//echo $clients[name];
			//var_dump($clients);
			
			//echo '<br/>';
			//echo $clients;
			//echo $clients->showName();
			//echo '<br/><br/>';
		}	
		*/
		
		
		//echo '</tbody>';
		
	}		//END TRY
	catch(PDOException $e){
		echo $e.getMessage();
	}		
?>



	
	
<table>
	<caption style="text-align:center"><strong>Potential Clients Data</strong></caption>
	<tr>
		<th>Name</th>
		<th>Email</th>
		<th>Subject</th>
		<th>Message</th>
	</tr>
	<?php 
		foreach($arrPotClients as $clientes){
			?>
				<tr>
					<td><?php echo $clientes->showName();?></td>
					<td><?php echo $clientes->showEmail();?></td>
					<td><?php echo $clientes->showSubject();?></td>
					<td><?php echo $clientes->showMessage();?></td>
				</tr>
			<?php
		}
	?>
</table>
	


