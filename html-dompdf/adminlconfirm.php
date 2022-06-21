<?php
session_start();
$con=mysqli_connect('localhost','root',"","erlss");
		if(mysqli_connect_errno()){
			echo"Failed to connect to mysql:".mysqli_connect_error;
		}
		else{		
			$existingcheck = "select * from registrar where username = '" . $_POST['username'] . "' AND password = '" . $_POST['password'] . "'";	
			$res = mysqli_query($con, $existingcheck);
			$username = $_POST['username'];
			$password = $_POST['password'];
			if(mysqli_num_rows($res) == 0){	
				$_SESSION['nlogin'] = 1;		
				header("location:adminl.php");	
			}
			else{
				$_SESSION['adminuser'] = mysqli_fetch_array($res)['email'];
				unset($_SESSION['user']);
				header("location:mainr.php");
			}
		}
?>
