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
            $filepatf = $_SESSION['filepatf'];
            $filepatm = $_SESSION['filepatm'];
            $filepatg1 = $_SESSION['filepatg1'];
            $filepatg2 = $_SESSION['filepatg2'];

            $sql = "select * from students where stud_id = '" . $stud_id . "'";
            $res = mysqli_query($con,$sql);
            $data = mysqli_fetch_array($res);

            $last = "select * from requests ORDER BY reqid DESC LIMIT 1";
            $res2 = mysqli_query($con,$last);
            $sy = $_SESSION['sy'];
            $name = $_SESSION['name'];
            $fname = $_SESSION['fname'];
            $miname = $_SESSION['miname'];
            $sex = $_SESSION['sex'];
            $nickname = $_SESSION['nickname'];
            $gradel = $_SESSION['gradel'];
            $section = $_SESSION['section'];
            $bdate = $_SESSION['bdate'];
            $bplace = $_SESSION['bplace'];
            $religion = $_SESSION['religion'];
            $nation = $_SESSION['nation'];
            $citiz = $_SESSION['citiz'];
            $dua = $_SESSION['dua'];
            $houseno = $_SESSION['houseno'];
            $street = $_SESSION['street'];
            $brgy = $_SESSION['brgy'];
            $town = $_SESSION['town'];
            $prov = $_SESSION['prov'];
            $congdis = $_SESSION['congdis'];
            $zip = $_SESSION['zip'];
            $telno = $_SESSION['telno'];
            $cellno = $_SESSION['cellno'];
            $email  = $_SESSION['email'];
            $prevschool = $_SESSION['prevschool'];
            $schooladd = $_SESSION['schooladd'];
            $dateofgrad = $_SESSION['dateofgrad'];
            $noofgrad = $_SESSION['noofgrad'];
            $finalave = $_SESSION['finalave'];
            $honors = $_SESSION['honors'];
            $faname = $_SESSION['faname'];
            $fsig = $filepatf;
            $fhomeadd = $_SESSION['fhomeadd'];
            $ftelno = $_SESSION['ftelno'];
            $fcitiz = $_SESSION['fcitiz'];
            $fcellno = $_SESSION['fcellno'];
            $femail  = $_SESSION['femail'];
            $foccup = $_SESSION['foccup'];
            $foff = $_SESSION['foff'];
            $foffadd = $_SESSION['foffadd'];
            $fofftelno = $_SESSION['fofftelno'];
            $mname = $_SESSION['mname'];
            $msig = $filepatm;
            $mhomeadd = $_SESSION['mhomeadd'];
            $mtelno = $_SESSION['mtelno'];
            $mcitiz = $_SESSION['mcitiz'];
            $mcellno = $_SESSION['mcellno'];
            $memail  = $_SESSION['memail'];
            $moccup = $_SESSION['moccup'];
            $moff = $_SESSION['moff'];
            $moffadd = $_SESSION['moffadd'];
            $mofftelno = $_SESSION['mofftelno'];
            $gname1 = $_SESSION['gname1'];
            $gsig1 = $filepatg1;
            $grelat1 = $_SESSION['grelat1'];
            $ghomeadd1 = $_SESSION['ghomeadd1'];
            $gtelno1 = $_SESSION['gtelno1'];
            $goffadd1= $_SESSION['goffadd1'];
            $gofftelno1 = $_SESSION['gofftelno1'];
            $gname2 = $_SESSION['gname2'];
            $gsig2 = $filepatg2;
            $grelat2 = $_SESSION['grelat2'];
            $ghomeadd2 = $_SESSION['ghomeadd2'];
            $gtelno2 = $_SESSION['gtelno2'];
            $goffadd2 = $_SESSION['goffadd2'];
            $gofftelno2 = $_SESSION['gofftelno2'];
            $gname = "";
            $gsig = "";
            $ghomeadd = "";
            $gtelno = "";
            $gcitiz = "";
            $gcellno = "";
            $gemail  = "";
            $goccup = "";
            $goff = "";
            $goffadd = "";
            $gofftelno = "";
            if(mysqli_num_rows($res) == 1){         
        // instantiate and use the dompdf class
        $dompdf = new Dompdf();

        $html = "
        <html>
        <head>
            <meta http-equiv=Content-Type content='text/html; charset=UTF-8'>
            <style type='text/css'>
            @font-face {
                font-family: ArialBold;
                src: url(vendor\dompdf\dompdf\lib\fonts\ArialBold.ttf);
            }
            span.cls_002{
                font-family:ArialBold,serif;
                font-size:10.0px;color:rgb(0,0,0);
                font-weight:normal;
                font-style:normal;
                text-decoration: none
            }
            div.cls_002{
                font-family:ArialBold,serif;
                font-size:10.0px;
                color:rgb(0,0,0);
                font-weight:normal;
                font-style:normal;
                text-decoration: none
            }
            span.cls_003{
                font-family:Arial,serif;
                font-size:10.0px;
                color:rgb(0,0,0);
                font-weight:normal;
                font-style:normal;
                text-decoration: none
            }
            div.cls_003{
                font-family:Arial,serif;
                font-size:10.0px;
                color:rgb(0,0,0);
                font-weight:normal;
                font-style:normal;
                text-decoration: none
            }
            span.cls_004{
                font-family:Arial,serif;
                font-size:9.1px;
                color:rgb(0,0,0);
                font-weight:normal;
                font-style:normal;
                text-decoration: none
            }
            div.cls_004{
                font-family:Arial,serif;
                font-size:9.1px;
                color:rgb(0,0,0);
                font-weight:normal;
                font-style:normal;
                text-decoration: none
            }
            .inputbox{
                font-size: 9px;
                overflow: hidden;
                position: absolute;
                height: 13.5px;
            }
            </style>
        </head>

        <body>
            <div style='position:absolute;left:50%;margin-left:-306px;top:-36px;width:612px;height:1008px;overflow:hidden'>
                <div style='position:absolute;left:0px;top:0px'>
                    <img src='background1.jpg' width=612 height=1010>
                </div>
                <div style='position:absolute;left:196.01px;top:35.16px' class='cls_002'>
                    <span class='cls_002'>PHILIPPINE SCIENCE HIGH SCHOOL SYSTEM</span>
                </div>
                <div style='position:absolute;left:212.33px;top:46.80px' class='cls_003'>
                    <span class='cls_003'>CAMPUS: _________________________</span>
                    <span class='inputbox' style='text-align:center;left:48px;width:140px;'>Eastern Visayas</span>
                </div>
                <div style='position:absolute;left:227.69px;top:69.60px' class='cls_002'>
                    <span class='cls_002'>STUDENT INFORMATION SHEET</span>
                </div>
                <div style='position:absolute;left:236.81px;top:92.66px' class='cls_002'>
                    <span class='cls_002'>School Year ______________</span>
                    <span class='inputbox' style='font-family:Arial,serif;text-align:center;left:50px;width:79px;'>2021-2022</span>
                </div>
                <div style='position:absolute;left:36.00px;top:115.70px' class='cls_002'>
                    <span class='cls_002'>PLEASE PROVIDE COMPLETE INFORMATION AND PRINT LEGIBLY:</span>
                </div>
                <div style='position:absolute;left:36.00px;top:138.74px' class='cls_003'>
                    <span class='cls_003'>NAME:</span>
                </div>
                <div style='position:absolute;left:78.71px;top:138.74px' class='cls_003'>
                    <span class='cls_003'>_______________________________________________________________&nbsp;&nbsp;&nbsp;&nbsp;SEX: ___________________</span>
                    <span class='inputbox' style='left:0px;width:90px;'>$name</span>
                    <span class='inputbox' style='left:90px;width:135px;'>$fname</span>
                    <span class='inputbox' style='left:225px;width:125px;'>$miname</span>
                    <span class='inputbox' style='text-align:center;right:5px;width:105px;'>$sex</span>
                </div>
                <div style='position:absolute;left:88.70px;top:150.38px' class='cls_004'>
                    <span class='cls_004'>Surname</span>
                </div>
                <div style='position:absolute;left:182.78px;top:150.38px' class='cls_004'>
                    <span class='cls_004'>Given Name</span>
                </div>
                <div style='position:absolute;left:305.19px;top:150.38px' class='cls_004'>
                    <span class='cls_004'>Middle Name</span>
                </div>
                <div style='position:absolute;left:36.00px;top:172.10px' class='cls_003'>
                    <span class='cls_003'>NICKNAME: _______________________ GRADE LEVEL:</span>
                    <span class='inputbox' style='text-align:center;left:58px;width:128px;'>$nickname</span>
                    <span class='inputbox' style='text-align:center;left:268px;width:75px;'>$gradel</span>
                </div>
                <div style='position:absolute;left:305.57px;top:172.10px' class='cls_003'>
                    <span class='cls_003'>_____________&nbsp;&nbsp;&nbsp;&nbsp;SECTION: ________________________</span>
                    <span class='inputbox' style='text-align:center;right:5px;width:135px;'>$section</span>
                </div>
                <div style='position:absolute;left:36.00px;top:195.14px' class='cls_003'>
                    <span class='cls_003'>BIRTHDATE:_________________ BIRTHPLACE: _____________________ RELIGION:_________________________</span>
                    <span class='inputbox' style='text-align:center;left:58px;width:95px;'>$bdate</span>
                    <span class='inputbox' style='text-align:center;left:225px;width:118px;'>$bplace</span>
                    <span class='inputbox' style='text-align:center;right:5px;width:140px;'>$religion</span>
                </div>
                <div style='position:absolute;left:36.00px;top:218.18px' class='cls_003'>
                    <span class='cls_003'>NATIONALITY: ______________ CITIZENSHIP: ___________________<span style='font-size:5px;'>&nbsp;</span>IF DUAL, PLS. SPECIFY __________________</span>
                    <span class='inputbox' style='text-align:center;left:72px;width:75px;'>$nation</span>
                    <span class='inputbox' style='text-align:center;left:220px;width:105px;'>$citiz</span>
                    <span class='inputbox' style='text-align:center;right:5px;width:100px;'>$dua</span>
                </div>
                <div style='position:absolute;left:36.00px;top:241.10px' class='cls_003'>
                    <span class='cls_003'>COMPLETE HOME ADDRESS</span>
                </div>
                <div style='position:absolute;left:36.00px;top:252.62px' class='cls_003'>
                    <span class='cls_003'>HOUSE NO.: _________</span>
                    <span class='inputbox' style='text-align:center;left:62px;width:50px;'>$houseno</span>
                    <span class='inputbox' style='text-align:center;left:190px;width:145px;'>$street</span>
                    <span class='inputbox' style='text-align:center;left:405px;width:135px;'>$brgy</span>
                </div>
                <div style='position:absolute;left:180.02px;top:252.62px' class='cls_003'>
                    <span class='cls_003'>STREET: __________________________&nbsp;&nbsp;&nbsp;&nbsp;BARANGAY: ________________________</span>
                </div>
                <div style='position:absolute;left:36.00px;top:275.66px' class='cls_003'>
                    <span class='cls_003'>TOWN/CITY: _______________ PROVINCE: _____________ CONGRESSIONAL DISTRICT: ____ ZIP CODE: _______</span>
                    <span class='inputbox' style='text-align:center;left:62px;width:83px;'>$town</span>
                    <span class='inputbox' style='text-align:center;left:205px;width:75px;'>$prov</span>
                    <span class='inputbox' style='text-align:center;right:100px;width:25px;'>$congdis</span>
                    <span class='inputbox' style='text-align:center;right:5px;width:40px;'>$zip</span>
                </div>
                <div style='position:absolute;left:36.00px;top:298.61px' class='cls_003'>
                    <span class='cls_003'>TELEPHONE NO.: ______________CELLPHONE NO.:&nbsp;&nbsp;_________________ E-MAIL ADDRESS:&nbsp;&nbsp;_________________</span>
                    <span class='inputbox' style='text-align:center;left:85px;width:80px;'>$telno</span>
                    <span class='inputbox' style='text-align:center;left:255px;width:95px;'>$cellno</span>
                    <span class='inputbox' style='text-align:center;right:5px;width:95px;'>$email</span>
                </div>
                <div style='position:absolute;left:36.00px;top:333.17px' class='cls_003'>
                    <span class='cls_003'>PREVIOUS SCHOOL ATTENDED _____________________________________________________________________</span>
                    <span class='inputbox' style='text-align:center;left:155px;width:385px;'>$prevschool</span>
                </div>
                <div style='position:absolute;left:36.00px;top:356.21px' class='cls_003'>
                    <span class='cls_003'>SCHOOL ADDRESS: __________________________________________________ DATE OF GRADUATION ________</span>
                    <span class='inputbox' style='text-align:center;left:98px;width:280px;'>$schooladd</span>
                    <span class='inputbox' style='text-align:center;right:5px;width:45px;font-size:7.5px;'>$dateofgrad</span>
                </div>
                <div style='position:absolute;left:36.00px;top:379.13px' class='cls_003'>
                    <span class='cls_003'>NO OF GRADUATES _______ FINAL AVERAGE _______ HONOR/S RECEIVED _______________________________</span>
                    <span class='inputbox' style='text-align:center;left:98px;width:40px;'>$noofgrad</span>
                    <span class='inputbox' style='text-align:center;left:222px;width:40px;'>$finalave</span>
                    <span class='inputbox' style='text-align:center;right:5px;width:175px;'>$finalave</span>
                </div>
                <div style='position:absolute;left:36.00px;top:400.05px' class='cls_002'>
                    <span class='cls_002'>CONTACT PERSON/S DETAILS</span>
                </div>
                <div style='position:absolute;left:286.01px;top:414.17px' class='cls_003'>
                    <span class='cls_003'>FATHER</span>
                </div>
                <div style='position:absolute;left:468.94px;top:414.17px' class='cls_003'>
                    <span class='cls_003'>MOTHER</span>
                </div>
                <div style='position:absolute;left:41.40px;top:429.17px' class='cls_003'>
                    <span class='cls_003'>NAME</span>
                    <span class='inputbox' style='text-align:center;left:165px;width:198px;'>$faname</span>
                    <span class='inputbox' style='text-align:center;left:363px;width:172px;'>$mname</span>
                </div>
                <div style='position:absolute;left:41.40px;top:449.93px' class='cls_003'>
                    <span class='cls_003'>SPECIMEN SIGNATURE</span>
                    <div class='inputbox' style='overflow:visible;text-align:center;left:165px;top:-9px;width:198px;height:23px;'>
                        <img src='$fsig' height=33px>
                    </div>
                    <div class='inputbox' style='overflow:visible;text-align:center;left:365px;top:-9px;width:170px;height:23px;'>
                        <img src='$msig' height=33px>
                    </div>
                </div>
                <div style='position:absolute;left:41.40px;top:467.69px' class='cls_003'>
                    <span class='cls_003'>HOME ADDRESS (if different from</span>
                    <span class='inputbox' style='word-wrap:break-word;text-align:left;font-size:7px;left:166px;width:197px;height:25px;'>$fhomeadd</span>
                    <span class='inputbox' style='word-wrap:break-word;text-align:left;font-size:7px;left:364px;width:171px;height:25px;'>$mhomeadd</span>
                </div>
                <div style='position:absolute;left:41.40px;top:479.11px' class='cls_003'>
                    <span class='cls_003'>above)</span>
                    </div>
                <div style='position:absolute;left:41.40px;top:492.67px' class='cls_003'>
                    <span class='cls_003'>TEL NO</span>
                    <span class='inputbox' style='text-align:center;left:165px;width:198px;'>$ftelno</span>
                    <span class='inputbox' style='text-align:center;left:363px;width:172px;'>$mtelno</span>
                </div>
                <div style='position:absolute;left:41.40px;top:509.23px' class='cls_003'>
                    <span class='cls_003'>CITIZENSHIP</span>
                    <span class='inputbox' style='text-align:center;left:165px;width:198px;'>$fcitiz</span>
                    <span class='inputbox' style='text-align:center;left:363px;width:172px;'>$mcitiz</span>
                </div>
                <div style='position:absolute;left:41.40px;top:527.23px' class='cls_003'>
                    <span class='cls_003'>CELLPHONE NO.</span>
                    <span class='inputbox' style='text-align:center;left:165px;width:198px;'>$fcellno</span>
                    <span class='inputbox' style='text-align:center;left:363px;width:172px;'>$mcellno</span>
                </div>
                <div style='position:absolute;left:41.40px;top:542.23px' class='cls_003'>
                    <span class='cls_003'>E-MAIL ADDRESS</span>
                    <span class='inputbox' style='text-align:center;left:165px;width:198px;'>$femail</span>
                    <span class='inputbox' style='text-align:center;left:363px;width:172px;'>$memail</span>
                </div>
                <div style='position:absolute;left:41.40px;top:554.23px' class='cls_003'>
                    <span class='cls_003'>OCCUPATION</span>
                    <span class='inputbox' style='text-align:center;left:165px;width:198px;'>$foccup</span>
                    <span class='inputbox' style='text-align:center;left:363px;width:172px;'>$moccup</span>
                </div>
                <div style='position:absolute;left:41.40px;top:571.99px' class='cls_003'>
                    <span class='cls_003'>OFFICE</span>
                    <span class='inputbox' style='text-align:center;left:165px;width:198px;'>$foff</span>
                    <span class='inputbox' style='text-align:center;left:363px;width:172px;'>$moff</span>
                </div>
                <div style='position:absolute;left:41.40px;top:595.51px' class='cls_003'>
                    <span class='cls_003'>OFFICE ADDRESS</span>
                    <span class='inputbox' style='text-align:center;left:165px;width:198px;'>$foffadd</span>
                    <span class='inputbox' style='text-align:center;left:363px;width:172px;'>$moffadd</span>
                </div>
                <div style='position:absolute;left:41.40px;top:613.27px' class='cls_003'>
                    <span class='cls_003'>TEL. NO.</span>
                    <span class='inputbox' style='text-align:center;left:165px;width:198px;'>$fofftelno</span>
                    <span class='inputbox' style='text-align:center;left:363px;width:172px;'>$mofftelno</span>
                </div>
                <div style='position:absolute;left:36.00px;top:648.19px' class='cls_002'>
                    <span class='cls_002'>GUARDIANS WHILE STUDYING AT PSHS- ___________________________:</span>
                    <span class='inputbox' style='font-family:Arial,serif;text-align:center;right:8px;width:150px;'>Eastern Visayas</span>
                </div>
                <div style='position:absolute;left:279.65px;top:671.71px' class='cls_003'>
                    <span class='cls_003'>GUARDIAN</span>
                </div>
                <div style='position:absolute;left:464.14px;top:671.71px' class='cls_003'>
                    <span class='cls_003'>GUARDIAN</span>
                </div>
                <div style='position:absolute;left:41.40px;top:683.74px' class='cls_003'>
                    <span class='cls_003'>NAME</span>
                    <span class='inputbox' style='text-align:center;left:165px;width:198px;'>$gname1</span>
                    <span class='inputbox' style='text-align:center;left:363px;width:172px;'>$gname2</span>
                </div>
                <div style='position:absolute;left:41.40px;top:701.50px' class='cls_003'>
                    <span class='cls_003'>SPECIMEN SIGNATURE</span>
                    
                    ";
                    if(file_exists($filepatg1)){
                        $html .= "<div class='inputbox' style='overflow:visible;text-align:center;left:165px;top:-9px;width:198px;height:70px;'><img src='$filepatg1' height=33px></div>";
                    }
                    if(file_exists($filepatg2)){
                        $html .= "<div class='inputbox' style='overflow:visible;text-align:center;left:365px;top:-9px;width:170px;height:70px;'><img src='$filepatg2' height=33px></div>";
                    }
            $html .= "
                </div>
                <div style='position:absolute;left:41.40px;top:719.26px' class='cls_003'>
                    <span class='cls_003'>RELATION TO STUDENT</span>
                    <span class='inputbox' style='text-align:center;left:165px;width:198px;'>$grelat1</span>
                    <span class='inputbox' style='text-align:center;left:363px;width:172px;'>$grelat2</span>
                </div>
                <div style='position:absolute;left:41.40px;top:737.02px' class='cls_003'>
                    <span class='cls_003'>HOME ADDRESS</span>
                    <span class='inputbox' style='word-wrap:break-word;text-align:left;font-size:7px;left:166px;top:-5px;width:197px;height:25px;'>$ghomeadd1</span>
                    <span class='inputbox' style='word-wrap:break-word;text-align:left;font-size:7px;left:364px;top:-5px;width:171px;height:25px;'>$ghomeadd2</span>
                </div>
                <div style='position:absolute;left:41.40px;top:754.78px' class='cls_003'>
                    <span class='cls_003'>TEL NO</span>
                    <span class='inputbox' style='text-align:center;left:165px;width:198px;'>$gtelno1</span>
                    <span class='inputbox' style='text-align:center;left:363px;width:172px;'>$gtelno2</span>
                </div>
                <div style='position:absolute;left:41.40px;top:772.54px' class='cls_003'>
                    <span class='cls_003'>OFFICE ADDRESS</span>
                    <span class='inputbox' style='text-align:center;left:165px;width:198px;'>$goffadd1</span>
                    <span class='inputbox' style='text-align:center;left:363px;width:172px;'>$goffadd2</span>
                </div>
                <div style='position:absolute;left:41.40px;top:790.30px' class='cls_003'>
                    <span class='cls_003'>TEL. NO.</span>
                    <span class='inputbox' style='text-align:center;left:165px;width:198px;'>$gofftelno1</span>
                    <span class='inputbox' style='text-align:center;left:363px;width:172px;'>$gofftelno2</span>
                </div>
                <div style='position:absolute;left:36.00px;top:813.82px' class='cls_003'>
                    <span class='cls_003'>NOTE TO THE STUDENT/PARENT: Please notify the REGISTRAR’S OFFICE for any change in the above information</span>
                </div>
                <div style='position:absolute;left:36.00px;top:825.22px' class='cls_003'>
                    <span class='cls_003'>during the school year.</span>
                </div>
                <div style='position:absolute;left:36.00px;top:948.84px' class='cls_002'>
                    <span class='cls_002'>PSHS-00-F-REG-03-Ver02-Rev0-02/01/20</span>
              </div>
            </div>

        </body>
        </html>

        ";
        $dompdf ->loadHtml($html);

        $dompdf ->set_option('dpi','72');


        // (optional) setup the paper size and orientation 
        $dompdf ->setPaper('Legal', 'portrait');


        // Render the HTML as PDF 
        $dompdf ->render();
        $filname = "infosheets/infosheet" . $stud_id . ".pdf";
        // output the generated PDF to Browser 

        $output = $dompdf->output();
        file_put_contents($filname, $output);
                header("location:studrec.php"); 
            }
            else{   
                header("location:adminl.php");  
            }
        }
?>