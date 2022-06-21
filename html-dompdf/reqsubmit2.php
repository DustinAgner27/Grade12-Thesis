<?php
require_once "vendor/autoload.php";
use Dompdf\Dompdf;
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
			$newid = $_SESSION['newid'];
            $date = $_SESSION['date'];
			$form137check = $_SESSION['form137check'];
			$form138check = $_SESSION['form138check'];
			$diplomacheck = $_SESSION['diplomacheck'];
			$asrcheck = $_SESSION['asrcheck'];
			$otherscheck = $_SESSION['otherscheck'];
			$others = $_SESSION['others'];
			$sexm = $_SESSION['sexm'];
			$sexf = $_SESSION['sexf'];
			$purpose = $_SESSION['purpose'];
			$batch = $_SESSION['batch'];
			$sig = $_SESSION['sig'];
			$number = $_SESSION['number'];
			$email = $_SESSION['email'];
			$lname = $data['lname'];
			$fname = $data['fname'];
			$mi = $data['mi'];				
				// instantiate and use the dompdf class
				$dompdf = new Dompdf();

				$html = "
				<!DOCTYPE html>
				<html lang='en'>
				<head>
					<meta charset='UTF-8'>
					<meta http-equiv='X-UA-Compatible' content='IE=edge'>
					<meta name='viewport' content='width=device-width, initial-scale=1.0'>
					<title>Documenasdsadt</title>
					<style>
					body {
						background-repeat: no-repeat;
						background-attachment: fixed;
						background-size: cover;
					}
					div {
						font-family: Arial,serif;
						text-align: center;
						font-size: 50px;
					}
					.container{
						background-image: url('Student-Record-Request-Form.jpg');
						background-repeat: no-repeat;
						background-attachment: fixed;
						background-size: cover;
						margin-top: 10px;
						margin-left: -17px;
						width: 2250px;
						height: 3100px;
					}
					</style>
				</head>

				<body>
					<div class='container'>
						<div class='campus' style='position:absolute;left:1050px;top:160px;'>
							<span>Eastern Visayas</span>
						</div>
						<div class='date' style='position:absolute;left:300px;top:435px;width:550px;height:80px;overflow:hidden;'>
							<span>$date</span>
						</div>
						<div class='form137' style='position:absolute;left:385px;top:800px;width:100px;height:70px;font-size:80px;'>
							<span>$form137check</span>
						</div>
						<div class='form138' style='position:absolute;left:385px;top:880px;width:100px;height:70px;font-size:80px;'>
							<span>$form138check</span>
						</div>
						<div class='diploma' style='position:absolute;left:385px;top:960px;width:100px;height:70px;font-size:80px;'>
							<span>$diplomacheck</span>
						</div>
						<div class='asr' style='position:absolute;left:385px;top:1050px;width:100px;height:70px;font-size:80px;'>
							<span>$asrcheck</span>
						</div>
						<div class='others' style='position:absolute;left:385px;top:1130px;width:100px;height:70px;font-size:80px;'>
							<span>$otherscheck</span>
						</div>
						<div class='othersspecify' style='position:absolute;left:1080px;top:1140px;width:630px;height:70px;overflow:hidden;'>
							<span>$others</span>
						</div>
						<div class='purpose' style='position:absolute;left:290px;top:1265px;width:1800px;height:170px;overflow:hidden;text-align:left;word-wrap: break-word;'>
							<span>$purpose</span>
						</div>
						<div class='requester' style='position:absolute;left:380px;top:1440px;width:1080px;height:90px;overflow:hidden;'>
							<span><img src = $sig style='height: 90px; width: auto'></span>
						</div>
						<div class='requester' style='position:absolute;left:380px;top:1490px;width:1080px;height:70px;overflow:hidden;'>
							<span>$fname $lname</span>
						</div>
						<div class='batch' style='position:absolute;left:1720px;top:1490px;width:310px;height:70px;overflow:hidden;'>
							<span>$batch</span>
						</div>
						<div class='contactno' style='position:absolute;left:430px;top:1670px;width:570px;height:70px;overflow:hidden;'>
							<span>$number</span>
						</div>
						<div class='email' style='position:absolute;left:400px;top:1810px;width:600px;height:70px;overflow:hidden;font-size:35px;'>
							<span>$email</span>
						</div>
						<div class='sexf' style='position:absolute;left:1365px;top:1660px;width:100px;height:70px;font-size:80px;'>
							<span>$sexf</span>
						</div>
						<div class='sexm' style='position:absolute;left:1365px;top:1725px;width:100px;height:70px;font-size:80px;'>
							<span>$sexm</span>
						</div>
					</div>
				</body>
				</html>
				";

				$dompdf ->loadHtml($html);

				$dompdf ->set_option('dpi','300');

				// (optional) setup the paper size and orientation 
				$dompdf ->setPaper('A4', 'portrait');

				// Render the HTML as PDF 
				$dompdf ->render();
				$filname = "reqforms/reqform" . $newid . ".pdf";
				// output the generated PDF to Browser 

				$output = $dompdf->output();
				file_put_contents($filname, $output);
				//$dompdf->stream($filname);

				header("location:mains.php");
		}
?>
