<?php
	session_start();
	$con=mysqli_connect('localhost','root',"","erlss");
	if(mysqli_connect_errno()){
		echo"Failed to connect to mysql:".mysqli_connect_error;
	}
	else{		
		if (isset($_SESSION['adminuser'])){	
			$sql = "select * from requests where reqid = '" . $_GET['id'] . "'";
			$res = mysqli_query($con,$sql);
			$data = mysqli_fetch_array($res);
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
			$batch = $data['batch'];
			$sig = $data['sig'];
			$num = $data['number'];
			$email = $data['email'];
			$sex = $data['sex'];

			$proof = mysqli_fetch_array(mysqli_query($con, "select * from payments where reqid = '" . $reqid . "'"));
		}
		else{
			header("location:adminl.php");
		}
	}	
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
<h1 style="margin-bottom: -7vh">REQUEST</h1>
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
    <div class="row">
		<div class='col-sm-6'>
			<form onsubmit = "return confirm('Confirm Completion');" action = "reqcheck.php" method="get" style="text-align:center">
			<div  style='background-color:#2A2D33; border-radius: 10px; box-shadow: 0 0 20px 0.5px black; width: 99%;'>
		<?php
			echo "<input type = 'text' readonly value = 'Request ID: " . $reqid . "' style='background-color: #2A2D33; border: 0;'>";
			echo "<input type = 'hidden' name = 'id' value = '" . $reqid . "' style='background-color: #2A2D33; border: 0;'>";
			echo "<p> Date: " . $date . "</p>";
			if($form137 == 1 || $form137 == 2){
				echo "<input type='checkbox' disabled checked><label> Form 137 </label>";
			}
			else{
				echo "<input type='checkbox' disabled><label> Form137 </label>";
			}
			if($form138 == 1 || $form138 == 2){
				echo "<input type='checkbox' disabled checked><label> Form 138 </label>";
			}
			else{
				echo "<input type='checkbox' disabled><label> Form 138</label>";
			}
			if($diploma == 1 || $diploma == 2){
				echo "<input type='checkbox' disabled checked><label> Diploma </label>";
			}
			else{
				echo "<input type='checkbox' disabled><label> Diploma </label>";
			}
			if($asr == 1 || $asr == 2){
				echo "<input type='checkbox' disabled checked><label> ASR </label>";
			}
			else{
				echo "<input type='checkbox' disabled><label> ASR </label>";
			}
			echo "<div class='row align-items-end'>";
			echo "<div class='col-sm-6' style = 'text-align: right; color: white;'>Others: </p> <p>Purpose: </p> <p>Batch: </p> <p>Requester: </p> <p>Number: </p> <p>Email: </p> <p>Sex: </p></div>";
			echo "<div class='col-sm-6' style = 'text-align: left; color: white;'><p>" . $others . "</p>";
			echo "<p>" . $purpose . "</p>";
			echo "<p>" . $batch . "</p>";
			echo "<p>" . $lname . ", " . $fname . " " . $mi[0] . "." . "</p>";
			echo "<p>" . $num . "</p>";
			echo "<p>" . $email . "</p>";
			echo "<p>" . $sex . "</p></div></div>";
			echo "<input type='submit'>";
			?>
			<?php 
			$form = "reqforms/reqform" . $reqid . ".pdf";
			if(file_exists($form)){
				echo "<p style='color: white; text-align: center;''> PDF Copy </p>";
				echo "<iframe id = 'iFrame' src=\"$form\" width=\"80%\" style=\"height: 700px; margin-left: 50%; transform: translate(-50%, 0);box-shadow: 0 0 20px 0.5px black;\"></iframe><br><br>";
			}
		?>
		</div></form>			
		</div>	
	
	<div class='col-sm-6'>
		<div  style='background-color:#616d87;border-radius: 10px; box-shadow: 0 0 20px 0.5px black; width: 99%'>
		<form action="partialcheck.php" method="post" style="text-align:center">
		<?php 
				echo "<input type='hidden' name='id' value='" . $reqid . "'>";
				if($form137 == 1){
					echo "<input type='hidden' value='0' name='form137'>";
					echo "<input type='checkbox' name='form137' value=2><label style = 'color: black;'> Finished Form 137 </label>";
				}
				else if($form137 == 2){
					echo "<input type='hidden' value='0' name='form137'>";
					echo "<input checked type='checkbox' name='form137' value=2><label style = 'color: black;'> Finished Form 137 </label>";
				}
				if($form138 == 1){
					echo "<input type='hidden' value='0' name='form138'>";
					echo "<input type='checkbox' name='form138' value=2><label style = 'color: black;'> Finished Form 138 </label>";
				}
				else if($form138 == 2){
					echo "<input type='hidden' value='0' name='form138'>";
					echo "<input checked type='checkbox' name='form138' value=2><label style = 'color: black;'> Finished Form 138 </label>";
				}
				if($diploma == 1){
					echo "<input type='hidden' value='0' name='diploma'>";
					echo "<input type='checkbox' name='diploma' value=2><label style = 'color: black;'> Finished Diploma </label>";
				}
				else if($diploma == 2){
					echo "<input type='hidden' value='0' name='diploma'>";
					echo "<input checked type='checkbox' name='diploma' value=2><label style = 'color: black;'> Finished Diploma </label>";
				}
				if($asr == 1){
					echo "<input type='hidden' value='0' name='asr'>";
					echo "<input type='checkbox' name='asr' value=2><label style = 'color: black;'> Finished ASR </label>";
				}
				else if($asr == 2){
					echo "<input type='hidden' value='0' name='asr'>";
					echo "<input checked type='checkbox' name='asr' value=2><label style = 'color: black;'> Finished ASR </label>";
				}
			?>
		<input type = "submit">		
	</form>
	
	<?php 
		if($proof != null){
			$pay = $proof['payfile'];
		}
		else{
			$pay = "";
		}		
		if(file_exists($pay)){
			echo "<p style='color: black; text-align: center;''> Proof of Payment</p>";
			echo "<img src = '" . $pay . "' style = 'width: 80%; margin-left: 50%; transform: translate(-50%, 0);box-shadow: 0 0 20px 0.5px black;'><br><br>";
		}
	?>
</div>
</div>

</body>
</html>