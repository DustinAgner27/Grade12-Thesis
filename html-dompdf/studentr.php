<?php
session_start();
$con=mysqli_connect('localhost','root',"","erlss");
		if(mysqli_connect_errno()){
			echo"Failed to connect to mysql:".mysqli_connect_error;
		}
		else{
			$sql = "select * from students";
			$res = mysqli_query($con,$sql);
			$taken = 0;
			$found = 0;
			}	
?>
<html>
<head>
  <title>REGISTER</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <link href="template.css" rel="stylesheet">
</head>
<body>

<div class="container-fluid p-5 text-center bg-202225">
  <h1>REGISTER</h1>
</div>
  
<div class="container mt-5">
    <div class="row">
        <div class="col-sm-4">
        </div>
        <div class="col-sm-4">
        <form action = "studentrconfirm.php" method = "post">
			<?php 
				if (isset($_SESSION['nreg'])){
					echo "<h3> Student has existing account </h3>";
					unset($_SESSION['nreg']);
				}
			?>
			<input required name = "stud_id" placeholder="Student ID">
			<input required name = "lname" placeholder="Last name">
			<input required name = "fname" placeholder="First name">
			<input required name = "mi" placeholder="Middle Name">
			<input required name = "grd" placeholder = "Batch">
			<input required name = "email" placeholder="Email">
			<input required type="password" name = "password" placeholder="Password">
			<input class = 'button' type = submit value = 'Register' name = 'adminr'>	
			<input class = "button" type = reset value = "CLEAR">
		</form>
        </div>
        <div class="col-sm-4">
        </div>
    </div>
</div>

</body>
</html>