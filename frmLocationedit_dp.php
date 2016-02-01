<?php
	include_once("model/GenericTable.php");
	include_once("header.php");
	
	if(isset($_GET))
	{
		$location = $_GET['location'];
		$email =  $_GET['email'];
		$locid = $_GET['locid'];
		
		$otablefeedback = new GenericTable($dbh,'fb_location');
		$list = Array(
				'LOCNAME'=>$location,
				'EMAIL'=>$email
		);
			
		$clause = "where LOCID='$locid'";
		$otablefeedback->updateRow($list,$clause);
	}
?>