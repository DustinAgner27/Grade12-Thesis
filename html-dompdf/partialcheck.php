<?php
session_start();
$con=mysqli_connect('localhost','root',"","erlss");
		if(mysqli_connect_errno()){
			echo"Failed to connect to mysql:".mysqli_connect_error;
		}
		else{	
			if(isset($_SESSION['adminuser'])){
				$reqid = $_POST['id'];	
				if(isset($_POST['form137'])){
					if($_POST['form137'] == 2){				
						mysqli_query($con, "update requests set form137 = '2' where reqid = '" . $reqid . "'");
					}
					else if($_POST['form137'] == 0){
						mysqli_query($con, "update requests set form137 = '1' where reqid = '" . $reqid . "'");
					}
				}
				if(isset($_POST['form138'])){
					if($_POST['form138'] == 2){
						mysqli_query($con, "update requests set form138 = '2' where reqid = '" . $reqid . "'");
					}
					else if($_POST['form138'] == 0){
						mysqli_query($con, "update requests set form138 = '1' where reqid = '" . $reqid . "'");
					}
				}	
				if(isset($_POST['diploma'])){
					if($_POST['diploma'] == 2){
						mysqli_query($con, "update requests set diploma = '2' where reqid = '" . $reqid . "'");
					}
					else if($_POST['diploma'] == 0){
						mysqli_query($con, "update requests set diploma = '1' where reqid = '" . $reqid . "'");
					}	
				}	
				if(isset($_POST['asr'])){
					if($_POST['asr'] == 2){
						mysqli_query($con, "update requests set asr = '2' where reqid = '" . $reqid . "'");
					}
					else if($_POST['asr'] == 0){
						echo $_POST['asr'];
						mysqli_query($con, "update requests set asr = '1' where reqid = '" . $reqid . "'");
					}
				}					
				
				header("location:mainr.php");	
			}
			else{
				header("location:adminl.php");	
			}			
		}
?>
