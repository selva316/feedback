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
	</script>
<body>
	<nav id="ac-globalnav" class="navbar navbar-inverse navbar-fixed-top">
	</nav>
	<div id="main" class="content">
		<div id="container" class="container-fluid">
			<h3>Feedback</h3>
			<div class="control-group">
				<label class="control-label" for="inputInput"  style="font-weight:bold">Name</label>
				<div class="controls">
					<select style="background:#04B404; border-radius: 15px; width: 70px; font-weight:bold; color:#fff; ">
						<option value="">Title</option>
						<option value="mr">Mr</option>
						<option value="mrs">Mrs</option>
					</select>
					<input type="text" id="name" name="name" placeholder="Name"  style="font-weight:bold">
				</div>
			</div>
			
			<div class="control-group">
				<label class="control-label" for="inputInput" style="font-weight:bold">Mobile (Customer ID)</label>
				<div class="controls">
					<div class="input-prepend">
						<span class="add-on"><i class="icon-road"></i></span>
						<input type="text" id="mobile" name="mobile" maxlength="10" placeholder="Mobile">
					</div>
				</div>
			</div>
			
			<div class="control-group">
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
						<input type="text" id="dob" name="dob" placeholder="Date of Birth">
					</div>
				</div>
			</div>
			
			<div class="control-group">
				<label class="control-label" for="inputInput" style="font-weight:bold">I am</label>
				<div class="controls">
					<input type="radio" id="radio1" name="radios" value="all" checked>
					<label for="radio1">Student</label>
					<input type="radio" id="radio2" name="radios"value="false">
					<label for="radio2">Professional</label>
					<input type="radio" id="radio3" name="radios" value="true">
					<label for="radio3">Corporate</label>
					<input type="radio" id="radio4" name="radios" value="true">
					<label for="radio4">Govt. Employee</label>
					<input type="radio" id="radio5" name="radios" value="true">
					<label for="radio5">Teaching Faculty</label>
					<input type="radio" id="radio6" name="radios" value="true">
					<label for="radio6">None of these</label>
				</div>	
			</div>
			
			<div class="control-group">
				<label class="control-label" for="inputInput" style="font-weight:bold">I am interested in </label>
				<div class="controls">
					<input type="checkbox" id="chk5" name="chk" value="true" checked>
					<label for="chk5">Mac</label>
					<input type="checkbox" id="chk3" name="chk" value="true">
					<label for="chk3">iPhone</label>
					<input type="checkbox" id="chk2" name="chk"value="false">
					<label for="chk2">iPad</label>
					<input type="checkbox" id="chk1" name="chk" value="all">
					<label for="chk1">iPod</label>
					<input type="checkbox" id="chk4" name="chk" value="true">
					<label for="chk4">Apple Watch</label>
					<input type="checkbox" id="chk6" name="chk" value="true">
					<label for="chk6">Accessories</label>
				</div>	
			</div>
			
			<div class="control-group">
				<label class="control-label" for="inputInput" style="font-weight:bold">I am currently using </label>
				<div class="controls">
					<input type="checkbox" id="current_chk5" name="chk" value="true" checked>
					<label for="current_chk5">Mac</label>
					<input type="checkbox" id="current_chk3" name="chk" value="true">
					<label for="current_chk3">iPhone</label>
					<input type="checkbox" id="current_chk2" name="chk"value="false">
					<label for="current_chk2">iPad</label>
					<input type="checkbox" id="current_chk1" name="current_chk" value="all">
					<label for="current_chk1">iPod</label>
					<input type="checkbox" id="current_chk4" name="chk" value="true">
					<label for="current_chk4">Apple Watch</label>
					<input type="checkbox" id="current_chk6" name="chk" value="true">
					<label for="current_chk6">Accessories</label>
				</div>	
			</div>
			
			<div class="control-group">
				<label class="control-label" for="inputInput" style="font-weight:bold">I would rate the sales professional as</label>
				<div class="controls">
					<input type="radio" id="sales_radio1" name="sales_radios" value="all" checked>
					<label for="sales_radio1">Excellent</label>
					<input type="radio" id="sales_radio2" name="sales_radios"value="false">
					<label for="sales_radio2">Very Good</label>
					<input type="radio" id="sales_radio3" name="sales_radios" value="true">
					<label for="sales_radio3">Good</label>
					<input type="radio" id="sales_radio4" name="sales_radios" value="true">
					<label for="sales_radio4">Average</label>
					<input type="radio" id="sales_radio5" name="sales_radios" value="true">
					<label for="sales_radio5">Poor</label>
				</div>	
			</div>
			
			<div class="control-group">
				<label class="control-label" for="inputInput" style="font-weight:bold">I would rate my overall customer experience as</label>
				<div class="controls">
					<input type="radio" id="customer_radio1" name="customer_radios" value="all" checked>
					<label for="customer_radio1">Excellent</label>
					<input type="radio" id="customer_radio2" name="customer_radios"value="false">
					<label for="customer_radio2">Very Good</label>
					<input type="radio" id="customer_radio3" name="customer_radios" value="true">
					<label for="customer_radio3">Good</label>
					<input type="radio" id="customer_radio4" name="customer_radios" value="true">
					<label for="customer_radio4">Average</label>
					<input type="radio" id="customer_radio5" name="customer_radios" value="true">
					<label for="customer_radio5">Poor</label>
				</div>	
			</div>
			
			<div class="control-group">
				<label class="control-label" for="inputInput" style="font-weight:bold">I got to you know by</label>
				<div class="controls">
					<select>
					  <option>Paper AD</option>
					  <option>Apple Website</option>
					  <option>Electronic Media</option>
					  <option>Word of Mouth</option>
					  <option>Social Media</option>
					</select>
				</div>
			</div>
			
			<div class="control-group">
				<label class="control-label" for="inputInput" style="font-weight:bold">I appreciate you for</label>
				<div class="controls">
					<textarea rows="4" style="width:80%"></textarea>
				</div>
			</div>
			
			<div class="control-group">
				<label class="control-label" for="inputInput" style="font-weight:bold">You can serve me better by</label>
				<div class="controls">
					<textarea rows="4" style="width:80%"></textarea>
				</div>
			</div>
			
			<div class="control-group"  align="center">
				<button type="submit" class="btn btn-primary" >Submit</button>
			</div>
		</div>
	</div>
</body>
</html>