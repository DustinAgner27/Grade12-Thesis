<?php
	session_start();
	$con=mysqli_connect('localhost','root',"","erlss");
	if(mysqli_connect_errno()){
		echo"Failed to connect to mysql:".mysqli_connect_error;
	}
	else{
		$sql = "select * from registrar";			
		if (isset($_SESSION['adminuser'])){	
			$sql = "select * from registrar where email = '" . $_SESSION['adminuser'] . "'";
			$res = mysqli_query($con,$sql);
			$data = mysqli_fetch_array($res);

			$res2 = mysqli_query($con,"select * from requestslogs order by date desc");
			$logs = mysqli_fetch_array($res2);
		}
		else{
			header("location:adminl.php");
		}
	}	
	//$data = mysqli_fetch_array($res);	
	$sel = "select * from requests order by date asc";
	$res = mysqli_query($con, $sel);
	$sel3 = "select * from requests order by reqid asc";
	$res3 = mysqli_query($con, $sel3);
	/*$sal = "select * from students where stud_id = '" . $data['stud_id'] . "'";
	$ras = mysqli_query($con, $sal);
	$dete = mysqli_fetch_array($ras);*/

?>
<html>
	<head>
		<title>REQUEST</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
		<link href="template.css" rel="stylesheet">
	</head>
<body>

	<div class="container-fluid p-5 text-center bg-202225">
		<h1 style="margin-bottom: -7vh">REQUESTS</h1> 
		<div class="back">
		<?php
			echo '<form><input style="text-decoration: none; text-align: left; color: white; background-color: #2A2D33; border-color: #2A2D33;width: 2vw; height: 5vh;" type="button" value="<" onClick="javascript:history.go(-1)"></form>';
			?>
		</div>
	</div>
		
	<div class="fancy"><h3> OTHERS</h3></div>	
	<div class="consistent">
		<style>
			a{
				position:absolute;
				margin-left: -7.5vw;
				text-align: center;
				width: 15vw;
				color: white;
				text-decoration: none;
				font-size: 3vh;
			}
		</style>
		<form action="mainr.php">
			<input type="submit" value="REQUEST FORM" style="background-color: #2A2D33; border-color:#2A2D33; font-size: 2vh;"> 
		</form>
		<form action="calendar.php">
			<input type="submit" value="CALENDAR" style="background-color: #2A2D33; border-color:#2A2D33; font-size: 2vh;"> 
		</form>
		<form action="record.php">
			<input type="submit" value="STUDENT RECORD" style="background-color: #2A2D33; border-color:#2A2D33; font-size: 2vh;"> 
		</form>
		<form action="reportcard.php">
			<input type="submit" value="REPORT CARD" style="background-color: #2A2D33; border-color:#2A2D33; font-size: 2vh;"> 
		</form>
		<form action="tor.php">
			<input type="submit" value="TOR" style="background-color: #2A2D33; border-color:#2A2D33; font-size: 2vh;"> 
		</form>
		<form action="diploma.php">
			<input type="submit" value="DIPLOMA" style="background-color: #2A2D33; border-color:#2A2D33; font-size: 2vh;"> 
		</form>
		<form action="asr.php">
			<input type="submit" value="ASR" style="background-color: #2A2D33; border-color:#2A2D33; font-size: 2vh;"> 
		</form>
		<form action="logs.php">
			<input type="submit" value="LOGS" style="background-color: #2A2D33; border-color:#2A2D33; font-size: 2vh;"> 
		</form>
	</div> 
	<form action="out.php" class='logoutd'>
		<input class='logout' type="submit" value="LOG OUT"> 
	</form>
	
	
	<div class="container mt-5">
		<div class="row" style="border-left-style: solid;" >
			
				<style>
					a{
						display:inline-block;
					}
					.col-sm-3{
						border-right-style: solid;
					}
				</style>
					<?php 
						if($res3 != null){ 
							while($data = mysqli_fetch_array($res3)){
							echo "<div class='col-sm-3'>";
							echo  "<form action='request.php' method='get'><input type='hidden' name='id' value='" . $data['reqid'] . "'> <input type='submit' style='margin-bottom: 1vh;background-color: #2A2D33; border-color:#2A2D33;  box-shadow: 0 0px 5px 0.1px black; ' value= '" . $data['lname'] . ", " . $data['fname'][0] ." " . $data['mi'][0]  . ". | " . $data['reqid'] . "'>". "</form>";
							echo "</div>";
							}
						}
					?>
			</div>
		</div>
	</div>

	</body>
</html>