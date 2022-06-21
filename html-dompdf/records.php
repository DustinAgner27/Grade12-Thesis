<?php
	session_start();
	$con=mysqli_connect('localhost','root',"","erlss");
	if(mysqli_connect_errno()){
		echo"Failed to connect to mysql:".mysqli_connect_error;
	}
	else{
		$_SESSION['from'] = "record"; 
		$sql = "select * from registrar";			
		if (isset($_SESSION['adminuser'])){	
			if(isset($_POST['stud_id'])){
				$stud_id = $_POST['stud_id'];
				$dup = mysqli_query($con, "select * from studrec where stud_id = '" . $stud_id . "'");		
			}
			else{
				header("location:record.php");
			}
		}
		else{
			header("location:adminl.php");
		}
	}	
?>
<html>
<head>
	<title> INFO SHEET</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
	<link href="template.css" rel="stylesheet">
	<meta http-Equiv="Cache-Control" Content="no-cache" />
	<meta http-Equiv="Pragma" Content="no-cache" />
	<meta http-Equiv="Expires" Content="0" />
</head>
<body onload="document.getElementById('iFrame').contentDocument.location.reload(true); return false;">

<div class="container-fluid p-5 text-center bg-202225">
<h1 style="margin-bottom: -7vh"> <?php echo $_POST['name'] ?>'s INFORMATION SHEET </h1>
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
<form >
<div class="container mt-5">
    <div class="row justify-content-center">
		<div class="col">
		<?php 
			$filepat = "infosheets/infosheet" . $_POST['stud_id'] .".pdf";

			if(file_exists($filepat)){
				echo "<iframe id = 'iFrame' src=\"$filepat\" width=\"100%\" style=\"height:1000px\"></iframe>";
			}		
			else{
				echo "<h2 style='margin-left: 0; text-align: center'> No Submission </h2>";
			}
		?>
		</div>
	</form>	

</body>
</html>