<?php
	session_start();
	$con=mysqli_connect('localhost','root',"","erlss");
	if(mysqli_connect_errno()){
		echo"Failed to connect to mysql:".mysqli_connect_error;
	}
	else{
		$_SESSION['from'] = "diploma"; 
		$sql = "select * from registrar";			
		if (isset($_SESSION['adminuser'])){	
			if(isset($_POST['stud_id'])){
				$stud_id = $_POST['stud_id'];
				$dup = mysqli_query($con, "select * from diploma where stud_id = '" . $stud_id . "'");
				if(mysqli_fetch_row($dup) == 0){
					mysqli_query($con, "insert into diploma values('$stud_id', '', '')");
				}				
			}
			else{
				header("location:dip.php");
			}
		}
		else{
			header("location:adminl.php");
		}
	}	
?>
<html>
<head>
	<title>DIPLOMA</title>
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
<h1 style="margin-bottom: -7vh"> <?php echo $_POST['name'] ?>'s Diploma </h1><br>
  <div class="back">
		<?php
			$back = "window.location='diploma.php'";
			echo '<form><input style="text-decoration: none; text-align: left; color: white; background-color: #2A2D33; border-color: #2A2D33;width: 2vw; height: 5vh;" type="button" value="<" onClick="' . $back . '"></form>';
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
		<div class="col-sm-8">
		<?php 
			$sql = mysqli_query($con, "select * from diploma where stud_id = '" . $stud_id . "'");
			$data = mysqli_fetch_array($sql);
			$filepat = "diploma/diploma" . $_POST['stud_id'] .".pdf";
			echo $filepat;

			if(file_exists($filepat)){
				mysqli_query($con, "update diploma set dipfile = '" . $filepat . "' where stud_id = '" . $stud_id . "'");
				echo "<iframe id = 'iFrame' src=\"$filepat\" width=\"90%\" style=\"height:50vh\"></iframe>";
			}		
			echo "<p> Upload File </p>";

		?>
		<form action="upload_file.php" method="POST" enctype="multipart/form-data">
			<input type="file" name="file" style="width: 50%"size="50" /><br />
			<input type="hidden" name = "stud_id" value = "<?php echo $_POST['stud_id'];?>">
			<input type="hidden" name = "name" value = "<?php echo $_POST['name'];?>">
			<input type="hidden" name = "filepat" value = "<?php echo "diploma/diploma" . $_POST['stud_id'] . ".pdf";?>">
			<input type="hidden" name = "filename" value = "<?php echo $_POST['stud_id'] . ".pdf";?>">
			<input type="submit" value="Upload" style="width: 50%"/>
		</form>
		</div>
		<div class="col-sm-4">
		
		<form action="access.php" method="POST">
			<p> Allow Student Access? </p>
			<input type="hidden" name = "stud_id" value = "<?php echo $_POST['stud_id'];?>">
			<input type="hidden" name = "name" value = "<?php echo $_POST['name'];?>">
			<input type="radio" name="acs" value="1" <?php if($data['dipaccess'] == 1){ echo "checked"; }?>><label> YES </label>
			<input type="radio" name="acs" value="0" <?php if($data['dipaccess'] == 0){ echo "checked"; }?>><label> NO </label>
			<input type="submit" value="Save">
		</form>
		</div>
</body>
</html>