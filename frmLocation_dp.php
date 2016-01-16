<?php
	include_once("model/GenericTable.php");
	include_once("header.php");
	
	if(isset($_GET))
	{
		$location = $_GET['location'];
		$email =  $_GET['email'];
		
		$otablefeedback = new GenericTable($dbh,'fb_location');
		$list = Array(
				'LOCNAME'=>$location,
				'EMAIL'=>$email
		);
		
		$id = $otablefeedback->insertRow($list);
		
		$locid = 'LOC' . $instance_identifier  . $id;
				
		$updatelist = Array(
					'LOCID'=>$locid
		);
		$clause = "where ID='$id'";
		$otablefeedback->updateRow($updatelist,$clause);
	}
?>