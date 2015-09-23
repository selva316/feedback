<?php
	include_once("model/GenericTable.php");
	include_once("header.php");
	
	if(isset($_POST))
	{
		$title = $_POST['tile'];
		$name = $_POST['name'];
		$mobile = $_POST['mobile'];
		$email = $_POST['email'];
		$dob = $_POST['dob'];
		$age = $_POST['age'];
		$iam = $_POST['radios'];
		if($iam == "others")
		{
			$iam = $_POST['other'];
		}
		
		$interest = implode(",",$_POST['interested']);
		
		$currently = implode(",",$_POST['chk']);
		$chkother = $_POST['chkother'];
		$sales_radios = $_POST['sales_radios'];
		$customer_radios = $_POST['customer_radios'];
		$knownby = $_POST['knowby'];
		$appreciate = $_POST['appreciate'];
		$serve = $_POST['serve'];
		
		$otablefeedback = new GenericTable($dbh,'fb_feedback');
		$list = Array(
				'title'=>$title,
				'name'=>$name,
				'mobile'=>$mobile,
				'mailid'=>$email,
				'dob'=>$dob,
				'age'=>$age,
				'designation'=>$iam,
				'interest'=>$interest,
				'currently'=>$currently,
				'currentlyothers'=>$chkother,
				'salepro'=>$sales_radios,
				'customerexp'=>$customer_radios,
				'knownby'=>$knownby,
				'appreciate'=>$appreciate,
				'serveby'=>$serve,
				'timestamp'=>time()
		);
		$id = $otablefeedback->insertRow($list);
		
		$fid = 'FB' . $instance_identifier  . $id;
		$hashid = md5($fid.$name.$mobile);
		
		$updatelist = Array(
					'FBID'=>$fid,
					'HASHID'=>$hashid
		);
		$clause = "where ID='$id'";
		$otablefeedback->updateRow($updatelist,$clause);
	}
?>
<script type="text/javascript">
	alert("Thanks For Your feedback");
    window.location.href = "index.php"; 
</script>