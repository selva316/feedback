<?php
	include_once("model/GenericTable.php");
	include_once("header.php");
	
	if(isset($_POST))
	{
		$location = $_POST['location'];
		$status  = $_POST['status'];
		$otablefeedback = new GenericTable($dbh,'fb_location');

		if($status == 'Y')
			$disable = 'N';
		else
			$disable = 'Y';
		$list = Array(
				'DISABLE'=>$disable
		);
			
		$clause = "where LOCID='$location'";
		$otablefeedback->updateRow($list,$clause);
		echo "true";
	}
?>