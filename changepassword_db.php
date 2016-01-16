<?php
	include_once("model/GenericTable.php");
	include_once("header.php");
	

	if(isset($_POST))
	{
		$locid = $_POST['locid'];
		$username = $_POST['username'];
		
		$newpassword = $_POST['newpassword'];
		
		$otableuser = new GenericTable($dbh,'fb_userdetails');
		

		$updatelist = Array(
			'password'=>md5($newpassword),
			'changepassword'=>'N'
		);
		
		$clause = "where location='$locid' and username='".$username."'";
		$otableuser->updateRow($updatelist,$clause);
		
		
	}
?>
<script type="text/javascript">
	alert("Your password has been changed successfully.");
    window.location.href = "login.php"; 
</script>