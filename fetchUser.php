<?php
	include_once("model/UserDetails.php");
	include_once("header.php");
	
	if(isset($_POST))
	{
		$userid = $_POST['userid'];
		
		$otableUserDetails = new UserDetails($dbh);
		
		$val = $otableUserDetails->fetchUsers($userid);
		echo json_encode($val);
	}
?>