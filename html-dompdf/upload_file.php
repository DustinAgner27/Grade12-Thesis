<?php
    session_start();
        $con=mysqli_connect('localhost','root',"","erlss");
        if(mysqli_connect_errno()){
            echo"Failed to connect to mysql:".mysqli_connect_error;
        }
        else{          
            if (isset($_SESSION['adminuser']) && isset($_SESSION['from'])){ 
                if(move_uploaded_file($_FILES['file']['tmp_name'], $_POST['filepat'])){
                    if($_SESSION['from'] == "tor"){
                        $action = "studenttor.php";
                        mysqli_query($con, "update tor set torfile = '" . $_POST['filepat'] . "' where stud_id = '" . $_POST['stud_id'] . "'");     
                    }
                    else if($_SESSION['from'] == "repcard"){
                        $action = "studentrepcard.php";
                        mysqli_query($con, "update reportcard set repcardfile = '" . $_POST['filepat'] . "' where stud_id = '" . $_POST['stud_id'] . "'");     
                    }
                    else if($_SESSION['from'] == "diploma"){
                        $action = "studentdip.php";
                        mysqli_query($con, "update diploma set dipfile = '" . $_POST['filepat'] . "' where stud_id = '" . $_POST['stud_id'] . "'");     
                    }
                    else if($_SESSION['from'] == "asr"){
                        $action = "studentasr.php";
                        mysqli_query($con, "update asr set asrfile = '" . $_POST['filepat'] . "' where stud_id = '" . $_POST['stud_id'] . "'");     
                    }

                    unset($_SESSION['from']);                             
                }
                else{
                    echo "Problem uploading file";
                }
            }
            else{
                header("location:adminl.php");
            }
        }   

 ?>
 <html>
 <head>
 </head>
 <body onload="document.getElementById('autosub').submit(); return false;">
    <form action="<?php echo $action ?>" method="post" id="autosub">
        <input type="hidden" name = "name" value = "<?php echo $_POST['name'];?>">
        <input type="hidden" name="stud_id" value = "<?php echo $_POST['stud_id']; ?>">
    </form>
 </body>
 </html>