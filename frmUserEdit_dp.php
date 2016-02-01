<?php
	include_once("model/GenericTable.php");
	include_once("header.php");
	
	if(isset($_GET))
	{
		$location = $_GET['location'];
		$userid = $_GET['userid'];
		
		$otablefeedback = new GenericTable($dbh,'fb_userdetails');
		$list = Array(
			'location'=>$location
		);

		$clause = "where USERID='$userid'";
		$otablefeedback->updateRow($list,$clause);
	}
?>