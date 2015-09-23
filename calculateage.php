<?php
header('Content-Type: text/xml');
echo '<?xml version="1.0" encoding="UTF-8" standalone="yes"?>';
echo '<response>';
	include_once("commonfunctions.php");
    $dob = $_GET['dateofbirth'];
	//Validation code starts here
	$validation = true;
	$regex = '/^(0?[1-9]|[12][0-9]|3[01])[-\/](0?[1-9]|1[012])[-\/](19|20)\d\d$/';
	
	if ( ! preg_match($regex, $dob)) {
		print "Invalid Date Of Birth Value!";
		$validation = false;
	}
	 
	if ( ! $validation  ) {
		print "Validation Failed!";
		return;
	}

	list($day,$month,$year) = explode("-",$dob);
    $age = calculate_age($year,$month,$day);
	print $age;			
			
echo '</response>';
?>