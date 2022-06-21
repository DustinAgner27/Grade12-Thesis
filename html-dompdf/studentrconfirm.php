<?php
session_start();
$con=mysqli_connect('localhost','root',"","erlss");
		if(mysqli_connect_errno()){
			echo"Failed to connect to mysql:".mysqli_connect_error;
		}
		else{
			echo $_POST['stud_id'];			
			$idcheck = "select * from students where stud_id = '" . $_POST['stud_id'] . "'";	
			$res = mysqli_query($con, $idcheck);
			$stud_id = $_POST['stud_id'];
			$lname = $_POST['lname'];
			$fname = $_POST['fname'];
			$mi = $_POST['mi'];
			$grd = $_POST['grd'];
			$email = $_POST['email'];
			$password = $_POST['password'];
			if(mysqli_num_rows($res) == 0){				
				$sql = "insert into students values('$stud_id','$lname','$fname','$mi','$grd','$email','$password');";
				mysqli_query($con, $sql);
				$_SESSION['user'] = $stud_id;
				header("location:mains.php");
			}
			else{
				$_SESSION['nreg'] = 1;		
				header("location:studentr.php");	
			}
		}
?>