<?php  
    ob_start();
	
	// DATABASE CONNECTIVITY & DATABASE SELECTION
	$hostname = "localhost"; 
	$username = "velunivt_eventur";
	$password = "c?hPRF0W*(Lz";

	$dbhandle = mysqli_connect($hostname, $username, $password, "velunivt_events") or die("Unable to connect to Database");

	$appNum = htmlentities($_POST['applicant_number']); 
    $cname = htmlentities($_POST['cname']); 
    $yos = htmlentities($_POST['yos']); 
    $authmob1 = htmlentities($_POST['smob']); 
    $smailid = htmlentities($_POST['smailid']); 
    $location = htmlentities($_POST['location']); 
    $role = htmlentities($_POST['role']); 
    $designation = htmlentities($_POST['designation']); 
    $department = htmlentities($_POST['department']); 
    $organization = htmlentities($_POST['organization']); 
    date_default_timezone_set('Asia/Kolkata');
    $regon = date("F j, Y, g:i:s a"); //echo '<br/>'.$regon;
    
    // Settinp up Unique Number
    $nrows = mysqli_num_rows(mysqli_query($dbhandle, "SELECT * FROM software_development"));
    
    $sqlselect="SELECT applno FROM software_development ORDER BY applno DESC LIMIT 1";
        $resultdata = mysqli_query($dbhandle, $sqlselect) or die("Unable to insert"); //echo '<br/>'.$resultdata;
        $row=mysqli_fetch_assoc($resultdata);
        $refnum=$row['applno'];
        if($refnum){
            $value=explode('-',$refnum);
            $result=$value[0];
            $number=$value[1]+1;
            $appNumber=$result."-".$number;
        }else{
            $appNumber="WEBINAR-20001";
        }

        // Check if image file is a actual image or fake image
        if(isset($_POST["submit"])) {
            $sql="INSERT INTO software_development SET applno='$appNumber',name='$cname',location='$location',role='$role',mobile='$authmob1',email='$smailid',designation='$designation',department='$department',organization='$organization',yos='$yos',regon='$regon'";
            $result = mysqli_query($dbhandle, $sql) or die("Unable to insert"); //echo '<br/>'.$result;
        }
      
        if($result)
    	{        

        $to = $smailid;                            
                            $subject = 'Vel Tech - Alumni Webinar on Software Development Process and Methodology & AGILE -2020 - Reg.';
                            $from = 'alumni@veltech.edu.in';

                            // To send HTML mail, the Content-Type header must be set

                            $headers  = 'MIME-Version: 1.0' . "\r\n";
                            $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

                            // Create HEADERS

                            $headers .= 'From: '. $from . "\r\n".'Reply-To: '. $from . "\r\n" . 'X-Mailer: PHP/' . phpversion();

                            // COMPOSE a simple HTML email MESSAGE          
                            $message = ' <html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Vel Tech Rangarajan Dr.Sagunthala R&amp;D Institute of Science and Technology</title>
</head>

<body>

<table style="background-color:#fff;font-size:0;font-family:Arial,Helvetica,sans-serif" width="600" cellspacing="0" cellpadding="0">
  <tbody><tr>
<td><table style="border:1px solid #ccc" width="100%" cellspacing="0" cellpadding="0">
<tbody><tr>
<td style="background-color:#ffffff"><table width="100%" cellspacing="0" cellpadding="0">
<tbody><tr>
<td width="39" height="120"></td>
<td valign="top"><img src="https://www.veltech.edu.in/admissions_2020/veltech-university.png" alt="Vel Tech" style="padding:23px 0 0 0"></td>
</tr>
</tbody></table></td>
</tr>

<tr>
<td style="padding-bottom:10px;border-bottom:1px solid #ccc"><table width="100%" cellspacing="0" cellpadding="0">
<tbody><tr>
<td width="39"></td>

<td width="580"><table width="100%" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td style="padding:25px 0" colspan="3"><h6 style="font-family:Arial,Helvetica,sans-serif;font-size:12px;line-height:18px;color:#666;font-weight:bold;margin:0;padding:0 0 20px 0">Dear '.$cname.',</h6>

<p style="font-family:Arial,Helvetica,sans-serif;font-size:12px;line-height:17px;color:#666;font-weight:normal;margin:0; text-align:justify;padding:0;">Greetings from Vel Tech Rangarajan Dr.Sagunthala R&D Institute of Science and Technology, Avadi, Chennai.!!<br><br>
    <u>Your Registration Successfull</u> <br/><br/>  
                        
For further details, please contact us
</p></td>
</tr>
<tr>
<td colspan="3"><p style="font-family:Arial,Helvetica,sans-serif;font-size:12px;line-height:18px;color:#666;font-weight:bold;margin:0;padding:0">

Kasthuri Alumni Officer<br>
Vel Tech Rangarajan Dr.Sagunthala R&amp;D Institute of Science and Technology,<br>
(Deemed to be University Estd. u/s 3 of UGC Act, 1956) <br/>
No.42, Avadi-Vel Tech Road,<br>
Avadi, Chennai - 600 062<br>
Tamil Nadu, India.<br>
</p></td>
</tr>

<tr>
<td bgcolor="#607d8b" width="180" style="margin:2px; padding:1px;">
<p style="font-family:Arial,Helvetica,sans-serif;font-size:12px;line-height:18px;color:#FFF;font-weight:bold;margin:1px;padding:0; text-align:center;">
+91 96777 63280</p>
</td>
    <td bgcolor="#ffffff" width="180" style="margin:2px; padding:1px;">
<p style="font-family:Arial,Helvetica,sans-serif;font-size:12px;line-height:18px;color:#FFF;font-weight:bold;margin:1px;padding:0; text-align:center;">alumni@veltech.edu.in</p>
</td>
    <td bgcolor="#ffffff" width="180" style="margin:2px; padding:1px;">
<p style="font-family:Arial,Helvetica,sans-serif;font-size:12px;line-height:18px;color:#FFF;font-weight:bold;margin:1px;padding:0; text-align:center;">www.veltech.edu.in</p>
</td>

</tr>


</tbody></table></td>

<td width="39"></td>
</tr>

</tbody></table></td>
</tr>

<tr style="background-color:#f2f2f2">
<td style="padding:10px 0"><table width="100%" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td width="39"></td>
<td width="580"><p style="font-family:Arial,Helvetica,sans-serif;font-size:12px;line-height:17px;color:#666;font-weight:normal;margin:0;padding:10px 0px">
DISCLAIMER : Dear Candidate, You are receiving this email because you have registered your E-mail ID with Vel Tech Rangarajan Dr.Sagunthala R&amp;D Institute of Science and Technology(VEL TECH - Alumni Webinar 2020).
</p></td><td width="39"></td>
</tr>
</tbody></table></td>
</tr> 
</tbody></table></td>
  </tr>
  
<tr>
<td>
<table width="100%" cellspacing="0" cellpadding="0" style="margin-top:5px;">
<tbody>
<tr>
<td style="font-size:11px;color:#ccc;text-align:left" width="110">Connect with us</td>

<td style="font-size:11px;color:#ccc;text-align:right">&copy; 2020 Vel Tech Rangarajan Dr.Sagunthala R&amp;D Institute of Science and Technology</td>
</tr>
</tbody></table></td>
</tr>

</tbody></table>

</body>
                    
                     </html> ';

                            // Sending email
                            if(mail($to, $subject, $message, $headers))
                            {
                                echo '<script type="text/javascript">
                                        alert("Thank you for registering with us the details regarding our webinar will be emailed to you shortly");
                                        window.location="index.php";
                                    </script>';
                            }   

    
/*         echo "<script type='text/javascript'>
                 alert('Dear Candidate, Your details have been collected successfully. Thank you.');
                 window.location=' index.php';
             </script>";*/
        }
        else
        {
            echo '
                <script type="text/javascript>"
                    alert("Dear Candidate, Please try after sometime. Thank you.");
                    window.location = "index.php";
                </script>
            ';
        }  
            
        
    
    ?>



