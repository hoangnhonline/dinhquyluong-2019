<?php
		
		// include phpmailer class
		require_once '../mypham/mailer/class.phpmailer.php';
		// creates object
		$mail = new PHPMailer(true);	
	
		if(isset($_POST['btn_send']))
		{	
		
			$subject    = "Sending HTML eMail using PHPMailer.";
			$message = "Họ tên : <b>".$_POST['fullname']."</b><br>";
			$message = "Số ĐT : <b>".$_POST['email']."</b><br>";
			$message = "Nội dung : <b>".$_POST['content']."</b><br>";
			
			// HTML email ends here
			
			try
			{
				$mail->IsSMTP(); 
				$mail->isHTML(true);
				$mail->SMTPDebug  = 0;                     
				$mail->SMTPAuth   = true;                  
				$mail->SMTPSecure = "ssl";                 
				$mail->Host       = "smtp.gmail.com";      
				$mail->Port       = 465;             
				$mail->AddAddress('blogbui.com@gmail.com');
				$mail->Username   ="blogbui.com@gmail.com";  
				$mail->Password   ="f1234567";            
				$mail->SetFrom('blogbui.com@gmail.com','Coding Cage');
				$mail->AddReplyTo("blogbui.com@gmail.com","Coding Cage");
				$mail->Subject    = $subject;
				$mail->Body 	  = $message;
				$mail->AltBody    = $message;
					
				if($mail->Send())
				{
					
					$msg = "<div class='alert alert-success'>
							Hi,<br /> ".$_POST['fullname']." mail was successfully sent to ".$_POST['fullname']." go and check, cheers :)
							</div>";
					
				}
			}
			catch(phpmailerException $ex)
			{
				$msg = "<div class='alert alert-warning'>".$ex->errorMessage()."</div>";
			}
		}	
		
?>