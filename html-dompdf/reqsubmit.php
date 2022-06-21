<?php
session_start();
$con=mysqli_connect('localhost','root',"","erlss");
		if(mysqli_connect_errno()){
			echo"Failed to connect to mysql:".mysqli_connect_error;
		}
		else{	
			$stud_id = $_SESSION['user'];
			$sql = "select * from students where stud_id = '" . $stud_id . "'";
			$res = mysqli_query($con,$sql);
			$data = mysqli_fetch_array($res);

			$last = "select * from requests ORDER BY reqid DESC LIMIT 1";
			$res2 = mysqli_query($con,$last);

            $date = $_POST['date'];
            $_SESSION['date'] = $date;
			if(isset($_POST['form137'])){
				$form137 = $_POST['form137'];
				$form137check = "/";
				$_SESSION['form137check'] = $form137check;
			}
			else{
				$form137 = 0;
				$form137check = "";
				$_SESSION['form137check'] = $form137check;
			}
			if(isset($_POST['form138'])){
				$form138 = $_POST['form138'];
				$form138check = "/";
				$_SESSION['form138check'] = $form138check;
			}
			else{
				$form138 = 0;
				$form138check = "";
				$_SESSION['form138check'] = $form138check;
			}
			if(isset($_POST['diploma'])){
				$diploma = $_POST['diploma'];
				$diplomacheck = "/";
				$_SESSION['diplomacheck'] = $diplomacheck;
			}
			else{
				$diploma = 0;
				$diplomacheck = "";
				$_SESSION['diplomacheck'] = $diplomacheck;
			}
			if(isset($_POST['asr'])){
				$asr = $_POST['asr'];
				$asrcheck = "/";
				$_SESSION['asrcheck'] = $asrcheck;
			}
			else{
				$asr = 0;
				$asrcheck = "";
				$_SESSION['asrcheck'] = $asrcheck;
			}
			if($_POST['others'] != ""){
				$others = $_POST['others'];
				$_SESSION['others'] = $others;
				$otherscheck = "/";
				$_SESSION['otherscheck'] = $otherscheck;
			}
			else{
				$others = "";
				$_SESSION['others'] = $others;
				$otherscheck = "";
				$_SESSION['otherscheck'] = $otherscheck;
			}
			if($_POST['sex'] === "Male"){
				$sexm  = "/";
				$sexf = "";
			}
			else{
				$sexm  = "";
				$sexf = "/";
			}
			$_SESSION['sexm'] = $sexm;
			$_SESSION['sexf'] = $sexf;
			$purpose = $_POST['purpose'];
			$_SESSION['purpose'] = $purpose;
			$batch = $_POST['batch'];
			$_SESSION['batch'] = $batch;
			$number = $_POST['num'];
			$_SESSION['number'] = $number;
			$email = $_POST['email'];
			$_SESSION['email'] = $email;
			$sex = $_POST['sex'];
			$lname = $data['lname'];
			$_SESSION['lname'] = $lname;
			$fname = $data['fname'];
			$_SESSION['fname'] = $fname;
			$mi = $data['mi'];
			$_SESSION['mi'] = $mi;

			$newid = mysqli_fetch_array($res2)['reqid'] + 1;
			
			$fileName = $_FILES['sig']['name'];
			$fileNameCmps = explode(".", $fileName);
			$fileExtension = strtolower(end($fileNameCmps));
			$filepat = "reqforms/sig/sig" . $newid . "." . $fileExtension;
			$_SESSION['sig'] = $filepat;
			$sig = $filepat;
			if(move_uploaded_file($_FILES['sig']['tmp_name'], $filepat)){                   
            }
            else{
                echo "Problem uploading file";
            }

            if(empty($_FILES['proof'])){}
            else{
            	$fileName = $_FILES['proof']['name'];
				$fileNameCmps = explode(".", $fileName);
				$fileExtension = strtolower(end($fileNameCmps));
				$filepat = "payments/pay" . $newid . "." . $fileExtension;
				if(move_uploaded_file($_FILES['proof']['tmp_name'], $filepat)){
					mysqli_query($con, "insert into payments values('$newid','$stud_id','$filepat')");                  
	            }
	            else{
	                echo "Problem uploading file";
	            }
            }
			$_SESSION['newid'] = $newid;
			if(mysqli_num_rows($res) == 1){				
				$sql = "insert into requests values('$newid','$stud_id','$lname','$fname','$mi','$date','$form137','$form138','$diploma','$asr','$others', '$purpose', '$batch', '$sig', '$number', '$email', '$sex');";
				mysqli_query($con, $sql); 
					
				header("location:reqsubmit2.php");
			}
			else{
				header("location:adminl.php");	
			}
		}
