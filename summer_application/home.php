


<!DOCTYPE html>
<html>
<head>
  <title></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="./css/home.css">
</head>

<body>
  
    <!-- multistep form -->
<form  id="msform fupForm" class="msform"  method="post" action="details.php">
    <img src="./image1.png" width="100%">
  <!-- progressbar -->
  <ul class="progressbar">
    <li class="active">Personal & Programme Details</li>
    <li>step</li>
    <li>step</li>
    <li>step</li>
    <li>step</li>
  </ul>
  <!-- fieldsets -->
  <fieldset data-check-id="1">
    <form id="view">
    <div class="a">
    <h2 class="fs-title" style="color: #FFF">Personal Details</h2> 
  </div>
       
  <div class="form-row">
    <div class="form-group col-md-3">
      <label for="inputEmail4">Application No*</label>
     
     <input type="text" class="form-control"  id="inputEmail4 application_number" name="application_number" placeholder="Application No" >
    </div>
    <div class="form-group col-md-3">
      <label for="inputPassword4">Name of the Candidate *</label>
      <input type="text" class="form-control" id="inputPassword4 name" name="name" placeholder="Name of the Candidate">
    </div>
    <div class="form-group col-md-3">
      <label for="inputEmail4">Father's / Guardian's Name*</label>
      <input type="text" class="form-control" id="inputEmail4 fathername" name="fathername" placeholder="Father's / Guardian's Name">
    </div>
     <div class="form-group col-md-3">
      <label for="inputEmail4">Mother's Name *</label>
      <input type="text" class="form-control" id="inputEmail4 mothername" name="mothername" placeholder="Mother's Name">
    </div>
  </div>
   <div class="form-row">
    <div class="form-group col-md-3">
      <label for="inputEmail4">Date of Birth *</label>
      <input type="date" class="form-control" id="inputEmail4 dateofbirth" name="dateofbirth" placeholder="">
    </div>
    <div class="form-group col-md-3">
      <label for="inputPassword4">Age</label>
      <input type="password" class="form-control" id="inputPassword4 age" name="age" placeholder="Your Age">
    </div>
    <div class="form-group col-md-3">
      <label for="inputEmail4">Father's / Guardian's Occupation *</label>
      <input type="email" class="form-control" id="inputEmail4 fatheroccupation" name="fatheroccupation" placeholder="Occupation">
    </div>
     <div class="form-group col-md-3">
      <label for="inputEmail4">Marital Status *</label>
     <!--  <input type="email" class="form-control" id="inputEmail4" placeholder="Email"> -->
     <select id="inputState maritalstatus" name="maritalstatus" class="form-control">
        <option selected>--- Select ---</option>
        <option>Married</option>
        <option>Unmarried</option>
        <option>Divorced</option>
        <option>Widowed</option>
      </select>
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-3">
      <label for="inputEmail4">Gender *</label>
      <select id="inputState gender" name="gender" class="form-control">
        <option selected>--- Select ---</option>
        <option>Male</option>
        <option>Female</option>
        <option>Transgender</option>
      </select>
    </div>
    <div class="form-group col-md-3">
      <label for="inputPassword4">Mother Tongue *</label>
      <select id="inputState  mothertongue" name="mothertongue" class="form-control">
        <option selected>Choose...</option>
     <!--  <select class="form-control" name="mtongue" id="mtongue" onchange="chngmtong(this.value);" required=""> -->

                                              <option value="" disabled="" selected="">--- Select --- </option>
                                              <option value="Assamese/Axomiya">Assamese/Axomiya</option>
                                              <option value="Bengali">Bengali</option>
                                              <option value="Bodo">Bodo</option>
                                              <option value="Dogri">Dogri</option>
                                              <option value="Gujarati">Gujarati</option>
                                              <option value="Hindi">Hindi</option>
                                              <option value="Kannada">Kannada</option>
                                              <option value="Kashmiri">Kashmiri</option>
                                              <option value="Konkani">Konkani</option>
                                              <option value="Maithili">Maithili</option>
                                              <option value="Malayalam">Malayalam</option>
                                              <option value="Manipuri">Manipuri</option>
                                              <option value="Marathi">Marathi</option>
                                              <option value="Nepali">Nepali</option>
                                              <option value="Oriya">Oriya</option>
                                              <option value="Punjabi">Punjabi</option>
                                              <option value="Sanskrit">Sanskrit</option>
                                              <option value="Santhali">Santhali</option>
                                              <option value="Sindhi">Sindhi</option>
                                              <option value="Tamil">Tamil</option>
                                              <option value="Telugu">Telugu</option>
                                              <option value="Urdu">Urdu</option>
                                              <option value="Others">Others</option>
                                         <!--  </select> -->
      </select>
    </div>
    <div class="form-group col-md-3">
      <label for="inputEmail4">Religion </label>
      <select id="inputState religion" name="religion" class="form-control">
         <option value="" disabled="" selected="">--- Select --- </option>
                                             <!-- <option value="Buddhism">Buddhism</option>-->
                                              <option value="Christian">Christian</option>
                                              <option value="Hindu">Hindu</option>
                                              <option value="Islam">Islam</option>
                                              <option value="Jain">Jain</option>
                                             <!-- <option value="Judaism">Judaism</option>
                                              <option value="Sikhism">Sikhism</option>
                                              <option value="Zoroastrianism">Zoroastrianism</option>-->
                                              <option value="Others">Others</option>
      </select>
    </div>
     <div class="form-group col-md-3">
      <label for="inputEmail4 ">Community </label>
     <select id="inputState community" name="community" class="form-control">                                     
         <!-- <select class="form-control" name="commnty" id="commnty" onchange="showcomm(this.value)" required=""> -->
                                              <option value="" disabled="" selected="">--- Select ---</option>
                                              <option value="General">General</option>
                                              <option value="OBC creamy layer">OBC creamy layer</option>
                                              <option value="OBC non creamy layer">OBC non creamy layer</option>
                                              <option value="SC">SC</option>
                                              <option value="ST">ST</option> 
                                          </select>                               
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputCity">Nationality *</label>
      <input type="text" class="form-control" id="inputCity   nationality" name=" nationality" placeholder="Nationality">
    </div>
    <div class="form-group col-md-4">
      <label for="inputZip">Aadhaar No. (Proof to be enclosed)</label>
      <input type="text"  class="form-control" id="inputZip aadhaar" name="aadhaar" placeholder="Aadhaar No">
    </div>
  </div>


<!-- contectetails -->
   <div class="a">
    <h2 class="fs-title" style="color: #FFF">Contact Details</h2> 
  </div>
    <div class="form-row">
    <div class="form-group col-md-3">
      <label for="inputEmail4">Door No. *</label>
      <input type="text" class="form-control" id="inputEmail4 door" name="door" placeholder="Door No">
    </div>
    <div class="form-group col-md-3">
      <label for="inputPassword4">Street / Area Name *</label>
      <input type="text" class="form-control" id="inputPassword4 street" name="street" placeholder="Street / Area Name">
    </div>
    <div class="form-group col-md-3">
      <label for="inputEmail4">City *</label>
      <input type="text" class="form-control" id="inputEmail4   city" name="  city" placeholder="City">
    </div>
     <div class="form-group col-md-3">
      <label for="inputEmail4">State / Union territory *</label>
      <!-- <input type="text" class="form-control" id="inputEmail4" placeholder="Mother's Name"> -->
           <select id="inputState state" name="state" class="form-control">                                     
<!--       <select class="form-control" id="state" name="state" required="">
 -->                                                <option value="" selected="">--- Select ---</option>                                        
                                                <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option> 
                                                <option value="Andhra Pradesh">Andhra Pradesh </option>
                                                <option value="Arunachal Pradesh">Arunachal Pradesh </option>
                                                <option value="Assam">Assam </option>
                                                <option value="Bihar">Bihar </option>
                                                <option value="Chandigarh"> Chandigarh </option>
                                                <option value="Chhattisgarh"> Chhattisgarh </option>
                                                <option value="Delhi">  Delhi</option>
                                                <option value="Dadra and Nagar Haveli"> Dadra and Nagar Haveli</option>
                                                <option value="Daman and Diu"> Daman and Diu  </option>
                                                <option value="Goa"> Goa </option>
                                                <option value="Gujarat"> Gujarat </option>
                                                <option value="Haryana">  Haryana </option>
                                                <option value="Himachal Pradesh">  Himachal Pradesh </option>
                                                <option value="Jammu and Kashmir"> Jammu and Kashmir </option>
                                                <option value="Jharkhand"> Jharkhand </option>
                                                <option value="Karnataka"> Karnataka </option>
                                                <option value="Kerala"> Kerala </option>
                                                <option value="Lakshadweep">Lakshadweep</option>
                                                <option value="Madhya Pradesh"> Madhya Pradesh </option>
                                                <option value="Maharashtra"> Maharashtra </option>
                                                <option value="Manipur"> Manipur </option>
                                                <option value="Meghalaya"> Meghalaya </option>
                                                <option value="Mizoram"> Mizoram </option>
                                                <option value="Nagaland "> Nagaland </option>
                                                <option value="Orissa"> Orissa </option>
                                                <option value="Puducherry">  Puducherry </option>
                                                <option value="Punjab">Punjab </option>
                                                <option value="Rajasthan"> Rajasthan </option>
                                                <option value="Sikkim"> Sikkim </option>
                                                <option value="Tamil Nadu"> Tamil Nadu </option>
                                                <option value="Tripura"> Tripura </option>
                                                <option value="Telangana"> Telangana </option>
                                                <option value="Uttar Pradesh"> Uttar Pradesh </option>
                                                <option value="Uttarakhand"> Uttarakhand </option>
                                                <option value="West Bengal"> West Bengal </option>
                                          </select>
    </div>
  </div>
   <div class="form-row">
    <div class="form-group col-md-3">
      <label for="inputEmail4">Country *</label>
      <input type="text" class="form-control" id="inputEmail4 country" name="country" placeholder="Country">
    </div>
    <div class="form-group col-md-3">
      <label for="inputPassword4">PIN/ZIP Code *</label>
      <input type="number" class="form-control" id="inputPassword4 pincode" name="pincode" placeholder="PIN/ZIP Code">
    </div>
    <div class="form-group col-md-3">
      <label for="inputEmail4">Mobile No. *</label>
      <input type="text" class="form-control" id="inputEmail4 mobilenumber" name="mobilenumber" placeholder="Mobile No">
    </div>
     <div class="form-group col-md-3">
      <label for="inputEmail4">Email ID *</label>
      <input type="email" class="form-control" id="inputEmail4  email" name=" email" placeholder="Email ID">
    </div>
  </div>

   <div class="form-row">
    <div class="form-group col-md-3">
      <label for="inputEmail4">Proposed area of Research *</label>
      <input type="text" class="form-control" id="inputEmail4 area" name="area" placeholder="Proposed area of Research *">
    </div>
  </div>

<!-- Research Supervisor Details -->

<div class="a">
    <h2 class="fs-title" style="color: #FFF">Research Supervisor Details</h2> 
  </div>
      
<div class="form-row">
    <div class="form-group col-md-3">
      <label for="inputEmail4">Preference 1</label>
      <input type="text" class="form-control" id="inputEmail4 Preference1" name="Preference1" placeholder="Research Supervisor name">
    </div>
    <div class="form-group col-md-3">
      <label for="inputPassword4">Preference 2</label>
      <input type="text" class="form-control" id="inputPassword4 Preference2" name="Preference2" placeholder="Research Supervisor name">
    </div>
    <div class="form-group col-md-3">
      <label for="inputEmail4">Preference 3</label>
      <input type="text" class="form-control" id="inputEmail4 Preference3" name="Preference3" placeholder="Research Supervisor name">
    </div>
    <div class="form-group b">
         <label></label>
          <a href="https://veltech.edu.in/phd_application/phd/download/Supervisor%20Vacancy%20Positions%20with%20specialization.pdf" class="btn btn-primary btn-sm " role="button" aria-pressed="true" style="margin-top:27px;" target="_blank">Refer Details</a>
     </div>
  </div>
   

   <!-- Details of Qualifying Degree (Post Graduation) -->



<div class="a">
    <h2 class="fs-title" style="color: #FFF">Details of Qualifying Degree (Post Graduation)</h2> 
  </div>




 <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputEmail4">Mode*</label>
     <!--  <input type="text" class="form-control" id="inputEmail4" placeholder="Application No"> -->
              <select id="inputState post_mode" name="post_mode" class="form-control">                                     

                                            
                                <option value="" disabled="" selected="">--- Select Mode ---</option>
                                            
                                <option value="Full Time">Full Time</option> 
                              <option value="Part Time">Part Time</option>
                              
                                        </select>
    </div>
    <div class="form-group col-md-4">
      <label for="inputPassword4">University Name*</label>
      <input type="text" class="form-control" id="inputPassword4 post_universityname" name="post_universityname" placeholder="Name of the University">
    </div>
    <div class="form-group col-md-4">
      <label for="inputEmail4">Name of the College / Institution*</label>
      <input type="text" class="form-control" id="inputEmail4 post_collegename" name="post_collegename" placeholder="Name of the College / Institution">
    </div>
      <div class="form-group col-md-4">
      <label for="inputEmail4">Degree completed *</label>
     <!--  <input type="text" class="form-control" id="inputEmail4" placeholder="Application No"> -->
              <select id="inputState post_degree" name="post_degree" class="form-control">                                     

                                            
                               <!-- <select class="form-control" name="pgdegree" id="pgdegree" onchange="changeugdegree(this.value);" required=""> -->
                                              <option value="" disabled="" selected="">--- Select ---</option>
                                              <option value="M.E">M.E</option> 
                                          <option value="M.Tech.">M.Tech.</option>
                                          <option value="M.S.(Research)">M.S.(Research)</option>
                                          <option value="MBA">MBA</option>
                                          <option value="M.Phil">M.Phil</option>
                                          <option value="M.Sc.">M.Sc.</option>
                                          <option value="M.A.">M.A.</option>
                                          <option value="M.C.A">M.C.A</option>
                                          <option value="M.L.">M.L.</option>
                                          <option value="LL.M.">LL.M.</option>
                                              <!--<option value="M.E.">M.E.</option>-->
                                              <!--<option value="M.Tech.">M.Tech.</option>-->
                                              <!--<option value="M.B.A.">M.B.A.</option>-->
                                              <!--<option value="M.Phil.">M.Phil.</option>-->
                                              <!--<option value="M.Sc.">M.Sc.</option>-->
                                              <!--<option value="M.A.">M.A.</option>-->
                                              <!--<option value="Others">Others</option>-->
                                          </select>
    </div>
     <div class="form-group col-md-4">
      <label for="inputPassword4">Specialization*</label>
      <input type="text" class="form-control" id="inputPassword4 post_specialization" name="post_specialization" placeholder="Name of the Specialization">
    </div>
     <div class="form-group col-md-4">
      <label for="inputPassword4">Year of Passing (Qualifying Degree)*</label>
      <input type="text" class="form-control" id="inputPassword4 post_YearofPassing" name="post_YearofPassing" placeholder="MM/YYYY">
    </div>
     <div class="form-group col-md-4">
      <label for="inputPassword4">% of Marks/CGPA*</label>
      <input type="text" class="form-control" id="inputPassword4 post_cgpa" name="post_cgpa" placeholder="% of Marks/CGPA*">
    </div>
     <div class="form-group col-md-4">
      <label for="inputPassword4">Certificate No *</label>
      <input type="text" class="form-control" id="inputPassword4  post_certificatenumber" name="  post_certificatenumber" placeholder="Certificate No">
    </div>
     <div class="form-group col-md-4">
      <label for="inputPassword4">Do you have are valid score of national leveleligibility test*</label>
                    <select id="inputState post_nationalscore" name="post_nationalscore" class="form-control">                                     

     <!-- <select class="form-control" name="scores" id="scores" onchange="getscores(this.value);" required=""> -->
                                              
                                              <option value="" selected="" disabled="">Select the national level eligibility test</option>
                                              <option value="UGC">UGC</option>
                                              <option value="CSIR(JRF)">CSIR(JRF)</option>
                                              <option value="NET">NET</option>
                                              
                                              <option value="SLET">SLET</option>
                                              <option value="Teacher Fellowship">Teacher Fellowship</option>
                                              <option value="Other National Level Eligibility Test">Other National Level Eligibility Test</option>
                                              
                                              <option value="Not Applicable">Not Applicable</option>
                                              
                                          </select>
    </div>
  </div>








<div class="a">
    <h2 class="fs-title" style="color: #FFF">Details of Qualifying Degree (Under Graduation)</h2> 
  </div>




 <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputEmail4">Mode*</label>
     <!--  <input type="text" class="form-control" id="inputEmail4" placeholder="Application No"> -->
              <select id="inputState under_mode" name="under_mode" class="form-control">                                     

                                            
                                <option value="" disabled="" selected="">--- Select Mode ---</option>
                                            
                                <option value="Full Time">Full Time</option> 
                              <option value="Part Time">Part Time</option>
                              
                                        </select>
    </div>
    <div class="form-group col-md-4">
      <label for="inputPassword4">University Name*</label>
      <input type="text" class="form-control" id="inputPassword4 under_universityname" name="under_universityname" placeholder="Name of the University">
    </div>
    <div class="form-group col-md-4">
      <label for="inputEmail4">Name of the College / Institution*</label>
      <input type="text" class="form-control" id="inputEmail4   under_collegename" name=" under_collegename" placeholder="Name of the College / Institution">
    </div>
      <div class="form-group col-md-4">
      <label for="inputEmail4">Degree completed *</label>
     <!--  <input type="text" class="form-control" id="inputEmail4" placeholder="Application No"> -->
              <select id="inputState under_degree" name="under_degree" class="form-control">                                     

                                            
                               <!-- <select class="form-control" name="pgdegree" id="pgdegree" onchange="changeugdegree(this.value);" required=""> -->
                                              <option value="" disabled="" selected="">--- Select ---</option>
                                              <option value="M.E">M.E</option> 
                                          <option value="M.Tech.">M.Tech.</option>
                                          <option value="M.S.(Research)">M.S.(Research)</option>
                                          <option value="MBA">MBA</option>
                                          <option value="M.Phil">M.Phil</option>
                                          <option value="M.Sc.">M.Sc.</option>
                                          <option value="M.A.">M.A.</option>
                                          <option value="M.C.A">M.C.A</option>
                                          <option value="M.L.">M.L.</option>
                                          <option value="LL.M.">LL.M.</option>
                                              <!--<option value="M.E.">M.E.</option>-->
                                              <!--<option value="M.Tech.">M.Tech.</option>-->
                                              <!--<option value="M.B.A.">M.B.A.</option>-->
                                              <!--<option value="M.Phil.">M.Phil.</option>-->
                                              <!--<option value="M.Sc.">M.Sc.</option>-->
                                              <!--<option value="M.A.">M.A.</option>-->
                                              <!--<option value="Others">Others</option>-->
                                          </select>
    </div>
     <div class="form-group col-md-4">
      <label for="inputPassword4">Specialization*</label>
      <input type="text" class="form-control" id="inputPassword4  under_specialization" name="under_specialization" placeholder="Name of the Specialization">
    </div>
     <div class="form-group col-md-4">
      <label for="inputPassword4">Year of Passing (Qualifying Degree)*</label>
      <input type="text" class="form-control" id="inputPassword4  under_yearofpassing" name="  under_ yearofpassing" placeholder="MM/YYYY">
    </div>
     <div class="form-group col-md-4">
      <label for="inputPassword4">% of Marks/CGPA*</label>
      <input type="text" class="form-control" id="inputPassword4 under_cgpa" name="under_cgpa" placeholder="% of Marks/CGPA*">
    </div>
     <div class="form-group col-md-4">
      <label for="inputPassword4">Certificate No *</label>
      <input type="text" class="form-control" id="inputPassword4 under_certificateno" name="under_certificateno" placeholder="Certificate No">
    </div>
    
  </div>



      
      <div class="fs-wrapper-btn">
        <!-- <input type="button" name="next" class="next action-button" value="Next">  -->
         <input type="submit" name="next" class="next action-button" value="Next" id="butsave"></input>      
      </div>


</body>
</form>

<script>
$(document).ready(function() {
  $('#butsave').on('click', function() {
    $("#butsave").attr("disabled", "disabled");
    var application_number = $('#application_number').val();
    var name = $('#name').val();
    var fathername = $('#fathername').val();
    var mothername = $('#mothername').val();
    var dateofbirth = $('#dateofbirth').val();
    var age = $('#age').val();
    var fatheroccupation = $('#fatheroccupation').val();
    var maritalstatus = $('#maritalstatus').val();
    var gender = $('#gender').val();
    var mothertongue= $('# mothertongue').val();
    var religion = $('#religion').val();
    var community = $('#community').val();
    var nationality = $('#nationality').val();
    var aadhaar = $('#aadhaar').val();
    var door = $('# door').val();
    var street = $('# street').val();
    var city = $('# city').val();
    var state = $('#state').val();
    var country = $('#country').val();
    var pincode = $('#pincode').val();
    var mobilenumber = $('#mobilenumber').val();
    var email = $('#email').val();
    var area = $('#area').val();
    var Preference1 = $('#Preference1').val();
    var Preference2 = $('#Preference2').val();
    var Preference3 = $('#Preference3').val();
    var Preference3 = $('#Preference3').val();
    var post_mode = $('#post_mode').val();
    var post_universityname= $('#post_universityname').val();
    var post_degree= $('# post_degree').val();
    var post_specialization= $('#post_specialization').val();
    var post_YearofPassing= $('#post_YearofPassing').val();
    var post_cgpa= $('#post_cgpa').val();
    var post_certificatenumber= $('#post_certificatenumber').val();
    var post_nationalscore= $('#post_nationalscore').val();
    var under_mode= $('#under_mode').val();
    var under_universityname= $('#under_universityname').val();
    var under_collegename= $('#under_collegename').val();
    var under_degree= $('#under_degree').val();
    var under_specialization= $('#under_specialization').val();
    var under_ yearofpassing= $('#under_ yearofpassing').val();
    var under_cgpa= $('#under_cgpa').val();
    var under_certificateno= $('#under_certificateno').val();


    if(application_number!="" && name!="" && fathername!="" && mothername!=""  && dateofbirth!=""  && age!=""  && fatheroccupation!=""  && maritalstatus!=""  && gender!=""  && mothertongue!=""  && religion!=""  && community!=""  && nationality!=""  && aadhaar!=""  && door!=""  && street!=""  && city!=""  && state!=""  && country!=""  && pincode!=""  && mobilenumber!=""  && email!=""  && area!=""  && Preference1!=""  && Preference2!=""  && Preference3!=""  && post_mode!=""  && post_universityname!=""  post_collegename!=""  &&  post_degree!=""  && post_specialization!=""  && post_YearofPassing!=""  && post_cgpa!=""  && post_certificatenumber!=""  && post_nationalscore!=""  && under_mode!=""  && under_universityname!=""  && under_collegename!=""  && under_degree!=""  && under_specialization!=""  && under_ yearofpassing!=""  && under_cgpa!=""  && under_certificateno!=""){
      $.ajax({
        url: "details.php",
        type: "POST",
        data: {
          application_number: application_number,
          name: name,
          fathername: fathername,
          mothername: mothername,
          dateofbirth: dateofbirth,
          age: age,
          fatheroccupation: fatheroccupation,
          maritalstatus: maritalstatus,
          gender: gender,
          mothertongue: mothertongue,
          religion: religion,
          community:  community,
          nationality: nationality,
          aadhaar: aadhaar,
          door: door,
          street: street,
          city: city,
          state:  state,
          country:  country,
          pincode: pincode,
          mobilenumber:mobilenumber,
          email:  email,
          area: area,
          Preference1: Preference1,
          Preference2: Preference2,
          Preference3: Preference3,
          

          post_mode: post_mode,
          post_universityname: post_universityname,
          post_collegename: post_collegename,
          post_degree: post_degree,
          post_specialization: post_specialization,
          post_YearofPassing: post_YearofPassing,
          
          post_cgpa:  post_cgpa,
          post_certificatenumber:  post_certificatenumber,
          post_nationalscore: post_nationalscore,
          


          under_mode: under_mode,
          under_universityname:  under_universityname,
          under_collegename: under_collegename,
          under_degree:  under_degree,
          under_specialization: under_specialization,
          under_ yearofpassing: under_ yearofpassing,
          under_cgpa:  under_cgpa,
          under_certificateno: under_certificateno
                  

        },
        cache: false,
        success: function(dataResult){
          var dataResult = JSON.parse(dataResult);
          if(dataResult.statusCode==200){
            $("#butsave").removeAttr("disabled");
            $('#fupForm').find('input:text').val('');
            $("#success").show();
            $('#success').html('Data added successfully !');            
          }
          else if(dataResult.statusCode==201){
             alert("Error occured !");
          }
          
        }
      });
    }
    else{
      alert('Please fill all the field !');
    }
  });
});


</script>

  






<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script type="text/javascript" src="./js/home.js">
 


</html>






