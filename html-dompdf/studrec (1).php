<?php
	session_start();
	$con=mysqli_connect('localhost','root',"","erlss");
	if(mysqli_connect_errno()){
		echo"Failed to connect to mysql:".mysqli_connect_error;
	}
	else{
		$sql = "select * from registrar";			
		if (isset($_SESSION['user'])){	

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
	<h1>REQUEST</h1>
	</div>
	<style>
		input{
			
			background-color: #202225;
			color: white;
		}
	</style>
	<form action = "studrecsub.php" method = "POST" enctype="multipart/form-data">  
		<input required name = "sy" placeholder="SCHOOLYEAR">
		<input required name = "lname" placeholder="LAST NAME">
		<input required name = "fname" placeholder="GIVEN NAME">
		<input required name = "miname" placeholder="MIDDLE NAME">
		<input required name = "sex" placeholder="SEX">
		<input required name = "nickname" placeholder="NICKNAME">
		<input required name = "gradel" placeholder="GRADE LEVEL">
		<input required name = "section" placeholder="SECTION">
		<input required type = "date" name = "bdate" placeholder="BIRTHDATE">
		<input required name = "bplace" placeholder="BIRTHPLACE">
		<input required name = "religion" placeholder="RELIGION">
		<input required name = "nation" placeholder="NAIIONALITY">
		<input required name = "citiz" placeholder="CITIZENSHIP">
		<input name = "dua" placeholder="IF DUAL, PLS SPEICIFY">
		<input name = "houseno" placeholder="HOUSE NO.">
		<input name = "street" placeholder="STREET">
		<input name = "brgy" placeholder="BARANGAY">
		<input required name = "town" placeholder="TOWN/CITY">
		<input required name = "prov" placeholder="PROVINCE">
		<input required name = "congdis" placeholder="CONGRESSIONAL DISTRICT">
		<input required name = "zip" placeholder="ZIP CODE">
		<input required name = "telno" placeholder="TELEPHONE NUMBER">
		<input required name = "cellno" placeholder="CELLPHONE NUMBER">
		<input required name = "email" placeholder="EMAIL ADDRESS">
		<input required name = "prevschool" placeholder="PREVIOUS SCHOOL ATTENDED">
		<input required name = "schooladd" placeholder="SCHOOL ADDRESS">
		<input required type = "date" name = "dateofgrad" placeholder="DATE OF GRADUATION">
		<input required name = "noofgrad" placeholder="NO OF GRADUATES">
		<input required name = "finalave" placeholder="FINAL AVERAGE">
		<input required name = "honors" placeholder="HONORS RECEIVED">
		<input required name = "faname" placeholder="FATHER'S NAME">
		<label> FATHER'S SIGNATURE </label><input required type="file" name="fsig" size="50"/>
		<input required name = "fhomeadd" placeholder="FATHER'S HOME ADDRESS">
		<input required name = "ftelno" placeholder="FATHER'S TELEPHONE NUMBER">
		<input required name = "fcitiz" placeholder="FATHER'S CITIZENSHIP">
		<input required name = "fcellno" placeholder="FATHER'S CELLPHONE NUMBER">
		<input required name = "femail" placeholder="FATHER'S EMAIL">
		<input required name = "foccup" placeholder="FATHER'S OCCUPATION">
		<input required name = "foff" placeholder="FATHER'S OFFICE">
		<input required name = "foffadd" placeholder="FATHER'S OFFICE ADDRESS">
		<input required name = "fofftelno" placeholder="FATHER'S TELEPHONE NUMBER">
		<input required name = "mname" placeholder="MOTHER'S NAME">
		<label> MOTHER'S SIGNATURE </label><input required type="file" name="msig" size="50"/>
		<input required name = "mhomeadd" placeholder="MOTHER'S HOME ADDRESS">
		<input required name = "mtelno" placeholder="MOTHER'S TELEPHONE NUMBER">
		<input required name = "mcitiz" placeholder="MOTHER'S CITIZENSHIP">
		<input required name = "mcellno" placeholder="MOTHER'S CELLPHONE NUMBER">
		<input required name = "memail" placeholder="MOTHER'S EMAIL">
		<input required name = "moccup" placeholder="MOTHER'S OCCUPATION">
		<input required name = "moff" placeholder="MOTHER'S OFFICE">
		<input required name = "moffadd" placeholder="MOTHER'S OFFICE ADDRESS">
		<input required name = "mofftelno" placeholder="MOTHER'S TELEPHONE NUMBER">
		<input name = "gname1" placeholder="GUARDIAN'S NAME">
		<label> GUARDIAN'S SIGNATURE </label><input type="file" name="gsig1" size="50"/>
		<input name = "grelat1" placeholder="GUARDIAN'S RELATION TO STUDENT">
		<input name = "ghomeadd1" placeholder="GUARDIAN'S HOME ADDRESS">
		<input name = "gtelno1" placeholder="GUARDIAN'S TELEPHONE NUMBER">	
		<input name = "goffadd1" placeholder="GUARDIAN'S OFFICE ADDRESS">
		<input name = "gofftelno1" placeholder="GUARDIAN'S TELEPHONE NUMBER">
		<input name = "gemail1" placeholder="GUARDIAN'S EMAIL">
		<input name = "goccup1" placeholder="GUARDIAN'S OCCUPATION">
		<input name = "goff1" placeholder="GUARDIAN'S OFFICE">
		<input name = "gname2" placeholder="GUARDIAN'S NAME">
		<label> GUARDIAN'S SIGNATURE </label><input type="file" name="gsig2" size="50"/>
		<input name = "grelat2" placeholder="GUARDIAN'S RELATION TO STUDENT">
		<input name = "ghomeadd2" placeholder="GUARDIAN'S HOME ADDRESS">
		<input name = "gtelno2" placeholder="GUARDIAN'S TELEPHONE NUMBER">	
		<input name = "goffadd2" placeholder="GUARDIAN'S OFFICE ADDRESS">
		<input name = "gofftelno2" placeholder="GUARDIAN'S TELEPHONE NUMBER">
		<input name = "gemail2" placeholder="GUARDIAN'S EMAIL">
		<input name = "goccup2" placeholder="GUARDIAN'S OCCUPATION">
		<input name = "goff2" placeholder="GUARDIAN'S OFFICE">
		
		<input class = 'button' type = submit value = 'SUBMIT' name = 'adminr'>	
		<input class = "button" type = reset value = "CLEAR">
	</form>
</body>
</html>