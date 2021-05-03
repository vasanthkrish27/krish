<!DOCTYPE html>
<html lang="en">
    <!-------------------------------------- Start Head Section Part----------------------------------->
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Cyber Physical System an Open Source Platform </title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="assets/css/custom.css" rel="stylesheet" type="text/css"/>
    <link href="assets/css/datepicker.css" rel="stylesheet" type="text/css"/>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
    
      ga('create', 'UA-77129875-1', 'auto');
      ga('send', 'pageview');
    </script>
    <style type="text/css">
    	#success_message
    	{ 
    		display: none;
    	}
    </style>
    <script type="text/javascript">
        function trimSpaces1(){
    	   s = document.getElementById("authaddress").value;
    	   s = s.replace(/(^\s*)|(\s*$)/gi,"");
    	   s = s.replace(/[ ]{2,}/gi," ");
    	   s = s.replace(/\n /,"\n");
    	   document.getElementById("authaddress").value = s;
        }
        function fixfee() {
            var cate = document.getElementById('cate').value; //alert('Category '+cate);
            var element = document.getElementById('paydet');
            if( (cate === "Started a company") ){
               element.style.display='block';
            }else if( (cate === "Established for years") ){
                element.style.display='block'; 
            }else{
               element.style.display='none'; 
            }
        }
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
        <!--<ul>
          <li>Help Desk No : +91 73587 85931 / 73587 31718</li>
          <li class="active"> E-mail ID: sports@veltech.edu.in</li>
        </ul>-->
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
            	            <h1>Cyber Physical System an Open Source Platform <br><br>27<sup>th</sup>- 28<sup>th</sup>, September 2019</h1>
            	        </div>
            	        <!------------------------------------------End Tittle------------------------------------------------->
            	        
            	        <!----------------------------------------Start of the Form Part------------------------------------------------>
	                    <form name="icstm" class="well form-horizontal" action="add.php" method="post"  id="alumniform" enctype="multipart/form-data" >
                        <!----------------------------------------Start Over All FieldSet Part------------------------------------------------>
                            <fieldset>
                                <fieldset>
                            		<h1 style="text-align:center;"><u>Online Registration</u></h1>
                            		<div class="form-group">
                            		<!--<p><a href="assets/Workshop-brochure.pdf" target="_blank"><img src="assets/img/Brochure.gif"></a></p>-->
                                    </div>       
                            		<p style="text-align:right;"><b>Last Date for Registration : </b> 20<sup>th</sup> September,2019</p>
                            		<p style="text-align:right;"><b>Date of Intimation of Acceptance : </b> 24<sup>th</sup> September,2019</p>
                                    <div> </div>
                                </fieldset>
                                <fieldset>
                                    <legend style="font-size:30px;"> Registration Details </legend>
                                    
                                    <!-----------------------------Start Name of the Participant-----------------------------------------> 
                                	<div class="form-group">
                                        <label class="col-md-4 control-label"> Name </label>  
                                        <div class="col-md-4 inputGroupContainer">
                                            <div class="input-group">
                                                <span class="input-group-addon">  <i class="glyphicon glyphicon-user"> </i> </span>
                                                <input  type="text" name="parti_name" id="parti_name" placeholder="Name" class="form-control" required autocomplete="off" />
                                          </div>
                                      </div>
                                    </div>
                                    <!-----------------------------------End Name of the Participant Part--------------------------------->
                                    
                                     <!---------------------------------------Start Designation Part-------------------------------->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label"> Designation  </label>  
                                        
                                            <div class="col-md-4 inputGroupContainer">
                                            
                                                <div class="input-group">
                                              
                                                    <span class="input-group-addon">  <i class="fa fa-graduation-cap" aria-hidden="true"></i> </span>
                                                
                                                    <input  type="text" name="designation" id="designation" placeholder="Designation" class="form-control" required />
                                              </div>
                                          </div>
                                    </div> 
                                    <!--------------------------------------End designation Part------------------------------------>
                                    
            
                                    <!---------------------------------------Start Organization Part-------------------------------->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label"> Organization  </label>  
                                        
                                            <div class="col-md-4 inputGroupContainer">
                                            
                                                <div class="input-group">
                                              
                                                    <span class="input-group-addon">  <i class="fa fa-graduation-cap" aria-hidden="true"></i> </span>
                                                
                                                    <input  type="text" name="organization" id="organization" placeholder="Organization" class="form-control" required />
                                              </div>
                                          </div>
                                    </div> 
                                    <!--------------------------------------End College / University Part------------------------------------>
                                    
                                    <!---------------------------------------Start Address Part---------------------------------->
                                    <div class="form-group rearchscolors">
                                      <label class="col-md-4 control-label"> Address </label>  
                                            <div class="col-md-4 inputGroupContainer">
                                                <div class="input-group">
                                                    <span class="input-group-addon">  <i class="fa fa-signal" aria-hidden="true"></i> </span>
                                                    <textarea name="address" id="address"  class="form-control" required   /></textarea>
                                              </div>
                                          </div>
                                    </div> 
                                    <!---------------------------------------End Address Part---------------------------------->
                                    
                                    <!----------------------------------------Start Email ID Part-------------------------------------------->
                                 	<div class="form-group">
                                 		<label class="col-md-4 control-label"> Email ID </label>  
                                        <div class="col-md-4 inputGroupContainer">
                                            <div class="input-group">
                                                <span class="input-group-addon">	<i class="glyphicon glyphicon-envelope"> </i>	</span>
                                                <input  type="email" name="authmailid" id="authmailid" placeholder="Valid Email ID" class="form-control" required />
                                			</div>
                                  		</div>
                                	</div>
                                	<!---------------------------------------End Email ID Part--------------------------------------------->
                                    
                                    <!---------------------------------------Start Contact No Part---------------------------------------->
                                	<div class="form-group">
                                	    <label class="col-md-4 control-label"> Mobile No </label>  
                                        <div class="col-md-4 inputGroupContainer">
                                            <div class="input-group">
                                                <span class="input-group-addon">	<i class="glyphicon glyphicon-earphone"> </i>	</span>
                                                <input  type="number" name="authmob1" id="authmob1" placeholder="Mobile No" class="form-control" min="6000000000" max="9999999999" required />
                                			</div>
                                  		</div>
                                	</div>
                                	<!----------------------------------------End Contact No Part------------------------------------------->
                                	
                                	<!---------------------------------------Start Signature Part---------------------------------------->
                                	<div class="form-group">
                                	    <label class="col-md-4 control-label"> Signature </label>  
                                        <div class="col-md-4 inputGroupContainer">
                                            <div class="input-group">
                                                <span class="input-group-addon">	<i class="glyphicon glyphicon-earphone"> </i>	</span>
                                                <input type="file" name="signature" id="signature" class="form-control" required />
                                			</div>
                                  		</div>
                                	</div>
                                	<!----------------------------------------End Signature Part------------------------------------------->
            
                                    <!---------------------------------------Start Registration Fee Part---------------------------------->
                                    <div class="form-group rearchscolors">
                                      <label class="col-md-4 control-label"> Registration Fee </label>  
                                            <div class="col-md-4 inputGroupContainer">
                                                <div class="input-group">
                                                    <span class="input-group-addon">  <i class="fa fa-inr" aria-hidden="true"></i> </span>
                                                    <input  type="text" name="reg_fees" id="reg_fees" placeholder="Registration Fee" class="form-control" required  readonly />
                                              </div>
                                          </div>
                                    </div> 
                                    <!---------------------------------------End Registration Fee Part---------------------------------->
                                </fieldset> 
                                
                            <!-------------------------------------------Start Registration button Part------------------------------------------------->
                    		<div class="form-group">
                      			<label class="col-md-4 control-label"></label>
                      				<div class="col-md-4">
                      					<span class="glyphicon glyphicon-send">	</span> 
                      					<input type="submit" name="submit" class="btn btn-warning" value="Register"  /> 
                        			</div>
                    		</div>
                            <!------------------------------------------------END Registration button Part------------------------------------------------->
                	    </fieldset>
                	    <!----------------------------------------End Over All FieldSet Part------------------------------------------------>
                    </form>
                    <!-------------------------------------------End of the Form Part--------------------------------------------------------------->
                </div>
            </div> 
        </div>
    </div>
  </div>
</section>
<!---------------------------------------------END INDEX FORM SECTION Part--------------------------------------------------->

<!-----------------------------------------------START FOOTER SECTION Part---------------------------------------------------> 
<div class="footer">
    <div class="container">
        <div class="row">
            <p align="center"> &copy; Copyright 2019 | Vel Tech Rangarajan Dr.Sagunthala R&D Institute of Science and Technology | All Rights Reserved. </p>
        </div>
    </div>
</div>
<!-------------------------------------------END FOOTER SECTION Part--------------------------------------------------------->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 
<script src="http://veltech.edu.in/workshop/assets/js/bootstrap.min.js"></script> 
<script src="http://veltech.edu.in/workshop/assets/js/bootstrap-datepicker.js"></script> 
<script>
 $( document ).ready(function() {
    $("#reg_fees").val(200);
});
</script>
</body>
<!-------------------------------End Body Section Part------------------------------------------------------->
</html>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

