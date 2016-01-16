<?php
	include_once("model/UserDetails.php");
	include_once("header.php");
	
	if(isset($_POST))
	{
		
		$oldpassword = $_POST['oldpassword'];
		$username = $_POST['username'];
		$locid = $_POST['locid'];		
		
		$ouserdetails = new UserDetails($dbh);
		
		return $ouserdetails->passwordAvailable($oldpassword, $username, $locid);
		
	}
?>