<?php 
	session_start();
	include_once("header.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Change Password</title>
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
		$( "#oldpassword" ).blur(function() {
			$.ajax({
				type: 'post',
				url: 'frmOldPasswordAvailable.php',
				data: {'oldpassword':$("#oldpassword").val(), 'locid':$("#locid").val(), 'username':$("#username").val()},
				type: "POST",
				success:function(data){
					
					if(data=="true"){
						$("#newpassword").css("display","block");
						$("#confirmpassword").css("display","block");
						
						$("#oldpassword").css("border","1px solid #4cae4c");
					}
					else{
						$("#oldpassword").css("border","1px solid #c7254e");
						$("#oldpassword").css("box-shadow","0 1px 1px rgba(0, 0, 0, 0.075) inset");
						
						$("#newpassword").css("display","none");
						$("#confirmpassword").css("display","none");
					}
					
				}
			});
		});
		
		$( "#confirmpassword" ).blur(function() {
			var newpass = $("#newpassword").val();
			var cmpass = $("#confirmpassword").val();
			if(newpass != '' && cmpass != '')
			{
				if(newpass == cmpass)
				{
					$("#updatePassword").css("display","block");
					
					$("#newpassword").css("border","1px solid #4cae4c");
					$("#confirmpassword").css("border","1px solid #4cae4c");
				}
				else{
					$("#updatePassword").css("display","none");
					$("#newpassword").css("border","1px solid #c7254e");
					$("#confirmpassword").css("border","1px solid #c7254e");
				}
			}
			else{
				$("#updatePassword").css("display","none");
				$("#newpassword").css("border","1px solid #c7254e");
				$("#confirmpassword").css("border","1px solid #c7254e");
			}
		});
		
		$( "#newpassword" ).blur(function() {
			var newpass = $("#newpassword").val();
			var cmpass = $("#confirmpassword").val();
			if(newpass != '' && cmpass != '')
			{
				if(newpass == cmpass)
				{
					$("#updatePassword").css("display","block");
					
					$("#newpassword").css("border","1px solid #4cae4c");
					$("#confirmpassword").css("border","1px solid #4cae4c");
				}
				else{
					$("#updatePassword").css("display","none");
					$("#newpassword").css("border","1px solid #c7254e");
					$("#confirmpassword").css("border","1px solid #c7254e");
				}
			}
			else{
				$("#updatePassword").css("display","none");
				$("#newpassword").css("border","1px solid #c7254e");
				$("#confirmpassword").css("border","1px solid #c7254e");
			}
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
                <div style="text-align:center;"><h1>Change Password</h1></div>
                <form class="form-signin" method="post" action="changepassword_db.php">
				<input type="hidden" id="locid" name="locid" value="<?php echo $_SESSION['location'];?>"/>
				<input type="hidden" id="username" name="username" value="<?php echo $_SESSION['user'];?>"/>
                
				<p><input type="text" class="form-control" name="oldpassword" id="oldpassword" placeholder="Old Password" required autofocus value=""></p>
                <p><input type="text" class="form-control" style="display:none;" name="newpassword" id="newpassword" placeholder="New Password" value=""></p>
				<p><input type="text" class="form-control" style="display:none;" name="confirmpassword" id="confirmpassword" placeholder="Confirm Password" value=""></p>
                <button class="btn btn-lg btn-primary btn-block" id="updatePassword" style="display:none;" type="submit"> Change Password</button>
					
               
                </form>
            </div>
           
        </div>
    </div>
</div>
  </body>
</html>

