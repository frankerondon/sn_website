<?php

if(isset($_REQUEST['enquiry'])){
        $message = 'Hai';

        $message .= '<br /><br /><br />
    
                <table width="280" border="0" cellspacing="0" cellpadding="3">
    
                  <tr>
    
                    <td><strong>First Name</strong></td>
    
                    <td> : ' . $_REQUEST['fname'] . '</td>
    
                  </tr>
                  <tr>
                  
                        <td><strong>Last Name</strong></td>
        
                        <td> : ' . $_REQUEST['lname'] . '</td>
        
                    </tr>
    
                  <tr>
    
                    <td><strong>Email</strong></td>
    
                    <td> : ' . $_REQUEST['email'] . '</td>
    
                  </tr>
    
                  <tr>
    
                    <td><strong>Phone</strong></td>
    
                    <td> : ' . $_REQUEST['phone'] . '</td>
    
                  </tr>           
    
                   <tr>
    
                    <td><strong>Message</strong></td>
    
                    <td> : ' . $_REQUEST['message'] . '</td>
    
                  </tr>
    
                </table>
    
                <br />	';
    
        $to = 'nestor@snintegrity.com.au';
    
        $subject = 'SN Integrity - Enquiry form';

        $headers = 'MIME-Version: 1.0' . "\r\n";
    
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    
        $headers .= 'From: SN Integrity <info@snintegrity.com>' . "\r\n";

        mail($to, $subject, $message, $headers) or die("2");

        die("1");
    
}


?>