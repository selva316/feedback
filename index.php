<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Product Feedack</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="assets/css/bootstrap.css" rel="stylesheet">
		<link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
		<link rel="stylesheet" href="css/global.css">
		<script src="js/jQuery.js"></script>
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
		}
     
		/* Portrait tablet to landscape and desktop */
		@media (min-width: 768px) and (max-width: 979px) {
			#container{
				width: 80%
			}
			#main{
				width: 90%
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
			#mobile0{
				width:2%;
				padding: 6px 12px;
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
		}
		
		
		.rmobile{
			background: #a901db none repeat scroll 0 0; border: medium solid #a901db; border-radius: 49%; color: #fff; padding: 7px 13px; width: 1%;
		}
	</style>
	<script>
		$(document).ready(function(){
			$("#mobile0").on("input",function(){
				if($("#mobile0").val().replace(/ /g,'').length == 1)
				{
					$("#mobile1").focus();
				}
			});
			
			$("#mobile1").on("input",function(){
				if($("#mobile1").val().replace(/ /g,'').length == 1)
				{
					$("#mobile2").focus();
				}
			});
			
			$("#mobile2").on("input",function(){
				if($("#mobile2").val().replace(/ /g,'').length == 1)
				{
					$("#mobile3").focus();
				}
			});
			
			$("#mobile3").on("input",function(){
				if($("#mobile3").val().replace(/ /g,'').length == 1)
				{
					$("#mobile4").focus();
				}
			});
			
			$("#mobile4").on("input",function(){
				if($("#mobile4").val().replace(/ /g,'').length == 1)
				{
					$("#mobile5").focus();
				}
			});
			
			$("#mobile5").on("input",function(){
				if($("#mobile5").val().replace(/ /g,'').length == 1)
				{
					$("#mobile6").focus();
				}
			});
			
			$("#mobile6").on("input",function(){
				if($("#mobile6").val().replace(/ /g,'').length == 1)
				{
					$("#mobile7").focus();
				}
			});
			
			$("#mobile7").on("input",function(){
				if($("#mobile7").val().replace(/ /g,'').length == 1)
				{
					$("#mobile8").focus();
				}
			});
			
			$("#mobile8").on("input",function(){
				if($("#mobile8").val().replace(/ /g,'').length == 1)
				{
					$("#mobile9").focus();
				}
			});
			
			$("#age0").on("input",function(){
				if($("#age0").val().replace(/ /g,'').length == 1)
				{
					$("#age1").focus();
				}
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
					<input type="text" id="mobile0" class="rmobile" maxlength="1" style="background: #a901db none repeat scroll 0 0; border: medium solid #a901db; border-radius: 49%; color: #fff; padding: 7px 13px; width: 1%;">
					<input type="text" id="mobile1" class="rmobile" maxlength="1" style="background: #a901db none repeat scroll 0 0; border: medium solid #a901db; border-radius: 49%; color: #fff; padding: 7px 13px; width: 1%;">
					<input type="text" id="mobile2" class="rmobile" maxlength="1" style="background: #a901db none repeat scroll 0 0; border: medium solid #a901db; border-radius: 49%; color: #fff; padding: 7px 13px; width: 1%;">
					<input type="text" id="mobile3" class="rmobile" maxlength="1" style="background: #a901db none repeat scroll 0 0; border: medium solid #a901db; border-radius: 49%; color: #fff; padding: 7px 13px; width: 1%;">
					<input type="text" id="mobile4" class="rmobile" maxlength="1" style="background: #a901db none repeat scroll 0 0; border: medium solid #a901db; border-radius: 49%; color: #fff; padding: 7px 13px; width: 1%;">
					<input type="text" id="mobile5" class="rmobile" maxlength="1" style="background: #a901db none repeat scroll 0 0; border: medium solid #a901db; border-radius: 49%; color: #fff; padding: 7px 13px; width: 1%;">
					<input type="text" id="mobile6" class="rmobile" maxlength="1" style="background: #a901db none repeat scroll 0 0; border: medium solid #a901db; border-radius: 49%; color: #fff; padding: 7px 13px; width: 1%;">
					<input type="text" id="mobile7" class="rmobile" maxlength="1" style="background: #a901db none repeat scroll 0 0; border: medium solid #a901db; border-radius: 49%; color: #fff; padding: 7px 13px; width: 1%;">
					<input type="text" id="mobile8" class="rmobile" maxlength="1" style="background: #a901db none repeat scroll 0 0; border: medium solid #a901db; border-radius: 49%; color: #fff; padding: 7px 13px; width: 1%;">
					<input type="text" id="mobile9" class="rmobile" maxlength="1" style="background: #a901db none repeat scroll 0 0; border: medium solid #a901db; border-radius: 49%; color: #fff; padding: 7px 13px; width: 1%;">
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
				<label class="control-label" for="inputInput" style="font-weight:bold">Age</label>
				<div class="controls">
					
					<input type="text" id="age0" maxlength="1" style="background: #FF9000 none repeat scroll 0 0; border: medium solid #FF9000; border-radius: 49%; color: #fff; padding: 7px 13px; width: 1%;">
					<input type="text" id="age1" maxlength="1" style="background: #FF9000 none repeat scroll 0 0; border: medium solid #FF9000; border-radius: 49%; color: #fff; padding: 7px 13px; width: 1%;">
				</div>
			</div>
			<!--
			<div class="col-sm-9">
				<div class="btn-group" data-toggle="buttons">
					<label class="btn btn-default">
						<input type="radio" id="q156" name="quality[25]" value="1" /> 1
					</label>
					<label class="btn btn-default">
						<input type="radio" id="q156" name="quality[25]" value="1" /> 2
					</label>
					<label class="btn btn-default">
						<input type="radio" id="q156" name="quality[25]" value="1" /> 3
					</label>
					<label class="btn btn-default">
						<input type="radio" id="q156" name="quality[25]" value="1" /> 4
					</label>
				</div>
			</div>-->
		</div>
	</div>
</body>
</html>