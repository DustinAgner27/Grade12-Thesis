<?php
session_start();
$con=mysqli_connect('localhost','root',"","erlss");
		if(mysqli_connect_errno()){
			echo"Failed to connect to mysql:".mysqli_connect_error;
		}
		else{		
			$existingcheck = "select * from students where stud_id = '" . $_POST['stud_id'] . "' AND password = '" . $_POST['password'] . "'";
			$res = mysqli_query($con, $existingcheck);
			$stud_id = $_POST['stud_id'];
			$password = $_POST['password'];
			if(mysqli_num_rows($res) == 0){	
				$_SESSION['nlogin'] = 1;		
				header("location:adminl.php");	
			}
			else{
				$_SESSION['user'] = $_POST['stud_id'];
				$_SESSION['emailUser'] = $_POST['email'];
				unset($_SESSION['adminuser']);
				header("location:mains.php");
			}
		}
?>