<?php
	include_once("model/GenericTable.php");
	include_once("header.php");
	
	if(isset($_GET))
	{
		$location = $_GET['location'];
		$username = $_GET['username'];
		$password = $_GET['password'];
		
		$otablefeedback = new GenericTable($dbh,'fb_userdetails');
		$list = Array(
				'username'=>$username,
				'password'=>md5($password),
				'location'=>$location
		);
		$id = $otablefeedback->insertRow($list);
		
		$userid = 'USR' . $instance_identifier  . $id;
				
		$updatelist = Array(
			'USERID'=>$userid
		);
		$clause = "where ID='$id'";
		$otablefeedback->updateRow($updatelist,$clause);
	}
?>