<?php
 include 'dbconnect.php';

  $application_number=$_POST['application_number'];
  $name=$_POST['name'];
  $fathername=$_POST['fathername'];
  $mothername=$_POST['mothername'];
  $dateofbirth=$_POST['dateofbirth'];
  $age=$_POST['age'];
  $fatheroccupation=$_POST['fatheroccupation'];
  $maritalstatus=$_POST['maritalstatus'];
  $gender=$_POST['gender'];
  $mothertongue=$_POST['mothertongue'];
  $religion=$_POST['religion'];
  $community=$_POST['community'];
  $nationality=$_POST['nationality'];
  $aadhaar=$_POST['aadhaar'];
  $door=$_POST['door'];
  $street=$_POST['street'];
  $city=$_POST['city'];
  $state=$_POST['state'];
  $country=$_POST['country'];
  $pincode=$_POST['pincode'];
  $mobilenumber=$_POST['mobilenumber'];
  $email=$_POST['email'];
  $area=$_POST['area'];
  $Preference1=$_POST['Preference1'];
  $Preference2=$_POST['Preference2'];
  $Preference3=$_POST['Preference3'];
  $post_mode=$_POST['post_mode'];
  $post_universityname=$_POST['post_universityname'];
  $post_collegename=$_POST['post_collegename'];
  $post_degree=$_POST['post_degree'];
  $post_specialization=$_POST['post_specialization'];
  $post_YearofPassing=$_POST['post_specialization'];
  $post_cgpa=$_POST['post_cgpa'];
  $post_certificatenumber=$_POST['post_certificatenumber'];
  $post_nationalscore=$_POST['post_nationalscore'];
  $under_mode=$_POST['under_mode'];
  $under_universityname=$_POST['under_universityname'];
  $under_collegename=$_POST['under_collegename'];
  $under_degree=$_POST['under_degree'];
  $under_specialization=$_POST['under_specialization'];
  $under_yearofpassing=$_POST['under_yearofpassing'];
  $under_cgpa=$_POST['under_cgpa'];
  $under_certificateno=$_POST['under_certificateno'];
 

   $sql = "INSERT INTO `student_details`(`application_number`, `name`, `fathername`, `mothername`, `dateofbirth`, `age`, `fatheroccupation`, `maritalstatus`, `gender`, `mothertongue`, `religion`, `community`, `nationality`, `aadhaar`, `door`, `street`, `city`, `state`, `country`, `pincode`, `mobilenumber`, `email`, `area`, `Preference1`, `Preference2`, `Preference3`, `post_mode`, `post_universityname`, `post_collegename`, `post_degree`, `post_specialization`, `post_YearofPassing`, `post_cgpa`, `post_certificatenumber`, `post_nationalscore`, `under_mode`, `under_universityname`, `under_collegename`, `under_degree`, `under_specialization`, `under_ yearofpassing`, `under_cgpa`, `under_certificateno`) VALUES ('$application_number','$name',' $fathername','$mothername',' $dateofbirth','$age','$fatheroccupation',' $maritalstatus','$gender','$mothertongue','$religion',' $community','$nationality','$aadhaar','$door','$street','$city','$state','$country','$pincode','$mobilenumber','$email','$area','$Preference1','$Preference2','$Preference3','$post_mode','  $post_universityname','$post_collegename','$post_degree','$post_specialization','$post_YearofPassing','$post_cgpa','$post_certificatenumber','$post_nationalscore','$under_mode','$under_universityname',' $under_collegename','$under_degree','$under_specialization',' $under_yearofpassing','$under_cgpa','$under_certificateno')";


  if (mysqli_query($conn, $sql)) {
    
    echo "Succssfully Inserted";
    header("location:home2.php");
  } 

  else {
    echo  "Failed";
  }
  // mysqli_close($conn);


?>


















 
