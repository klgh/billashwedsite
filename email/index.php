<?php
 if(isset($_POST['submit']))
 {
    $name = $_POST['name'];
	$email = $_POST['email'];
	$song = $_POST['song'];
	$email_from = $name.'<'.$email.'>';

 $to="kaleighleach@gmail.com";
 $subject="Wedding RSVP";
 $headers  = 'MIME-Version: 1.0' . "\r\n";
 $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
 $headers .= "From: ".$email_from."\r\n";
 $message="	  
 	   
 		 Name:
		 $name 	   
         <br>
 		 Email:
		 $email 	   
         <br>
		 Song Request:
		 $song	   
      
   ";
	if(mail($to,$subject,$message,$headers))
		header("Location:../contact.php?msg=Thank you so much for your song request!");
	else
		header("Location:../contact.php?msg=Error To send Email, please try again, or email rsvp@billashleywedding.com");
		//contact:-your-email@your-domain.com
 }
?>
