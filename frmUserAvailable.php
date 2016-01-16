<?php
	include_once("model/UserDetails.php");
	include_once("header.php");
	
	if(isset($_GET))
	{
		
		$username = $_GET['username'];
		
		$ouserdetails = new UserDetails($dbh);
		
		return $ouserdetails->userAvailable($username);
		
	}
?>