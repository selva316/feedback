<?php
	include_once("model/GenericTable.php");
	include_once("header.php");
	
	function random_password( $length = 8 ) {
		$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_-=+;:,.?";
		$password = substr( str_shuffle( $chars ), 0, $length );
		return $password;
	}
	
	if(isset($_POST))
	{
		$location = $_POST['location'];
		$mailid = $_POST['mailid'];
		
		$otableuser = new GenericTable($dbh,'fb_userdetails');
		
		$otablepassword = new GenericTable($dbh,'fb_password');
		
		$pass = random_password(8);
		$password = md5($pass);
		
		$updatelist = Array(
			'password'=>$password,
			'changepassword'=>'Y'
		);
		
		$clause = "where location='$location'";
		$otableuser->updateRow($updatelist,$clause);
		
		$plist = Array(
				'LOCNAME'=>$location,
				'EMAIL'=>$mailid,
				'PASSWORD'=>$pass,
				'TIMESTAMP'=>time()
		);
		
		$otablepassword->insertRow($plist);
		
		//Email Header
		$emailheader = "From: ikure <no-reply@iplanet.in>\r\nContent-type: text/html";
		$to = $mailid;
		$subject = "Password Reset";
		$txt = "Your account password has been reset to the following password.<BR/> Password: ".$password;
		
		if(mail($to,$subject,$txt,$emailheader))
		{?>
			<script type="text/javascript">
				alert("Your password has been send to registered mail id.");
				window.location.href = "login.php"; 
			</script>
		<?php	
		}
		else
		{
		?>
			<script type="text/javascript">
				alert("Password reset is failed. Please contact your administrator");
				window.location.href = "login.php"; 
			</script>
			
		<?php
		}
		
	}
?>
