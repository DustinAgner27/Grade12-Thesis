<?php
session_start();
function out($user){
    unset($user);
}
$con=mysqli_connect('localhost','root',"","erlss");
        if(mysqli_connect_errno()){
            echo"Failed to connect to mysql:".mysqli_connect_error;
        }
        else{
            if(isset($_SESSION['user'])){
                unset($_SESSION['user']);
            }
            $sql = "select * from students";
            $res = mysqli_query($con,$sql);
            $taken = 0;
            $found = 0;
            }   
?>
<html>
<head>
  <title>ERLSS</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <link href="templat.css" rel="stylesheet">
</head>
<body>

</style>

<div class="container-fluid p-5 text-center bg-202225">
  <h1>LOGIN</h1>
</div>
  
<div class="container mt-5">
  <div class="row">
    <div class="col-sm-4">
    <form action = "studentlconfirm.php" method = "post">
				<input class = "h2" value = "Student" readonly style="background-color: #1e2023; border:0;">
				<?php 
					if (isset($_SESSION['nlogin'])){
						echo "<h3> Incorrect Username/Password </h3>";
						unset($_SESSION['nlogin']);
					}
				?>
				<input autocomplete = "off" required name = "stud_id" placeholder="Student ID">
				<input autocomplete = "off" required type="password" name = "password" placeholder="Password">
				<input autocomplete = "off" class = 'button' type = submit value = 'Login' name = 'adminl'>	
				<input autocomplete = "off" class = "button" type = reset value = "Clear">
				<a href= "studentr.php"><input class = 'button' type = button value = 'Register'></a>
			</form>
    </div>
    <div class="col-sm-4">
    </div>
    <div class="col-sm-4">
        <form action = "adminlconfirm.php" method = "post">
            <input class = "h2" value = "Registrar" readonly style="background-color: #1e2023; border:0;">
            <?php 
                if (isset($_SESSION['nlogin'])){
                    echo "<h3> Incorrect Username/Password </h3>";
                    unset($_SESSION['nlogin']);
                }
            ?>
            <input autocomplete = "off" required name = "username" placeholder="Username">
            <input autocomplete = "off" required type="password" name = "password" placeholder="Password">
            <input autocomplete = "off" class = 'button' type = submit value = 'Login' name = 'adminl'>	
            <input autocomplete = "off" class = "button" type = reset value = "Clear">
            <a href= "adminr.php"><input class = 'button' type = button value = 'Register'></a>
        </form>     
    </div>
  </div>
</div>

</body>
</html>