<?php
session_start();
$con=mysqli_connect('localhost','root',"","erlss");
		if(mysqli_connect_errno()){
			echo"Failed to connect to mysql:".mysqli_connect_error;
		}
		else{		
			$idcheck = "select * from registrar where lname = '" . $_POST['lname'] . "'";	
			$res = mysqli_query($con, $idcheck);
			$lname = $_POST['lname'];
			$fname = $_POST['fname'];
			$email = $_POST['email'];
			$username = $_POST['username'];
			$password = $_POST['password'];
			if(mysqli_num_rows($res) == 0){				
				$sql = "insert into registrar values('$lname','$fname','$email','$username','$password');";
				mysqli_query($con, $sql);
				$_SESSION['user'] = $fname . " " . $lname;
				header("location:mainr.php");
			}
			else{
				$_SESSION['nreg'] = 1;		
				header("location:adminr.php");	
			}
		}
?>
