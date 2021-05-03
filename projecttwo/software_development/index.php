<!DOCTYPE html>
<html lang="en">
    <!-------------------------------------- Start Head Section Part----------------------------------->
    <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Vel Tech - Alumni Webinar on Software Development Process and Methodology</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="assets/css/custom.css" rel="stylesheet" type="text/css"/>
    <link href="assets/css/datepicker.css" rel="stylesheet" type="text/css"/>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

    <style type="text/css">
    	#success_message
    	{ 
    		display: none;
    	}
    </style>
    <script type="text/javascript">
        $( document ).ready(function() {
            $("#regfee").val('200');
        });
        function trimSpaces1(){
    	   s = document.getElementById("authaddress").value;
    	   s = s.replace(/(^\s*)|(\s*$)/gi,"");
    	   s = s.replace(/[ ]{2,}/gi," ");
    	   s = s.replace(/\n /,"\n");
    	   document.getElementById("authaddress").value = s;
        }
       /* function fixfee(){
            var cate = document.getElementById('cate').value; //alert('Category '+cate);

            if((cate == "Industry Person")){
                 $("#regfee").val('1500');
            }else if( (cate == "Faculty") ){
                $("#regfee").val('1000');
            }else if( (cate == "Research Scholar / PG Student") ){
                $("#regfee").val('750');
            }
        }*/
    </script>
    </head>
   <!-------------------------------------- End Head Section Part----------------------------------->
   
<!-------------------------Start Body Section Part----------------------------------->
<body oncontextmenu="return false">
<!-------------------------------Start Top Panel Head Part--------------------------->
    <div class="top-head">
      <div class="container">
        <div class="row">
          <div class="toplist_left">
            <ul>
             <li>Help Desk No : +91 96777 63280</li>
             <li class="active">E-mail ID : alumni@veltech.edu.in</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
<!---------------------------End Top Panel Head Part---------------------------------> 
  
<!-------------------------Start Top Logo Part-------------------------------------->
    <div class="container">
      <div class="row">
        <div class="logo"><a href="https://veltech.edu.in"><img src="assets/img/logo.jpg" class="img-responsive" /></a></div>
      </div>
    </div>
<!---------------------------End Top Logo Part--------------------------------------------------->

<!-------------------------------------------Start INDEX FORM SECTION Part ------------------------------------------>
<section style="background:#FFF;">
    <div class="board"> 
        <div class="board-inner">
            <ul class="nav nav-tabs" id="myTab"> </ul>
        </div>
        <div class="container">
            <div class="row">
                <div class="tab-content">
                    <!--Registration FORM-->
                    <div class="container">
                        <!----------------------------------------Start Tittle----------------------------------------------->
            	        <div class="topBreadcrumbs1" style="height:120%;">
                        	 <h3>IoT Towards machine learning</h3>
            	            
            	        </div>
            	        <!------------------------------------------End Tittle------------------------------------------------->
            	        
            	        <!----------------------------------------Start of the Form Part------------------------------------------------>
	                    <form name="icstm" class="well form-horizontal" action="add.php" method="post"  id="alumniform" enctype="multipart/form-data" >
                        
                            <fieldset>
                                <fieldset>
                                		<h2 style="text-align:center;"> Online Registration </h2>
                                		<p style="text-align:right;"><b>Date:</b>  May 07.05.2021 to 08.05.2021</p>
                                	
                                        <div>
                                    </div>
                                    </fieldset>
                                <fieldset>
                                        <legend> Participant Details </legend>
                                      
                                		<div class="form-group">
                                 			<label class="col-md-4 control-label"> Name of the Candidate </label>  
                                            <div class="col-md-4 inputGroupContainer">
                                                <div class="input-group">
                                                    <span class="input-group-addon">	<i class="glyphicon glyphicon-user"> </i>	</span>
                                                    <input type="text" name="cname" id="cname" placeholder="Candidate Name" autocomplete="off" class="form-control" required autofocus/>
                                    			</div>
                                  			</div>
                                		</div>
                                      
                                         <div class="form-group">
                                            <label class="col-md-4 control-label"> Email ID </label>  
                                            <div class="col-md-4 inputGroupContainer">
                                                <div class="input-group">
                                                    <span class="input-group-addon">    <i class="glyphicon glyphicon-envelope"> </i>   </span>
                                                    <input  type="email" name="smailid" id="smailid" placeholder="Email ID" autocomplete="off" class="form-control" required />
                                                </div>
                                            </div>
                                        </div>                                        
                                 		<div class="form-group">
                                 			<label class="col-md-4 control-label"> Mobile No. </label>  
                                            <div class="col-md-4 inputGroupContainer">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="glyphicon glyphicon-phone"> </i>	</span>
                                                    <input type="number" name="smob" id="smob" placeholder="Contact No." autocomplete="off" class="form-control" min="6000000000" max="9999999999" required />
                                    			</div>
                                  			</div>
                                		</div>
                                        
                                        <div class="form-group">
                                            <label class="col-md-4 control-label" for="role"> Role </label>  
                                            <div class="col-md-4 inputGroupContainer">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><!-- <i class="glyphicon glyphicon-phone"> </i> -->  </span>
                                                    <select  name="role" id="role" autocomplete="off" class="form-control" required />
                                                        <option value="" disabled selected>-- Select Role --</option>
                                                        <option value="Student">Student</option>
                                                        <option value="Faculty">Faculty</option>
                                                        
                                                    </select>
                                                </div>
                                            </div>
                                        </div>



                                         <div class="form-group" id="otherFieldDiv">
                                            <label class="col-md-4 control-label" for="otherField"> department  </label>  
                                            <div class="col-md-4 inputGroupContainer" id="otherField">
                                                <div class="input-group" id="otherField">
                                                    <span class="input-group-addon"><!-- <i class="glyphicon glyphicon-phone"> </i> -->  </span>
                                                    <select  name="role" id="otherField" autocomplete="off" class="form-control" required />
                                                        <option value="" disabled selected>-- Select Role --</option>
                                                          <option value="UG Student">CSE</option>
                                                        <option value="PG Student">Mech</option>
                                                        <option value="UG Student">ECE</option>
                                                        <option value="PG Student">EEE</option>
                                                        
                                                    </select>
                                                </div>
                                            </div>
                                        </div>






                                        <div class="form-group" id="otherFieldDiv1">
                                            <label class="col-md-4 control-label" for="otherField1"> Year of Study </label>  
                                            <div class="col-md-4 inputGroupContainer" id="otherField1">
                                                <div class="input-group" id="otherField1">
                                                    <span class="input-group-addon"><!-- <i class="glyphicon glyphicon-phone"> </i> -->  </span>
                                                    <select  name="yos" id="otherField1" autocomplete="off" class="form-control" required />
                                                        <option value="" disabled selected>-- Select Year of Study --</option>
                                                        <option value="I Year">I Year</option>
                                                        <option value="II Year">II Year</option>
                                                        <option value="III Year">III Year</option>
                                                        <option value="IV Year">IV Year</option>
                                                        <option value="Not a student">Not a student</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>




                                            <div class="form-group" id="otherFieldDiv2">
                                      <label class="col-md-4 control-label" for="otherField2"> Institution Name</label>  
                                            <div class="col-md-4 inputGroupContainer" id="otherField2">
                                                <div class="input-group" id="otherField2">
                                                    <span class="input-group-addon">  <!-- <i class="glyphicon glyphicon-user"> </i> --> </span>
                                                    <input type="text" name="cname" id="otherField2" placeholder="Institution Name" autocomplete="off" class="form-control" required autofocus/>
                                          </div>
                                        </div>
                                    </div>



                                        <div class="form-group" id="otherFieldDiv3">
                                            <label class="col-md-4 control-label" for="otherField3"> department  </label>  
                                            <div class="col-md-4 inputGroupContainer" id="otherField3">
                                                <div class="input-group" id="otherField3">
                                                    <span class="input-group-addon"><!-- <i class="glyphicon glyphicon-phone"> --> </i>  </span>
                                                    <input type="text"  name="role" id="otherField2" autocomplete="off" class="form-control" required />
                                                </div>
                                            </div>
                                        </div>






                                                  <div class="form-group" id="otherFieldDiv4">
                                      <label class="col-md-4 control-label" for="otherField4"> Institution Name</label>  
                                            <div class="col-md-4 inputGroupContainer" id="otherField4">
                                                <div class="input-group" id="otherField4">
                                                    <span class="input-group-addon">  <!-- <i class="glyphicon glyphicon-user"> </i> --> </span>
                                                    <input type="text" name="cname" id="otherField2" placeholder="Institution Name" autocomplete="off" class="form-control" required autofocus/>
                                          </div>
                                        </div>
                                    </div>



                                       
                                       

                                      <div class="form-group" id="role1">
                                            <label class="col-md-4 control-label" for="role1"> professional socity membership  </label>  
                                            <div class="col-md-4 inputGroupContainer" id="role1">
                                                <div class="input-group" id="role1">
                                                    <span class="input-group-addon"><!-- <i class="glyphicon glyphicon-phone"> </i> -->  </span>
                                                    <select  name="role" id="role1" autocomplete="off" class="form-control" required />
                                                        <option value="" disabled selected>-- Select Role --</option>
                                                        <option value="Yes">Yes</option>
                                                        <option value="No">No</option>
                                                        
                                                    </select>
                                                </div>
                                            </div>
                                        </div>




                                        <div class="form-group" id="otherFieldDiv5">
                                            <label class="col-md-4 control-label" for="otherField5"> Select Society  </label>  
                                            <div class="col-md-4 inputGroupContainer" id="otherField5">
                                                <div class="input-group" id="otherField5">
                                                    <span class="input-group-addon"><!-- <i class="glyphicon glyphicon-phone"> --> </i>  </span>
                                                    <select  name="role" id="otherField5" autocomplete="off" class="form-control" required />
                                                        <option value="" disabled selected>-- Select Role --</option>
                                                        <option value="UG Student">IET</option>
                                                        <option value="PG Student">TSI</option>
                                                        <option value="UG Student">OTHERS</option>
                                                     
                                                    </select>
                                                </div>
                                            </div>
                                        </div>




                                        <div class="form-group" id="otherFieldDiv6">
                                      <label class="col-md-4 control-label" for="otherField6"> Member ID </label>  
                                            <div class="col-md-4 inputGroupContainer" id="otherField6">
                                                <div class="input-group" id="otherField6">
                                                    <span class="input-group-addon"><!-- <i class="glyphicon glyphicon-phone"> </i>  --> </span>
                                                    <input type="number" name="smob" id="smob" placeholder="Contact No." autocomplete="off" class="form-control" min="6000000000" max="9999999999" required />
                                          </div>
                                        </div>
                                    </div>




                                        





                                		 
                                		<p style="text-align:center;">
                                            <div class="field-wrap">
    				      			            <div class="g-recaptcha" data-theme="light" data-sitekey="6LcgCEMUAAAAAKTf86vEnkmnRbCtRSBtgPU9_3gi" style="transform:scale(1.3);-webkit-transform:scale(1.0);transform-origin:0 0;-webkit-transform-origin:0 0;"></div>
    					  		            </div>
                                        </p>
                                    </fieldset>
                                
                            <div class="form-group">
                      			<label class="col-md-4 control-label"></label>
                      				<div class="col-md-4">
                      					<span class="glyphicon glyphicon-send">	</span> 
                      					<input type="submit" name="submit" class="btn btn-warning" value="PROCEED"  /> 
                        			</div>
                    		</div>
<!---------------------------------------------END INDEX FORM SECTION Part--------------------------------------------------->

<!-----------------------------------------------START FOOTER SECTION Part---------------------------------------------------> 
<div class="footer">
    <div class="container">
        <div class="row">
            <p align="center"> &copy; Copyright 2020 | Vel Tech Rangarajan Dr.Sagunthala R&D Institute of Science and Technology | All Rights Reserved. </p>
        </div>
    </div>
</div>
<!-------------------------------------------END FOOTER SECTION Part--------------------------------------------------------->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 
<script src="http://veltech.edu.in/workshop/assets/js/bootstrap.min.js"></script> 
<script src="http://veltech.edu.in/workshop/assets/js/bootstrap-datepicker.js"></script> 
<script>

</script>
</body>
<!-------------------------------End Body Section Part------------------------------------------------------->
</html>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">





<script type="text/javascript">
$("#role").change(function() {
  if ($(this).val() == "Student") {
    alert("tru");
   $('#otherFieldDiv3').hide();
    $('#otherField3').removeAttr('required');
    $('#otherField3').removeAttr('data-error');
      $('#otherFieldDiv4').hide();
        $('#otherField4').removeAttr('required');
    $('#otherField4').removeAttr('data-error');
  
  } else {
    alert("false");
   $('#otherFieldDiv').show();
    $('#otherField').attr('required', '');
    $('#otherField').attr('data-error', 'This field is required.');
     $('#otherFieldDiv1').show();
        $('#otherField1').attr('required', '');
    $('#otherField1').attr('data-error', 'This field is required.');
     $('#otherFieldDiv2').show();
        $('#otherField2').attr('required', '');
    $('#otherField2').attr('data-error', 'This field is required.');
  
  }
});
// $("#role").trigger("change");





//   $("#role").change(function() {
//   if ($(this).val() == "Faculty") {
//   $('#otherFieldDiv').hide();
//     $('#otherField').removeAttr('required', '');
//     $('#otherField').attr('data-error', 'This field is required.');
//      $('#otherFieldDiv1').hide();
//         $('#otherField1').removeAttr('required', '');
//     $('#otherField1').attr('data-error', 'This field is required.');
//      $('#otherFieldDiv2').hide();
//         $('#otherField2').removeAttr('required', '');
//     $('#otherField2').attr('data-error', 'This field is required.');
  
  
//   } else {
// $('#otherFieldDiv3').show();
//     $('#otherField3').attr('required');
//     $('#otherField3').attr('data-error');
//       $('#otherFieldDiv4').show();
//         $('#otherField4').attr('required');
//     $('#otherField4').attr('data-error');
  
//   }
// });
// $("#role").trigger("change");



$("#role1").change(function() {
  if ($(this).val() == "No") {
     $('#otherFieldDiv5').show();
     $('#otherField5').attr('required', '');
    $('#otherField5').attr('data-error', 'This field is required.');


  }else{
    $('#otherFieldDiv5').hide();
    $('#otherField5').removeAttr('required');
    $('#otherField5').removeAttr('data-error');
      $('#otherFieldDiv6').hide();
    $('#otherField6').removeAttr('required');
    $('#otherField6').removeAttr('data-error');
  }
});





$("#otherFieldDiv5").change(function() {
  if ($(this).val() == "OTHER") {
     $('#otherFieldDiv6').show();
     $('#otherField6').attr('required', '');
    $('#otherField6').attr('data-error', 'This field is required.');


  }else{
    $('#otherFieldDiv6').hide();
    $('#otherField6').removeAttr('required');
    $('#otherField6').removeAttr('data-error');
  }
});












</script>
