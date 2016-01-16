<?php
	session_start();
	
	if($_SESSION['role']!='user'){
		print "<script>window.location.href='login.php';</script>";
	}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Product Feedack</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="assets/css/bootstrap.css" rel="stylesheet">
		<link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
		<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
		
		<link rel="stylesheet" href="css/global.css">
		<script src="js/jQuery.js"></script>
		<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
		<script src="assets/js/bootstrap.js"></script>
	</head>
	<style>
		/* Large desktop */
		@media (min-width: 1200px) {
			#container{
				width: 80%
			}
			#main{
				width: 90%
			}
			.rmobile{
				background: #a901db none repeat scroll 0 0; border: medium solid #a901db; border-radius: 49%; color: #fff; padding: 7px 13px; width: 1%;
			}
			.rage{
				width: 1%;
			}
		}
     
		/* Portrait tablet to landscape and desktop */
		@media (min-width: 768px) and (max-width: 979px) {
			#container{
				width: 80%
			}
			#main{
				width: 90%
			}
			.rmobile{
				background: #a901db none repeat scroll 0 0; border: medium solid #a901db; border-radius: 49%; color: #fff; padding: 6px 12px; width: 2%;
			}
			.rage{
				width: 1%;
			}
		}
		 
		/* Landscape phone to portrait tablet */
		@media (max-width: 767px) {
			#container{
				width: 80%
			}
			#main{
				width: 90%
			}
			.rmobile{
				width: 2%;
			}
			.rage{
				width: 2%;
			}
		}
		 
		/* Landscape phones and down */
		@media (max-width: 480px) { 
			#container{
				width: 80%
			}
			#main{
				width: 90%
			}
			.rmobile{
				background: #a901db none repeat scroll 0 0; border: medium solid #a901db; border-radius: 49%; color: #fff; padding: 7px 13px; width: 1%;
			}
			.rage{
				width: 1%;
			}
		}
		
		@media only screen 
		and (min-device-width: 768px) 
		and (max-device-width: 1024px) 
		and (-webkit-min-device-pixel-ratio: 1) {
			#container{
				width: 80%
			}
			#main{
				width: 90%
			}
			.rmobile{
				background: #a901db none repeat scroll 0 0; border: medium solid #a901db; border-radius: 49%; color: #fff; padding: 6px 12px; width: 2%;
			}
			.rage{
				width: 1%;
			}
			
		}
		
		
	</style>
	<script>
		
		$(document).ready(function(){
			$("#dob").datepicker({
				dateFormat:"dd-mm-yy",
				yearRange: '1920:2020',
				minDate: "01-01-1900",
				maxDate: new Date(),
				changeMonth: true,
				changeYear: true
			});
		});

		function calculate()
		{
			var dob = $("#dob").val();
			$.ajax({
			    type: "GET",
			    url: "calculateage.php?dateofbirth=" + dob,
			    dataType: "xml",
			    async   : false,
			    success: function(msg){
					var response = $(msg).find('response').text();
					// document.getElementById("divMessage").innerHTML = '<i>' + response + '</i>';
					$("#age").val(response);
					var error = /ERROR/;

					if (error.test(response) ) {
						$("#dob").val("");
					}
				}

			});
		}

		function showtext(value){
			var iam = document.frmfeedback.radios;
			var iamvalue = "";
			for(var i=0;i<iam.length;i++){
				if(iam[i].checked)
				{
					iamvalue = iam[i].value;
					if(iamvalue == "others")
					{
						$("#divother").css("display","block");
					}
					else{
						$("#divother").css("display","none");
					}
				}
			}
		}
		
		function showcurrent(value){
			// alert(value);
			var flag = parseInt($("#flag").val());
			// alert(flag+" "+value);
			if(value == "others")
			{
				
				if(flag == 0)
				{
					$("#flag").val(1);
					$("#divchkother").css("display","block");
				}
					
				if(flag == 1)
				{
					$("#flag").val(0);
					$("#divchkother").css("display","none");
				}
					
			}
			else{
				if(flag==0)
					$("#divchkother").css("display","none");
			}
			/*var iam = document.frmfeedback.chk;
			var iamvalue = "";
			for(var i=0;i<iam.length;i++){
				if(iam[i].checked)
				{
					iamvalue = iam[i].value;
					alert(iamvalue);
					/*if(iamvalue == "others")
					{
						$("#divother").css("display","block");
					}
					else{
						$("#divother").css("display","none");
					}
				}
			}*/
		}
		
		function onValidation()
		{
			var title = $("#title").val();
			var name = $("#name").val();
			var mobile = $("#mobile").val();
			var email = $("#email").val();
			var valid = true;
			var errorstr = "";
			if(name == "")
			{
				errorstr += "<div class='alert alert-danger'>Please select name!</div><BR/>";
				$('#divname').addClass('has-error');
				valid = false;
			}
			
			if(mobile == "")
			{
				errorstr += "<div class='alert alert-danger'>Please select mobile!</div><BR/>";
				$('#divmobile').addClass('has-error');
				valid = false;
			}
			
			if(email == "")
			{
				errorstr += "<div class='alert alert-danger'>Please select email!</div><BR/>";
				$('#divemail').addClass('has-error');
				valid = false;
			}
			
			if(!valid)
			{
				// $(".modal-body").html(errorstr);
				// $('#myModal').modal('toggle');
				alert(errorstr);
			}
			return valid;
			
		}
	</script>
<body>
	<nav id="ac-globalnav" class="navbar navbar-inverse navbar-fixed-top">
	</nav>
	<div id="main" class="content">
		<form name="frmfeedback" action="frmfeedback_db.php" method="post" onSubmit="return onValidation()"> 
			<div id="container" class="container-fluid">
				<h3>Feedback</h3>
				<div id="divname" class="control-group">
					<label class="control-label" for="inputInput"  style="font-weight:bold">Name</label>
					<div class="controls">
						<select style="background:#04B404; border-radius: 15px; width: 70px; font-weight:bold; color:#fff;" id="title" name="title">
							<option value="">Title</option>
							<option value="mr">Mr</option>
							<option value="mrs">Mrs</option>
						</select>
						<input type="hidden" id="locid" name="locid" value="<?php echo $_SESSION['location'];?>"/>
						<input type="hidden" id="username" name="username" value="<?php echo $_SESSION['user'];?>"/>
						
						<input type="text" id="name" name="name" placeholder="Name"  style="font-weight:bold">
					</div>
				</div>
				
				<div id="divmobile" class="control-group">
					<label class="control-label" for="inputInput" style="font-weight:bold">Mobile (Customer ID)</label>
					<div class="controls">
						<div class="input-prepend">
							<span class="add-on"><i class="icon-road"></i></span>
							<input type="text" id="mobile" name="mobile" maxlength="10" placeholder="Mobile">
						</div>
					</div>
				</div>
				
				<div id="divemail" class="control-group">
					<label class="control-label" for="inputInput" style="font-weight:bold">Mail ID</label>
					<div class="controls">
						<div class="input-prepend">
							<span class="add-on"><i class="icon-envelope"></i></span>
							<input type="text" id="email" name="email" placeholder="Email ID"  style="font-weight:bold;">
						</div>
					</div>
				</div>

				<div class="control-group">
					<label class="control-label" for="inputInput" style="font-weight:bold">Date of Birth</label>
					<div class="controls">
						<div class="input-prepend">
							<span class="add-on"><i class="icon-eye-open"></i></span>
							<input type="text" id="dob" name="dob" placeholder="Date of Birth" onChange="calculate()">
							<input type="text" id="age" name="age" style="margin-left:5%;" placeholder="Age">
						</div>
					</div>
				</div>
				
				<div class="control-group">
					<label class="control-label" for="inputInput" style="font-weight:bold">I am</label>
					<div class="controls">
						<input type="radio" id="radio1" name="radios" value="student" onClick="showtext(this.value)">
						<label for="radio1">Student</label>
						<input type="radio" id="radio2" name="radios" value="professional"  onClick="showtext(this.value)">
						<label for="radio2">Professional</label>
						<input type="radio" id="radio3" name="radios" value="corporate"  onClick="showtext(this.value)">
						<label for="radio3">Corporate</label>
						<input type="radio" id="radio4" name="radios" value="govtemployee"  onClick="showtext(this.value)">
						<label for="radio4">Govt. Employee</label>
						<input type="radio" id="radio5" name="radios" value="faculty"  onClick="showtext(this.value)">
						<label for="radio5">Teaching Faculty</label>
						<input type="radio" id="radio6" name="radios" value="others"  onClick="showtext(this.value)">
						<label for="radio6">Others</label>
						
					</div>	
				</div>
				<div id="divother" class="control-group" style="display:none;">
					<label class="control-label" for="inputInput" style="font-weight:bold">Others</label>
					<div class="controls">
						<input type="text" id="other" name="other" placeholder="Others">
					</div>
				</div>
				
				<div class="control-group">
					<label class="control-label" for="inputInput" style="font-weight:bold">I am interested in </label>
					<div class="controls">
						<input type="checkbox" id="chk5" name="interested[]" value="mac">
						<label for="chk5">Mac</label>
						<input type="checkbox" id="chk3" name="interested[]" value="iphone">
						<label for="chk3">iPhone</label>
						<input type="checkbox" id="chk2" name="interested[]" value="ipad">
						<label for="chk2">iPad</label>
						<input type="checkbox" id="chk1" name="interested[]" value="ipod">
						<label for="chk1">iPod</label>
						<input type="checkbox" id="chk4" name="interested[]" value="applewatch">
						<label for="chk4">Apple Watch</label>
						<input type="checkbox" id="chk6" name="interested[]" value="accessories">
						<label for="chk6">Accessories</label>
					</div>	
				</div>
				
				<div class="control-group">
					<label class="control-label" for="inputInput" style="font-weight:bold">I am currently using </label>
					<input type="hidden" id="flag" name="flag" value="0">
					<div class="controls">
						<input type="checkbox" id="current_chk5" name="chk[]" value="mac" onClick="showcurrent(this.value)">
						<label for="current_chk5">Mac</label>
						<input type="checkbox" id="current_chk3" name="chk[]" value="iphone" onClick="showcurrent(this.value)">
						<label for="current_chk3">iPhone</label>
						<input type="checkbox" id="current_chk2" name="chk[]" value="ipad" onClick="showcurrent(this.value)">
						<label for="current_chk2">iPad</label>
						<input type="checkbox" id="current_chk1" name="chk[]" value="ipod" onClick="showcurrent(this.value)">
						<label for="current_chk1">iPod</label>
						<input type="checkbox" id="current_chk4" name="chk[]" value="applewatch" onClick="showcurrent(this.value)">
						<label for="current_chk4">Apple Watch</label>
						<input type="checkbox" id="current_chk6" name="chk[]" value="accessories" onClick="showcurrent(this.value)">
						<label for="current_chk6">Accessories</label>
						<input type="checkbox" id="current_chk7" name="chk[]" value="others" onClick="showcurrent(this.value)">
						<label for="current_chk7">Others</label>
					</div>	
				</div>
				<div id="divchkother" class="control-group" style="display:none;">
					<label class="control-label" for="inputInput" style="font-weight:bold">Others</label>
					<div class="controls">
						<input type="text" id="chkother" name="chkother" placeholder="Others">
					</div>
				</div>
				
				
				<div class="control-group">
					<label class="control-label" for="inputInput" style="font-weight:bold">I would rate the sales professional as</label>
					<div class="controls">
						<input type="radio" id="sales_radio1" name="sales_radios" value="excellent">
						<label for="sales_radio1">Excellent</label>
						<input type="radio" id="sales_radio2" name="sales_radios" value="verygood">
						<label for="sales_radio2">Very Good</label>
						<input type="radio" id="sales_radio3" name="sales_radios" value="good">
						<label for="sales_radio3">Good</label>
						<input type="radio" id="sales_radio4" name="sales_radios" value="average">
						<label for="sales_radio4">Average</label>
						<input type="radio" id="sales_radio5" name="sales_radios" value="poor">
						<label for="sales_radio5">Poor</label>
					</div>	
				</div>
				
				<div class="control-group">
					<label class="control-label" for="inputInput" style="font-weight:bold">I would rate my overall customer experience as</label>
					<div class="controls">
						<input type="radio" id="customer_radio1" name="customer_radios" value="excellent">
						<label for="customer_radio1">Excellent</label>
						<input type="radio" id="customer_radio2" name="customer_radios" value="verygood">
						<label for="customer_radio2">Very Good</label>
						<input type="radio" id="customer_radio3" name="customer_radios" value="good">
						<label for="customer_radio3">Good</label>
						<input type="radio" id="customer_radio4" name="customer_radios" value="average">
						<label for="customer_radio4">Average</label>
						<input type="radio" id="customer_radio5" name="customer_radios" value="poor">
						<label for="customer_radio5">Poor</label>
					</div>	
				</div>
				
				<div class="control-group">
					<label class="control-label" for="inputInput" style="font-weight:bold">I got to you know by</label>
					<div class="controls">
						<select id="knowby" name="knowby">
						  <option value="">Select</option>
						  <option value="paper">Paper AD</option>
						  <option value="website">Apple Website</option>
						  <option value="electronic">Electronic Media</option>
						  <option value="mouth">Word of Mouth</option>
						  <option value="media">Social Media</option>
						</select>
					</div>
				</div>
				
				<div class="control-group">
					<label class="control-label" for="inputInput" style="font-weight:bold">I appreciate you for</label>
					<div class="controls">
						<textarea rows="4" id="appreciate" name="appreciate" style="width:80%"></textarea>
					</div>
				</div>
				
				<div class="control-group">
					<label class="control-label" for="inputInput" style="font-weight:bold">You can serve me better by</label>
					<div class="controls">
						<textarea rows="4" id="serve" name="serve" style="width:80%"></textarea>
					</div>
				</div>
				
				<div class="control-group"  align="center">
					<button type="submit" class="btn btn-primary" >Submit</button>
				</div>
			</div>
		</form>
		
	</div>
	<!--<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="top:15%;">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="myModalLabel">Error Message</h4>
					</div>
					<div class="modal-body">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</div>
			  
			</div>
		</div>-->
</body>
</html>