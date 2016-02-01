<?php
	include_once("model/GenericTable.php");
	include_once("header.php");
	
	if(isset($_POST))
	{
		$userid = $_POST['userid'];
		$status  = $_POST['status'];
		$otableUserDetails = new GenericTable($dbh,'fb_userdetails');

		if($status == 'Y')
			$disable = 'N';
		else
			$disable = 'Y';
		$list = Array(
				'DISABLE'=>$disable
		);
			
		$clause = "where USERID='$userid'";
		$otableUserDetails->updateRow($list,$clause);
		echo "true";
	}
?>