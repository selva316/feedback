<?php
	include_once("model/Location.php");
	include_once("header.php");
	
	if(isset($_POST))
	{
		$location = $_POST['location'];
		
		$otablelocation = new Location($dbh);
		
		$val = $otablelocation->fetchLocation($location);
		echo json_encode($val);
	}
?>