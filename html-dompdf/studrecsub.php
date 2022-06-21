<?php
require_once "vendor/autoload.php";
use Dompdf\Dompdf;
session_start();
$con=mysqli_connect('localhost','root',"","erlss");
        if(mysqli_connect_errno()){
            echo"Failed to connect to mysql:".mysqli_connect_error;
        }
        else{   
            $stud_id = $_SESSION['user'];
            $fileName = $_FILES['fsig']['name'];
            $fileNameCmps = explode(".", $fileName);
            $fileExtension = strtolower(end($fileNameCmps));
            $filepatf = "infosheets/fsigs/fsig" . $stud_id . "." . $fileExtension;
            $_SESSION['filepatf'] = $filepatf;
            
            $fileName = $_FILES['msig']['name'];
            $fileNameCmps = explode(".", $fileName);
            $fileExtension = strtolower(end($fileNameCmps));
            $filepatm = "infosheets/msigs/msig" . $stud_id . "." . $fileExtension;
            $_SESSION['filepatm'] = $filepatm;

            $fileName = $_FILES['gsig1']['name'];
            $fileNameCmps = explode(".", $fileName);
            $fileExtension = strtolower(end($fileNameCmps));
            $filepatg1 = "infosheets/gsigs/gsig1" . $stud_id . "." . $fileExtension;
            $_SESSION['filepatg1'] = $filepatg1;

            $fileName = $_FILES['msig']['name'];
            $fileNameCmps = explode(".", $fileName);
            $fileExtension = strtolower(end($fileNameCmps));
            $filepatg2 = "infosheets/gsigs/gsig2" . $stud_id . "." . $fileExtension;
            $_SESSION['filepatg2'] = $filepatg2;
            if(move_uploaded_file($_FILES['fsig']['tmp_name'], $filepatf)){                   
            }
            else{
                echo "Problem uploading file";
            }
            if(move_uploaded_file($_FILES['msig']['tmp_name'], $filepatm)){                   
            }
            else{
                echo "Problem uploading file";
            }
            if(move_uploaded_file($_FILES['gsig1']['tmp_name'], $filepatg1)){                   
            }
            else{
                echo "Problem uploading file";
            }
            if(move_uploaded_file($_FILES['gsig2']['tmp_name'], $filepatg2)){                   
            }
            else{
                echo "Problem uploading file";
            }
            $sql = "select * from students where stud_id = '" . $stud_id . "'";
            $res = mysqli_query($con,$sql);
            $data = mysqli_fetch_array($res);

            $last = "select * from requests ORDER BY reqid DESC LIMIT 1";
            $res2 = mysqli_query($con,$last);
            $_SESSION['sy'] = $_POST['sy'];
            $_SESSION['name'] = $_POST['name'];
            $_SESSION['fname'] = $_POST['fname'];
            $_SESSION['miname'] = $_POST['miname'];
            $_SESSION['sex'] = $_POST['sex'];
            $_SESSION['nickname'] = $_POST['nickname'];
            $_SESSION['gradel'] = $_POST['gradel'];
            $_SESSION['section'] = $_POST['section'];
            $_SESSION['bdate'] = $_POST['bdate'];
            $_SESSION['bplace'] = $_POST['bplace'];
            $_SESSION['religion'] = $_POST['religion'];
            $_SESSION['nation'] = $_POST['nation'];
            $_SESSION['citiz'] = $_POST['citiz'];
            $_SESSION['dua'] = $_POST['dua'];
            $_SESSION['houseno'] = $_POST['houseno'];
            $_SESSION['street'] = $_POST['street'];
            $_SESSION['brgy'] = $_POST['brgy'];
            $_SESSION['town'] = $_POST['town'];
            $_SESSION['prov'] = $_POST['prov'];
            $_SESSION['congdis'] = $_POST['congdis'];
            $_SESSION['zip'] = $_POST['zip'];
            $_SESSION['telno'] = $_POST['telno'];
            $_SESSION['cellno'] = $_POST['cellno'];
            $_SESSION['email']  = $_POST['email'];
            $_SESSION['prevschool'] = $_POST['prevschool'];
            $_SESSION['schooladd'] = $_POST['schooladd'];
            $_SESSION['dateofgrad'] = $_POST['dateofgrad'];
            $_SESSION['noofgrad'] = $_POST['noofgrad'];
            $_SESSION['finalave'] = $_POST['finalave'];
            $_SESSION['honors'] = $_POST['honors'];
            $_SESSION['faname'] = $_POST['faname'];
            $_SESSION['fsig'] = $filepatf;
            $_SESSION['fhomeadd'] = $_POST['fhomeadd'];
            $_SESSION['ftelno'] = $_POST['ftelno'];
            $_SESSION['fcitiz'] = $_POST['fcitiz'];
            $_SESSION['fcellno'] = $_POST['fcellno'];
            $_SESSION['femail']  = $_POST['femail'];
            $_SESSION['foccup'] = $_POST['foccup'];
            $_SESSION['foff'] = $_POST['foff'];
            $_SESSION['foffadd'] = $_POST['foffadd'];
            $_SESSION['fofftelno'] = $_POST['fofftelno'];
            $_SESSION['mname'] = $_POST['mname'];
            $_SESSION['msig'] = $filepatm;
            $_SESSION['mhomeadd'] = $_POST['mhomeadd'];
            $_SESSION['mtelno'] = $_POST['mtelno'];
            $_SESSION['mcitiz'] = $_POST['mcitiz'];
            $_SESSION['mcellno'] = $_POST['mcellno'];
            $_SESSION['memail']  = $_POST['memail'];
            $_SESSION['moccup'] = $_POST['moccup'];
            $_SESSION['moff'] = $_POST['moff'];
            $_SESSION['moffadd'] = $_POST['moffadd'];
            $_SESSION['mofftelno'] = $_POST['mofftelno'];
            $_SESSION['gname1'] = $_POST['gname1'];
            $_SESSION['gsig1'] = $filepatg1;
            $_SESSION['grelat1'] = $_POST['grelat1'];
            $_SESSION['ghomeadd1'] = $_POST['ghomeadd1'];
            $_SESSION['gtelno1'] = $_POST['gtelno1'];
            $_SESSION['goffadd1'] = $_POST['goffadd1'];
            $_SESSION['gofftelno1'] = $_POST['gofftelno1'];
            $_SESSION['gname2'] = $_POST['gname2'];
            $_SESSION['gsig2'] = $filepatg2;
            $_SESSION['grelat2'] = $_POST['grelat2'];
            $_SESSION['ghomeadd2'] = $_POST['ghomeadd2'];
            $_SESSION['gtelno2'] = $_POST['gtelno2'];
            $_SESSION['goffadd2'] = $_POST['goffadd2'];
            $_SESSION['gofftelno2'] = $_POST['gofftelno2'];
            $sy = $_POST['sy'];
            $lname = $_POST['lname'];
            $fname = $_POST['fname'];
            $miname = $_POST['miname'];
            $sex = $_POST['sex'];
            $nickname = $_POST['nickname'];
            $gradel = $_POST['gradel'];
            $section = $_POST['section'];
            $bdate = $_POST['bdate'];
            $bplace = $_POST['bplace'];
            $religion = $_POST['religion'];
            $nation = $_POST['nation'];
            $citiz = $_POST['citiz'];
            $dua = $_POST['dua'];
            $houseno = $_POST['houseno'];
            $street = $_POST['street'];
            $brgy = $_POST['brgy'];
            $town = $_POST['town'];
            $prov = $_POST['prov'];
            $congdis = $_POST['congdis'];
            $zip = $_POST['zip'];
            $telno = $_POST['telno'];
            $cellno = $_POST['cellno'];
            $email  = $_POST['email'];
            $prevschool = $_POST['prevschool'];
            $schooladd = $_POST['schooladd'];
            $dateofgrad = $_POST['dateofgrad'];
            $noofgrad = $_POST['noofgrad'];
            $finalave = $_POST['finalave'];
            $honors = $_POST['honors'];
            $faname = $_POST['faname'];
            $fsig = $filepatf;
            $fhomeadd = $_POST['fhomeadd'];
            $ftelno = $_POST['ftelno'];
            $fcitiz = $_POST['fcitiz'];
            $fcellno = $_POST['fcellno'];
            $femail  = $_POST['femail'];
            $foccup = $_POST['foccup'];
            $foff = $_POST['foff'];
            $foffadd = $_POST['foffadd'];
            $fofftelno = $_POST['fofftelno'];
            $mname = $_POST['mname'];
            $msig = $filepatm;
            $mhomeadd = $_POST['mhomeadd'];
            $mtelno = $_POST['mtelno'];
            $mcitiz = $_POST['mcitiz'];
            $mcellno = $_POST['mcellno'];
            $memail  = $_POST['memail'];
            $moccup = $_POST['moccup'];
            $moff = $_POST['moff'];
            $moffadd = $_POST['moffadd'];
            $mofftelno = $_POST['mofftelno'];
            $gname1 = $_POST['gname1'];
            $gsig1 = $filepatg1;
            $grelat1 = $_POST['grelat1'];
            $ghomeadd1 = $_POST['ghomeadd1'];
            $gtelno1 = $_POST['gtelno1'];
            $goffadd1= $_POST['goffadd1'];
            $gofftelno1 = $_POST['gofftelno1'];
            $gname2 = $_POST['gname2'];
            $gsig2 = $filepatg2;
            $grelat2 = $_POST['grelat2'];
            $ghomeadd2 = $_POST['ghomeadd2'];
            $gtelno2 = $_POST['gtelno2'];
            $goffadd2 = $_POST['goffadd2'];
            $gofftelno2 = $_POST['gofftelno2'];
            if(mysqli_num_rows($res) == 1){         
                $ins = "insert into studrec values('$stud_id','$sy','$name','$fname','$miname','$sex','$nickname','$gradel','$section','$bdate','$bplace','$religion','$nation','$citiz','$dua','$houseno','$street','$brgy','$town','$prov','$congdis','$zip','$telno','$cellno','$email','$prevschool','$schooladd','$dateofgrad','$noofgrad','$finalave','$honors','$faname','$fsig','$fhomeadd','$ftelno','$fcitiz','$fcellno','$femail','$foccup','$foff','$foffadd','$fofftelno','$mname','$msig','$mhomeadd','$mtelno','$mcitiz','$mcellno','$memail','$moccup','$moff','$moffadd','$mofftelno','$gname1','$gsig1','$grelat1','$ghomeadd1','$gtelno1','$goffadd1','$gofftelno1','$gname2','$gsig2','$grelat2','$ghomeadd2','$gtelno2','$goffadd2','$gofftelno2')";
                mysqli_query($con, $ins);
            header("location:studrecsub2.php");  
        }
    }
?>
<html>
    <head>
    </head>
    <body>
        <form action="studrecsub2.php" method="get">
    </body>
</html>
