<?php
session_start();
$con=mysqli_connect('localhost','root',"","erlss");
		if(mysqli_connect_errno()){
			echo"Failed to connect to mysql:".mysqli_connect_error;
		}
		else{	
			if(isset($_SESSION['adminuser'])){
				
				$sql = "select * from requests where reqid = '" . $_GET['id'] . "'";
				$res = mysqli_query($con,$sql);
				$data = mysqli_fetch_array($res);

				$datefin = date("Y-m-d");
				$reqid = $data['reqid'];
				$stud_id = $data['stud_id'];
				$lname = $data['lname'];
				$fname = $data['fname'];
				$mi = $data['mi'];
				$date = $data['date'];
				$form137 = $data['form137'];
				$form138 = $data['form138'];
				$diploma = $data['diploma'];
				$asr = $data['asr'];
				$others = $data['others']; 
				$purpose = $data['purpose'];
				$batch = $data['purpose'];
				$sig = $data['sig'];
				$num = $data['number'];
				$email = $data['email'];
				$sex = $data['sex'];
				$ins = "insert into requestslogs values('$datefin', '$reqid', '$stud_id', '$lname', '$fname', '$mi', '$date', '$form137', '$form138', '$diploma', '$asr', '$others', '$purpose', '$batch', '$sig', '$num', '$email', '$sex')";
				mysqli_query($con,$ins);
				$sql = "delete from requests where reqid = '" . $reqid . "'";
				mysqli_query($con,$sql);
				header("location:mainr.php");	
			}
			else{
				header("location:adminl.php");	
			}
		}
?>
