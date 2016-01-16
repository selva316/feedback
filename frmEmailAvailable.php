<?php
	include_once("model/Location.php");
	include_once("header.php");
	
	if(isset($_GET))
	{
		
		$maildid = $_GET['mailid'];
		$location = $_GET['location'];
		
		$olocation = new Location($dbh);
		
		return $olocation->locationAvailable($maildid, $location);
		
	}
?>