<?php 
		include('header.php');
        $user_email=$_POST['inputEmail3'];
		$user_pwd=$_POST['inputPassword3'];
		session_start();
		if($user_email!="" && $user_pwd!="")
		{
			$sql="SELECT * FROM `fb_userdetails` WHERE `username`='".$_POST['inputEmail3']."' AND `password`=md5('".$_POST['inputPassword3']."') and disable='N'";
			
			$query = $dbh->query($sql);
			$result = $query->fetchAll();
			if(count($result)>0)
			{
				$role = '';
				foreach($result as $r)
				{
					$_SESSION['user']=$r['username'];
					$_SESSION['location']=$r['location'];
					$_SESSION['role'] = $r['role'];
					$role = $r['role'];
					$change = $r['changepassword'];
				}
				if($role == 'admin')
					header('location:homepage.php');
				else
				{
					if($change == 'Y')
					{
						header('location:change_password.php');
					}
					else
					{
						header('location:index.php');
					}
				}
					
			}
			else
			{
				header('location:login.php');
				exit;
			}
		}
?>