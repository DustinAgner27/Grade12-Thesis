<?php
	session_start();
	$con=mysqli_connect('localhost','root',"","erlss");
	if(mysqli_connect_errno()){
		echo"Failed to connect to mysql:".mysqli_connect_error;
	}
	else{	
		if (isset($_SESSION['adminuser'])){	
			mysqli_query($con,"delete from calendar");
			mysqli_query($con,"delete from schedule");
			mysqli_query($con,"insert into calendar select reqid, stud_id, lname, fname, mi, date, form137, form138, diploma, asr, others, null, null, null, null, null from requests");
			$caldb = mysqli_query($con,"select * from calendar order by date desc");
			while($data = mysqli_fetch_array($caldb)){				
				$indiv = mysqli_fetch_array(mysqli_query($con,"select * from calendar where reqid = '" . $data['reqid'] . "'"));
				$form137date = date('Y-m-d', strtotime('+2 week', strtotime($indiv['date'])));
				$form138date = date('Y-m-d', strtotime('+2 days', strtotime($indiv['date'])));
				$diplomadate = date('Y-m-d', strtotime('+1 month', strtotime($indiv['date'])));
				$asrdate = date('Y-m-d', strtotime('+2 days', strtotime($indiv['date'])));
				$othersdate = date('Y-m-d', strtotime('+1 week', strtotime($indiv['date'])));
				if($indiv['form137'] == 1){
					mysqli_query($con, "update calendar set form137date = '" . $form137date . "' where reqid = '" . $indiv['reqid'] . "'");
				}
				if($indiv['form138'] == 1){
					mysqli_query($con, "update calendar set form138date = '" . $form138date . "' where reqid = '" . $indiv['reqid'] . "'");
				}
				if($indiv['diploma'] == 1){
					mysqli_query($con, "update calendar set diplomadate = '" . $diplomadate . "' where reqid = '" . $indiv['reqid'] . "'");
				}
				if($indiv['asr'] == 1){
					mysqli_query($con, "update calendar set asrdate = '" . $asrdate . "' where reqid = '" . $indiv['reqid'] . "'");
				}
				if($indiv['others'] != null){
					mysqli_query($con, "update calendar set othersdate = '" . $othersdate . "' where reqid = '" . $indiv['reqid'] . "'");
				}
			}
			$caldb2 = mysqli_query($con,"select * from calendar order by date desc");
			while($tasks = mysqli_fetch_array($caldb2)){
				if($tasks['form137date'] != "0000-00-00"){
					mysqli_query($con, "insert into schedule select reqid, stud_id, lname, fname, mi, date, form137date, 'Form 137' from calendar where reqid = '" . $tasks['reqid'] . "'");
				}
				if($tasks['form138date'] != "0000-00-00"){
					mysqli_query($con, "insert into schedule select reqid, stud_id, lname, fname, mi, date, form138date, 'Form 138' from calendar where reqid = '" . $tasks['reqid'] . "'");
				}		
				if($tasks['diplomadate'] != "0000-00-00"){
					mysqli_query($con, "insert into schedule select reqid, stud_id, lname, fname, mi, date, diplomadate, 'Diploma' from calendar where reqid = '" . $tasks['reqid'] . "'");
				}		
				if($tasks['asrdate'] != "0000-00-00"){
					mysqli_query($con, "insert into schedule select reqid, stud_id, lname, fname, mi, date, asrdate, 'Authentication of School Records' from calendar where reqid = '" . $tasks['reqid'] . "'");
				}		
				if($tasks['othersdate'] != "0000-00-00"){
					mysqli_query($con, "insert into schedule select reqid, stud_id, lname, fname, mi, date, othersdate, others from calendar where reqid = '" . $tasks['reqid'] . "'");
				}						
			}

		}
		else{
			header("location:adminl.php");
		}
	}	
	$sel = "select * from schedule where dateend <> '0000-00-00' order by dateend desc";
	$res = mysqli_query($con, $sel);	
?>
<html>
<head>
  <title>CALENDAR</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <link href="template.css" rel="stylesheet">
</head>
<body>

	<div class="container-fluid p-5 text-center bg-202225">
	<h1 style="margin-bottom: -7vh">CALENDAR</h1>
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
			
			<form action="out.php"class='logoutd'>
				<input class='logout' type="submit" value="LOG OUT"> 
			</form>
			<form style="position: fixed; right: 40px; margin-top: 10vh; margin-bottom: -5vh; font-size: 2vh; margin-right: 10vw;">
				<input style="margin-top: 0vh; width: 80px;background-color: #ff7888; color: black;" class='legend' type="locked" value="OVERDUE"> 
				<input style="margin-top: 5vh; width: 80px;background-color: #7acfff; color: black;"class='legend' type="locked" value="UPCOMING">
				<input style="margin-top: 10vh; width: 80px;background-color: #808080; color: black;" class='legend' type="locked" value="PENDING">
			</form>
	<div class="container mt-5">
		
		<div class="row">
			
			
			<div class="col-sm-4" style="text-align: center;">
			</div><?php 
				if($res != null){ 	
					$ctr = 0;
					$ar = array();
					$offset = 0;
					$dist = mysqli_query($con, "select count(distinct dateend) from schedule");
					$max = mysqli_fetch_array($dist)[0];	
					$all = mysqli_query($con, "select count(dateend) from schedule where dateend <> '0000-00-00'");
					$overall = mysqli_fetch_array($all)[0];
					while($offset< $overall){
						$sel1 = "select * from schedule where dateend <> '0000-00-00' order by dateend limit 1 offset " . $offset;
						$res1 = mysqli_query($con, $sel1);
						$currdate = mysqli_fetch_array($res1)['dateend'];
						$sel2 = "select * from schedule where dateend = '"  . $currdate . "'";
						$res2 = mysqli_query($con, $sel2);
						$c = 0;
						if($res2){
							while($d = mysqli_fetch_array($res2)){
								$ar[$ctr][$c][0] = $d['reqid'];
								$ar[$ctr][$c][1] = $d['stud_id'];
								$ar[$ctr][$c][2] = $d['lname'];
								$ar[$ctr][$c][3] = $d['fname'];
								$ar[$ctr][$c][4] = $d['datesub'];
								$ar[$ctr][$c][5] = $d['dateend'];
								$ar[$ctr][$c][6] = $d['task'];
								$c++;
								$offset++;
							}
						}					
						$ctr++;
												
					}
					$redir = array();
					$redir['Form 137'] = "studenttor";
					$redir['Form 138'] = "studentrepcard";
					$redir['Diploma'] = "studentdip";
					$redir['Authentication of School Records'] = "studentasr";
					$percol = ceil(count($ar)/3);
					$percol = array_sum(array_map("count", $ar))/3;
					$legcol;
					echo "<div class = 'row'>";
					$col = 0;
					$datec = 0;
					while($col < 3){
						echo "<div class='col-sm-4' style='text-align: center;  height: auto;'>";
						$ctr = 0;
						while($ctr < $percol){
							if(array_key_exists($datec, $ar)){
								if(date("Y-m-d", strtotime("+1 week")) < $ar[$datec][0][5]){
									$colr = "#808080";
								}
								elseif(date("Y-m-d") < $ar[$datec][0][5]){
									$colr = "#7acfff";
								}
								else{
									$colr = "#ff7888";
								}
								echo "<div style='color:black; height: auto; width: 99%; background-color: " . $colr . "; border-radius: 10px; box-shadow: 0 0 20px 2px black;'><h1  style='margin-top:20px; text-shadow: 0 0 0 black;'> " . $ar[$datec][0][5] . "</h1>";
								foreach ($ar[$datec] as $data){		
									$ctr++;				
									if($data[6] == "Form 137" || $data[6] == "Form 138" || $data[6] == "Diploma" || $data[6] == "Authentication of School Records" ){
										echo "<p>" . $data[2] . ", " . $data[3] . "'s Request | # Request ID: " . $data[0] . "</p>";
										echo "<form action = '" . $redir[$data[6]] . ".php' method = 'post' >";
										echo "<input type='hidden' name = 'stud_id' value = '" . $data[1] . "'>";
										echo "<input type='hidden' name = 'name' value = '" . $data[2] . ", " . $data[3] . "'>";
										echo "<input style='height: 50px; border-radius: 0; margin-bottom: 20px; background-color: #474747; border: 0; box-shadow: 0 7px 20px 0.1px black;' type='submit' value = '" . $data[6] . "'>";
										echo "</form>";
									}
									else{
										echo "<p>" . $data[2] . ", " . $data[3] . "'s Request </p>";
										echo "<form action = 'others.php' method = 'post' >";
										echo "<input type='hidden' name = 'reqid' value = '" . $data[0] . "'>";
										echo "<input type='hidden' name = 'name' value = '" . $data[2] . ", " . $data[3] . "'>";
										echo "<input style='height: 50px; border-radius: 0; margin-bottom: 20px; background-color: #474747; border: 0; box-shadow: 0 7px 20px 0.1px black;'type='submit' value = '" . $data[6] . "'>";
										echo "</form>";
									}
								}
								$datec++;
								echo "</div>";
							}			
							else{
								break;
							}			
						}					
						echo "</div>";
						$col++;
					}
					echo "</div>";
				} 
			?>
			
			
			</div>
		</div>
	</div>
	

</body>
</html>