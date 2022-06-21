<?php
	session_start();
	$con=mysqli_connect('localhost','root',"","erlss");
	if(mysqli_connect_errno()){
		echo"Failed to connect to mysql:".mysqli_connect_error;
	}
	else{
		$sql = "select * from students";			
		if (isset($_SESSION['user'])){	
			$sql = "select * from students where stud_id = '" . $_SESSION['user'] . "'";
			$res = mysqli_query($con,$sql);
			$data = mysqli_fetch_array($res);
			$stud_id = $data['stud_id'];
			$lname = $data['lname'];
			$fname = $data['fname'];
			$mi = $data['mi'];
			$batch = $data['batch'];
			$email = $data['email'];
			$password = $data['password'];
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
  <style type="text/css">
  	::placeholder {
	    color: grey;
	    opacity: 1;
  	}
  </style>
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
		<form action="mains.php">
			<input type="submit" value="REQUEST FORM" style="background-color: #2A2D33; border-color:#2A2D33; font-size: 2vh;"> 
		</form>
		<form action="srepcard.php">
			<input type="submit" value="REPORT CARD" style="background-color: #2A2D33; border-color:#2A2D33; font-size: 2vh;"> 
		</form>
		<form action="stor.php">
			<input type="submit" value="TOR" style="background-color: #2A2D33; border-color:#2A2D33; font-size: 2vh;"> 
		</form>
		<form action="sdip.php">
			<input type="submit" value="DIPLOMA" style="background-color: #2A2D33; border-color:#2A2D33; font-size: 2vh;"> 
		</form>
		<form action="sasr.php">
			<input type="submit" value="ASR" style="background-color: #2A2D33; border-color:#2A2D33; font-size: 2vh;"> 
		</form>
		<form action="studrec.php">
			<input type="submit" value="STUDENT RECORD" style="background-color: #2A2D33; border-color:#2A2D33; font-size: 2vh;"> 
		</form>
	</div> 
	<form action="out.php" class='logoutd'>
		<input class='logout' type="submit" value="LOG OUT"> 
	</form>
<form action = "reqsubmit.php" method = "post" enctype="multipart/form-data">  
<div class="container mt-5">
    <div class="row">
		
        <div class="col-sm-4">
			<input required type = "date" name = "date" placeholder="Date" value = "<?php echo date("Y-m-d") ?>"><br>
			<div class="row" style='text-align: center;'>
				<div class = "col-sm-4">
					<label> Needed Document/s </label>
				</div>
				<div class = "col-sm-4">
					<label> Requirements </label>
				</div>
				<div class = "col-sm-4">
					<label> Fee </label>
				</div>
			</div>
			<div class="row" style='text-align: center;'>
				<div class = "col-sm-4">
					<input type="checkbox" class="checkboxer" name="form137" value="1"><br> <label for="form137"> Form 137 </label>
				</div>
				<div class = "col-sm-4">
					<label> Clearance </label>
				</div>
				<div class = "col-sm-4">
					<label> P150 </label>
				</div>
			</div>
			<div class="row" style='text-align: center;'>
				<div class = "col-sm-4">
					<input type="checkbox" class="checkboxer" name="form138" value="1"> <br><label for="form138"> Form 138 </label>
				</div>
				<div class = "col-sm-4">
					<label> - </label>
				</div>
				<div class = "col-sm-4">
					<label> P50 </label>
				</div>
			</div>
			<div class="row" style='text-align: center;'>
				<div class = "col-sm-4">
					<input type="checkbox" class="checkboxer" name="diploma" value="1"> <br><label for="diploma"> Diploma </label>
				</div>
				<div class = "col-sm-4">
					<label> Clearance </label>
				</div>
				<div class = "col-sm-4">
					<label> P100 </label>
				</div>
			</div>
			<div class="row" style='text-align: center;'>
				<div class = "col-sm-4">
					<input type="checkbox" class="checkboxer" name="asr" value="1"> <br><label for=asr"> ASR </label>
				</div>
				<div class = "col-sm-4">
					<label> - </label>
				</div>
				<div class = "col-sm-4">
					<label> P20 / Page </label>
				</div>
			</div>
						<input name="others" placeholder="Others"><br>
			<input required type="radio" class="checkboxer" name="sex" value="Male"><label> Male </label>
			<input required type="radio" class="checkboxer" name="sex" value="Female" style="align: center"><label> Female </label>
        </div>
        <div class="col-sm-4">
			<textarea required name="purpose" placeholder="Purpose"></textarea><br>
			<label> Requested by: </label><input required name = "requester" placeholder="Requester" value="<?php echo $fname . " " . $lname;?>"><br>
			<label> Signature: </label><input required type="file" name="sig"></br>
			<input required name = "batch" placeholder="Batch" value="<?php echo $batch?>">
			<input required name = "num" placeholder="Number">
			<input required name = "email" placeholder="Email" value="<?php echo $email?>">
			
		</form>
        </div>
        <div class="col-sm-4">
        	<label> Proof of Payment: </label>
        	<input type="file" name="proof" >
			<input class = 'button' type = submit value = 'Submit'>	
			<input class = "button" type = reset value = "CLEAR">
        </div>
    </div>
</div>

</body>
</html>