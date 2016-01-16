<?php 
	session_unset();
	include_once("header.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Forgot Password</title>
         <link rel="icon" type="image/png" href="images/logo.png"/>
		<!-- Bootstrap -->
		<link href="bootstrapForAdminLogIn/css/bootstrap.css" rel="stylesheet">
		 <link href="bootstrapForAdminLogIn/css/bootstrap.min.css" rel="stylesheet">
		  <link href="bootstrapForAdminLogIn/css/bootstrap-theme.css" rel="stylesheet">
		   <link href="bootstrapForAdminLogIn/css/bootstrap-theme.min.css" rel="stylesheet">
		  <link href="bootstrapForAdminLogIn/css/bootstrap-theme.css.map" rel="stylesheet">
		  <link href="bootstrapForAdminLogIn/css/bootstrap.css.map" rel="stylesheet">
		   <link href="bootstrapForAdminLogIn/css/sandip.css" rel="stylesheet">
		   <link href="bootstrapForAdminLogIn/css/styles.css" rel="stylesheet">
		  
		  
		<!--<script src="bootstrapForAdminLogIn/js/bootstrap.js"></script>
		<script src="bootstrapForAdminLogIn/js/bootstrap.min.js"></script>
		<script src="bootstrapForAdminLogIn/js/npm.js"></script>-->
		
		<script src="asset/js/jquery.min.js"></script>
		<script src="asset/js/jquery-ui.min.js"></script>
		<script src="asset/js/bootstrap.min.js"></script>
		<script src="asset/js/bootstrap-datepicker.js"></script>
		<script src="asset/js/auto.js"></script>
		<script src="datatables/js/jquery.dataTables.js"></script>
		
		<script>
	$(document).ready(function() {
		$( "#mailid" ).blur(function() {
			$.ajax({
				type: 'post',
				url: 'frmEmailAvailable.php?mailid='+ $("#mailid").val()+"&location="+$("#location").val(),
				success:function(data){
					
					if(data=="true"){
						$("#updatePassword").css("display","block");
						$("#mailid").css("border","1px solid #4cae4c");
					}
					else{
						$("#mailid").css("border","1px solid #c7254e");
						$("#mailid").css("box-shadow","0 1px 1px rgba(0, 0, 0, 0.075) inset");
						$("#updatePassword").css("display","none");
					}
					
				}
			});
		});
	});
		</script>
  
  </head>
  <body>
  <div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <!--<h1 class="text-center login-title">Admin Login</h1>-->
            <div class="account-wall">
                <img src="images/iplanet.jpg" alt="..." class="profile-img" class="img-circle">
                <form class="form-signin" method="post" action="forgotpassword_db.php">
                <p>
					<select id="location" name="location" class="form-control">
									<?php 
										
										$query = $dbh->query("select * from fb_location");
										$result = $query->fetchAll();
										foreach($result as $row)
										{
											echo "<option value=".$row['LOCID'].">".$row['LOCNAME']."</option>";
										}
									?>
								</select>
				</p>
				<p><input type="text" class="form-control" name="mailid" id="mailid" placeholder="Mail ID" required autofocus></p>
                
                <button class="btn btn-lg btn-primary btn-block" id="updatePassword" style="display:none;" type="submit"> Reset Password</button>
					
               
                </form>
            </div>
           
        </div>
    </div>
</div>
  </body>
</html>

