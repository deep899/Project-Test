<?php

// Mysqli database connection
$conn = mysqli_connect("localhost", "infinity_main", "Ffr@91rGSKQy", "infinity_main");

// Check if connection established 
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

function getUserIpAddr(){
    if(!empty($_SERVER['HTTP_CLIENT_IP'])){
        //ip from share internet
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    }elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
        //ip pass from proxy
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }else{
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}

if($_POST['action'])
{
	if($_POST['action'] === 'KKvGPv1tu2'){ 
		 
 		$full_name = trim($_POST['full_name']);
		$mobile = trim($_POST['mobile']);
		$email = trim($_POST['email']); 
		$content = trim($_POST['content']);
		$ip_address = getUserIpAddr();

		 if($email != '') {
			
			$sql = "INSERT INTO contacts (full_name, mobile, email, content, ip_address) 
					VALUES ('".$full_name."', '".$mobile."', '".$email."', '".$content."', '".$ip_address."')";

 

			if (mysqli_query($conn, $sql)) {
			  	ob_start();
				include "email_contact_admin.php";
				$message = ob_get_flush();
				$headers  = 'MIME-Version: 1.0' . "\r\n";
				$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		        $headers .= 'From: '.$name.' <'.$email.'>' . "\r\n";
				$headers .= 'Cc: sonu.redjinni@gmail.com' . "\r\n";
			 
				$subject = "Contact Us";
				$adminEmail = "service@redprix.com";
				mail($adminEmail, $subject, $message, $headers);

				ob_start();
				include "emaiL_contact_customer.php";
				$message = ob_get_flush();
				$headers  = 'MIME-Version: 1.0' . "\r\n";
				$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
			    $headers .= 'From: Infinitybrains <contact@infinitybrains.com>' . "\r\n";
				$subject = "Service Call Dispatch Confirmation";
				mail($email, $subject, $message, $headers);	
			} 
			mysqli_close($conn);
        }
	}
}

