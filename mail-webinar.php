<?php
	/*
	print_r($_REQUEST);
	*/
	
	if(isset($_REQUEST['enquiry'])){
		 $message = 'Hello, This is a webinar data contact';

		 $message .= '<br /><br /><br />
			
			<table width="280" border="0" cellspacing="0" cellpadding="3">

				<tr>
					<td><strong>First Name</strong></td>
					<td> : ' . $_REQUEST['first_name'] . '</td>
				</tr>

				<tr>
					<td><strong>Last Name</strong></td>
					<td> : ' . $_REQUEST['last_name'] . '</td>
				</tr>

				<tr>
					<td><strong>Company</strong></td>
					<td> : ' . $_REQUEST['company'] . '</td>
				</tr> 

				<tr>
					<td><strong>Job Title</strong></td>
					<td> : ' . $_REQUEST['job_title'] . '</td>
				</tr>

				<tr>
					<td><strong>Email</strong></td>
					<td> : ' . $_REQUEST['mail'] . '</td>
				</tr>

			</table>
			<br />	';

			$to = 'nestor@snintegrity.com.au';
		
			$subject = 'SN Integrity - Webinar Form';

			$headers = 'MIME-Version: 1.0' . "\r\n";
		
			$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		
			$headers .= 'From: SN Integrity <info@snintegrity.com>' . "\r\n";

			mail($to, $subject, $message, $headers) or die("2");

			/*
			die("1");
			*/
			
			/*
			var_dump(header('Location: http://snintegrity.000webhostapp.com/'));
			*/
			
			header('Location: /webinar-demo.php');
			
	}

?>