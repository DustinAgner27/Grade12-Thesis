<?php
	session_start();
	$con=mysqli_connect('localhost','root',"","erlss");
	if(mysqli_connect_errno()){
		echo"Failed to connect to mysql:".mysqli_connect_error;
	}
	else{
		$sql = "select * from registrar";			
		if (isset($_SESSION['adminuser'])){	
		}
		else{
			header("location:adminl.php");
		}
	}	
	$sel = "select * from students order by batch asc";
	$dist = mysqli_query($con, "select count(distinct batch) from students");
	$max = mysqli_fetch_array($dist)[0];	
	$all = mysqli_query($con, "select count(batch) from students");
	$overall = mysqli_fetch_array($all)[0];
	$res = mysqli_query($con, $sel);
?>
<html>
<head>
  <title>REPORT CARDS</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <link href="template.css" rel="stylesheet">
</head>
<body>

<div class="container-fluid p-5 text-center bg-202225">
  <h1 style="margin-bottom: -7vh">REPORT CARDS</h1>
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
			<input autocomplete = 'off' type="submit" value="REQUEST FORM" style="background-color: #2A2D33; border-color:#2A2D33; font-size: 2vh;"> 
		</form>
		<form action="calendar.php">
			<input autocomplete = 'off' type="submit" value="CALENDAR" style="background-color: #2A2D33; border-color:#2A2D33; font-size: 2vh;"> 
		</form>
		<form action="record.php">
			<input autocomplete = 'off' type="submit" value="STUDENT RECORD" style="background-color: #2A2D33; border-color:#2A2D33; font-size: 2vh;"> 
		</form>
		<form action="reportcard.php">
			<input autocomplete = 'off' type="submit" value="REPORT CARD" style="background-color: #2A2D33; border-color:#2A2D33; font-size: 2vh;"> 
		</form>
		<form action="tor.php">
			<input autocomplete = 'off' type="submit" value="TOR" style="background-color: #2A2D33; border-color:#2A2D33; font-size: 2vh;"> 
		</form>
		<form action="diploma.php">
			<input autocomplete = 'off' type="submit" value="DIPLOMA" style="background-color: #2A2D33; border-color:#2A2D33; font-size: 2vh;"> 
		</form>
		<form action="asr.php">
			<input autocomplete = 'off' type="submit" value="ASR" style="background-color: #2A2D33; border-color:#2A2D33; font-size: 2vh;"> 
		</form>
		<form action="logs.php">
			<input autocomplete = 'off' type="submit" value="LOGS" style="background-color: #2A2D33; border-color:#2A2D33; font-size: 2vh;"> 
		</form>
	</div> 
	<form action="out.php" class='logoutd'>
		<input autocomplete = 'off' class='logout' type="submit" value="LOG OUT"> 
	</form>
	 
<div class="container mt-5">
    <div class="row">
        <div class="col">
        <?php 
			if($res != null){ 
				$ctr = 0;
				$offset = 0;
				while($offset< $overall){
						$sel1 = "select * from students order by batch limit 1 offset " . $offset;
						$res1 = mysqli_query($con, $sel1);
						$currbatch = mysqli_fetch_array($res1)['batch'];
						$sel2 = "select * from students where batch = '"  . $currbatch . "'";
						$res2 = mysqli_query($con, $sel2);
						$c = 0;
						if($res2){
							while($d = mysqli_fetch_array($res2)){
								$ar[$ctr][$c][0] = $d['stud_id'];
								$ar[$ctr][$c][1] = $d['lname'];
								$ar[$ctr][$c][2] = $d['fname'];
								$ar[$ctr][$c][3] = $d['mi'];
								$ar[$ctr][$c][4] = $d['batch'];
								$ar[$ctr][$c][5] = $d['email'];
								$ar[$ctr][$c][6] = $d['password'];
								$c++;
								$offset++;
							}
							$columns = array_column($ar[$ctr], 1);
							array_multisort($columns, SORT_ASC, $ar[$ctr]);
						}					
						$ctr++;
												
					}
				} 
		?>
		<?php 
			if($res2 != null){
				$batchc = 0;
				echo "<div class='row justify-content-center'>";
				foreach($ar as $bat){
					echo "<div class = 'col-sm-2''><div style='background-color:#91edae;color:black; height: auto; width: 99%; border-radius: 10px; box-shadow: 0 0 20px 2px black; box-shadow: 0 7px 20px 0.1px black;text-align: center;'><h1  style='margin-top:20px; text-shadow: 0 0 0 black;'> B " . $ar[$batchc][0][4] . "</h1>";
								foreach ($bat as $data){		
									$ctr++;				
										echo "<form action = 'studentrepcard.php' method = 'POST' >";
										echo "<input autocomplete = 'off' type='hidden' name = 'stud_id' value = '" . $data[0] . "'>";
										echo "<input autocomplete = 'off' type='hidden' name = 'name' value = '" . $data[1] .  ", " . $data[2] . "'>";
										echo "<input autocomplete = 'off' style='width: 90%; height: 50px; border-radius: 10px; margin-bottom: 0; background-color: #3d4d42;border: 0; box-shadow: 0 7px 20px 0.1px black;' type='submit' value = '" . $data[1] . ", " . $data[2][0] . "'>";
										echo "</form>";
								}
								$batchc++;
								echo "<br></div></div>";
				}
				echo "</div>";
			}
		?>
    </div>
</div>

</body>
</html>