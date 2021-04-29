

  <?php
  session_start();
  
  include 'dbconnect.php';
   // $_SESSION['id']=$i['id'];
foreach($_POST['mode[]'] as $mode){
  echo $mode . "<br/>";
  $mode=$_POST['mode'];
    }

  $designation=$_POST['designation'];
  $Institution=$_POST['Institution'];
  $workperiod=$_POST['workperiod'];
  $totalyears=$_POST['totalyears'];



  $school=$_POST['school'];
  
  $Author=$_POST['Author'];
  $Paper=$_POST['Paper'];
  $Publisher=$_POST['Publisher'];
  $Issueno=$_POST['Issueno'];
  $yearofpublished=$_POST['yearofpublished'];


if($_FILES['uploada']['name']){
    move_uploaded_file($_FILES['uploada']['tmp_name'], "image/".$_FILES['uploada']['name']);
    $imga="image/".$_FILES['uploada']['name'];
  }
 
    
if($_FILES['uploadb']['name']){
    move_uploaded_file($_FILES['uploadb']['tmp_name'], "image/".$_FILES['uploadb']['name']);
    $imgb="image/".$_FILES['uploadb']['name'];
  }
 

 

if($_FILES['uploada']['name']){
    move_uploaded_file($_FILES['uploadc']['tmp_name'], "image/".$_FILES['uploadc']['name']);
    $imgc="image/".$_FILES['uploadc']['name'];
  }
 


 

if($_FILES['uploada']['name']){
    move_uploaded_file($_FILES['uploadd']['tmp_name'], "image/".$_FILES['uploadd']['name']);
    $imgd="image/".$_FILES['uploadd']['name'];
  }
 



if($_FILES['uploada']['name']){
    move_uploaded_file($_FILES['uploade']['tmp_name'], "image/".$_FILES['uploade']['name']);
    $imge="image/".$_FILES['uploade']['name'];
  }
 







if($_FILES['uploada']['name']){
    move_uploaded_file($_FILES['uploadf']['tmp_name'], "image/".$_FILES['uploadf']['name']);
    $imgf="image/".$_FILES['uploadf']['name'];
  }
 



if($_FILES['uploada']['name']){
    move_uploaded_file($_FILES['uploadg']['tmp_name'], "image/".$_FILES['uploadg']['name']);
    $imgg="image/".$_FILES['uploadg']['name'];
  }
 
 

 $sql=mysqli_query($conn,"INSERT INTO `student_details`(`mode`,`designation`,`Institution`,`workperiod`,`totalyears`,`school`,`Author`,`Paper`,`Publisher`,`Issueno`,`yearofpublished`,`Photograph`,`Signature`,`sslc_equivalent`,`hsc_equivalent`,`ug_Degree_Certificate`,`pg_degree_certificate`,`transfer_certificate`) VALUES('$mode','$designation','$Institution','$workperiod','$totalyears','$school','$Author','$Paper','$Publisher','$Issueno','$yearofpublished','$imga','$imgb','$imgc','$imgd','$imge','$imgf','$imgg')");
 //  die();


// $sql="INSERT INTO `student_details`(`mode`,`designation`,`Institution`,`workperiod`,`totalyears`,`school`,`Author`,`Paper`,`Publisher`,`Issueno`,`yearofpublished`,`Photograph`,`Signature`,`sslc_equivalent`,`hsc_equivalent`,`ug_Degree_Certificate`,`pg_degree_certificate`,`transfer_certificate`,`time`) VALUES('$mode','$designation','$Institution','$workperiod','$school','$Author','$Paper','$Publisher','$Issueno','$yearofpublished','$imga','$imgb','$imgc','$imgd','$imge','$imgf','$imgg')";






if ($sql){
    
    echo "Succssfully Inserted";
    header("location:home3.php");
  } 

  else {
    echo  "Failed";
  }


    ?>
<?php


// $valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'bmp' , 'pdf' , 'doc' , 'ppt'); 
// $path = 'transfer_certificate/'; 

// $img = $_FILES['uploadg']['name'];
// $tmp = $_FILES['uploadg']['tmp_name'];

// $ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));

// $final_image = rand(1000,1000000).$img;

// if(in_array($ext, $valid_extensions)){ 
// }
// $pathg = $path.strtolower($final_image); 
// if(move_uploaded_file($tmp,$path)){
// }
// print_r("expression");
// exit;
// $sql="INSERT INTO student_details(mode,designation,Institution,workperiod,totalyears,school,Author,Paper,Publisher,Issueno,yearofpublished,Photograph,Signature,sslc_equivalent,hsc_equivalent,ug_Degree_Certificate,pg_degree_certificate,transfer_certificate)VALUES('$mode','$designation','$Institution','$workperiod','$totalyears','$school','$Author','$Paper','$Publisher','$Issueno','$yearofpublished','$imga','$imgb','$imgc','$imgd','$imge','$imgf','$imgg')";












    // echo "INSERT INTO `student_details`(`mode`,`designation`,`Institution`,`workperiod`,`totalyears`,`school`,`Author`,`Paper`,`Publisher`,`Issueno`, `yearofpublished`, `Photograph`, `Signature`, `sslc_equivalent`, `hsc_equivalent`, `ug_Degree_Certificate`, `pg_degree_certificate`, `transfer_certificate`, `time`) VALUES ('$mode','$designation','$Institution','$workperiod','$school','$Author','$Paper','$Publisher','$Issueno','$yearofpublished','$imga','$imgb','$imgc','$imgd','$imge','$imgf','$imgg')";

// die();

// $sql="UPDATE `student_details` SET `mode`='$mode',`designation`= '$designation',`Institution`='$Institution',`workperiod`= '$workperiod',`totalyears`= '$totalyears',`school`='$school',`Author`='$Author',`Paper`= '$Paper',`Publisher`='$Publisher',`Issueno`='$Issueno',`yearofpublished`= '$yearofpublished',`Photograph`='$imga',`Signature`='$imgb',`sslc_equivalent`='$imgc',`hsc_equivalent`='$imgd',`ug_Degree_Certificate`='$imge',`pg_degree_certificate`='$imgf',`transfer_certificate`='$imgg' WHERE `id`='$i['id']'";


// echo "UPDATE `student_details` SET `mode`='$mode',`designation`= '$designation',`Institution`='$Institution',`workperiod`= '$workperiod',`totalyears`= '$totalyears',`school`='$school',`Author`='$Author',`Paper`= '$Paper',`Publisher`='$Publisher',`Issueno`='$Issueno',`yearofpublished`= '$yearofpublished',`Photograph`='$imga',`Signature`='$imgb',`sslc_equivalent`='$imgc',`hsc_equivalent`='$imgd',`ug_Degree_Certificate`='$imge',`pg_degree_certificate`='$imgf',`transfer_certificate`='$imgg' WHERE '$id'";

// die();
?>