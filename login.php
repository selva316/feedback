<?php 
	session_unset();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Log IN</title>
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
		  
		  
		<script src="bootstrapForAdminLogIn/js/bootstrap.js"></script>
		<script src="bootstrapForAdminLogIn/js/bootstrap.min.js"></script>
		<script src="bootstrapForAdminLogIn/js/npm.js"></script>

  
  </head>
  <body>
  <div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <!--<h1 class="text-center login-title">Admin Login</h1>-->
            <div class="account-wall">
               <!-- <img class="profile-img" src="images/alog.png" alt=""/> --><img src="images/iplanet.jpg" alt="..." class="profile-img" class="img-circle">
                <form class="form-signin" method="post" action="login_db.php">
                <p><input type="text" class="form-control" name="inputEmail3"placeholder="User Name" required autofocus></p>
                <p><input type="password" class="form-control" name="inputPassword3"placeholder="Password" required></p>
                <button class="btn btn-lg btn-primary btn-block" type="submit"> Sign in</button>
					<a href="forgot_password.php">Forgot Password</a>
               
                </form>
            </div>
           
        </div>
    </div>
</div>
  </body>
</html>

