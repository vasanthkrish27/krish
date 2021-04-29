<!DOCTYPE html>
<html>
<head>
  <title></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
  <link rel="stylesheet" type="text/css" href="./css/home.css">
</head>
<body>

  
 
<form  id="msform" class="msform"  method="post" action="details2.php" enctype="multipart/form-data">
  <div class="tab">
    <img src="./image1.png" width="100%">
      <ul class="progressbar bd">
        <li >Personal & Programme Details</li>
        <li class="active">Research Area Details & Uploads</li>
        <li>step</li>
        <li>step</li>
        <li>successfullly</li>
      </ul>

  <fieldset data-check-id="1">
  
    <div class="a">
    <h2 class="fs-title" style="color: #FFF">Professional Experience (Starting from the Present Employment) </h2> 
  </div>
    <input type="hidden" name="slno[]">
 <div class="form-row">
    <div class="form-group col-md-2">
      <label for="">Mode*</label>
      <select class="form-control" name="mode[1]" id="mode" required="">
              <option value="Regular">Regular</option> 
              <option value="Temporary">Temporary</option>
              <option value="Contract">Contract</option>
              <option value="nil">Nil</option>
       </select>                                                                                                                                         
                                              
    </div>
    <div class="form-group col-md-2">
      <label for="">Designation*</label>
      <input type="text" class="form-control" name="designation[]" id="designation" placeholder="Designation">
    </div>
    <div class="form-group col-md-2">
      <label for="">Institution / R&D / Industry*</label>
      <input type="text" class="form-control" id="Institution" name="Institution[]" placeholder="Institution / R&D / Industry">
    </div>
     <div class="form-group col-md-2">
      <label for="">Work Period*</label>
      <input type="text" class="form-control" id="workperiod" name="workperiod[]" placeholder="Work Period">
    </div>
     <div class="form-group col-md-2">
      <label for="">Total Years*</label>
      <input type="text" class="form-control" id="totalyears" name="totalyears[]" placeholder="Years">
    </div>
     <button type="button" id="addrow" class="btn btn-secondary" style="background:  red" ><i class="fas fa-plus fa-fw "></i></button>
  </div>
     
    
    <div id="next"></div>
  <!--   <br/> -->
  <!-- <button type="button" name="addrow" id="addrow" class="btn btn-success pull-right">Add New Qualification</button> -->
  <!-- <br/><br/> -->


     









      


<!-- contectetails -->
   <div class="a">
    <h2 class="fs-title" style="color: #FFF">Choice of Research Area(s)</h2> 
  </div>
<div class="row">
  <div class="form-group col-md-4">
      <label for="">Choice of School*</label>
    <select class="form-control" name="school" id="school" name="school" onchange="changeschool(this.value);" required="">

                                                  <option value="" selected="" disabled="">School</option>
                                                  <option value="SCHOOL OF MECHANICAL AND CONSTRUCTIONS">MECHANICAL AND CONSTRUCTIONS</option>
                                                  <option value="SCHOOL OF COMPUTING">COMPUTING</option>
                                                  <option value="SCHOOL OF ELECTRICAL AND COMMUNICATIONS">ELECTRICAL AND COMMUNICATIONS</option>
                                                  <option value="SCHOOL OF SCIENCE AND HUMANITIES">SCIENCE AND HUMANITIES</option>
                                                  
                                                  <option value="SCHOOL OF MANAGEMENT">MANAGEMENT</option>
                                                  
                                                  <option value="LAW">LAW</option>
                                              </select>
    </div>

</div>  
<p style="color:red; padding-left:10px;">Note: Please choose your required Preferences.Each Preference should be different. If Preferences are not Available, choose NIL..</p> 

   <!-- Details of Qualifying Degree (Post Graduation) -->



<div class="a">
    <h2 class="fs-title" style="color: #FFF">Details of Publications (if any)</h2> 
  </div>




 <div class="form-row">
   
    <div class="form-group col-md-2">
      <label for="">Name of the Author(s)</label>
      <!-- <input type="" name="slnos"> -->
      <input type="text" class="form-control" id="Author" name="Author" placeholder="Name of the Author">
    </div>
    <div class="form-group col-md-2">
      <label for="">Title of the Paper</label>
      <input type="text" class="form-control" id="Paper" name="Paper[]" placeholder="Title of the Paper">
    </div>
     <div class="form-group col-md-2">
      <label for="">Name of the Journal&Publisher</label>
      <input type="text" class="form-control" id="Publisher" name="Publisher[]" placeholder="Name of the Journal & Publisher">
    </div>
     <div class="form-group col-md-2">
      <label for="">Vol. / Issue No.</label>
      <input type="text" class="form-control" id="Issueno" name="Issueno[]" placeholder="Years">
    </div>
      <div class="form-group col-md-2">
      <label for="">Year of Published</label>
      <input type="text" class="form-control" id="yearofpublished" name="yearofpublished[]" placeholder="mm/yyyy">
    </div>
     <button type="button" id="addrow1" class="btn btn-secondary" style="background:  red" ><i class="fas fa-plus fa-fw "></i></button>
  </div>
     
    
    <div id="next1"></div>
  <!--   <br/> -->
  <!-- <button type="button" name="addrow" id="addrow" class="btn btn-success pull-right">Add New Qualification</button> -->
  <!-- <br/><br/> -->


    

    <div class="a">
    <h2 class="fs-title" style="color: #FFF">Documents to Upload</h2> 
  </div>

<div class="row">
  <div class="col-md-2">
    <label for="">Candidate's Photograph*</label>
   
    <input type="file" name="uploada" id="uploada"  required="">
    <p style="color: red">100 KB (Max.) & jpeg file</p>
  </div>
   <div class="col-md-2">
    <label for="">Candidate's Signature*</label>
    <input type="file" name="uploadb" id="uploadb" required="">
    <p style="color: red">100 KB (Max.) & jpeg file</p>
  </div>
   <div class="col-md-2">
    <label for="">SSLC / Equivalent*</label>
    <input type="file" name="uploadc" id="uploadc" required="">
    <p style="color: red">100 KB (Max.) & pdf file</p>
  </div>
   <div class="col-md-2">
    <label for="">HSC / Equivalent*</label>
    <input type="file" name="uploadd" id="uploadd" required="">
    <p style="color: red">100 KB (Max.) & pdf file</p>
  </div>
  <div class="col-md-2">
    <label for="">UG Degree Certificate*</label>
    <input type="file" name="uploade" id="uploade" required="">
    <p style="color: red">100 KB (Max.) & pdf file</p>
  </div>



</div>
<div class="row">

  <div class="col-md-2">
    <label for="">PG Degree Certificate*</label>
    <input type="file" name="uploadf" id="uploadf" required="">
    <p style="color: red"><b>100 KB (Max.) & pdf file</b></p>
  </div>
  <div class="col-md-2">
    <label for="">Transfer Certificate*</label>
    <input type="file" name="uploadg" id="uploadg" required="">
    <p style="color: red">100 KB (Max.) & pdf file</p>
  </div>
</div>

<div class="fs-wrapper-btn">
        <input type="submit" name="next" class="next action-button" id="butsave"  value="SAVE & PROCEED">     

      </div>
    
</form>
      
    </div>
 

</body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script type="text/javascript">
  $('#addrow').click(function(){

    var length = $('.sl').length;
    var i   = parseInt(length)+parseInt(1);
    var newrow = $('#next').append('<div class="form-row"><div class="form-group col-md-2"> <label for="">Mode*</label><select class="form-control" name="mode[]" id="profmode_1" required=""> <option value="Regular">Regular</option> <option value="Temporary">Temporary</option><option value="Contract">Contract</option><option value="nil">Nil</option></select> </div><div class="form-group col-md-2"><label for="">Designation*</label><input type="text" class="form-control" id="" placeholder="Designation"></div><div class="form-group col-md-2"><label for="">Institution / R&D / Industry*</label><input type="text" class="form-control" id="" placeholder="Institution / R&D / Industry"></div> <div class="form-group col-md-2"><label for="">Work Period*</label><input type="text" class="form-control" id="" placeholder="Work Period"></div><div class="form-group col-md-2"> <label for="">Total Years*</label> <input type="text" class="form-control" id="" placeholder="Years"></div><button class="btnRemove btn-danger btn "><i class="fas fa-minus fa-fw "></i></button></div>');
    
    });
  
  // Removing event here
  $('body').on('click','.btnRemove',function() {
       $(this).closest('div').remove()
  });




  $('#addrow1').click(function(){

    var length = $('.sl').length;
    var i   = parseInt(length)+parseInt(1);
    var newrow = $('#next1').append('<div class="form-row"><div class="form-group col-md-2"><label for="">Name of the Author(s)</label><input type="text" class="form-control" id="" placeholder="Name of the Author"></div><div class="form-group col-md-2"><label for="">Title of the Paper</label> <input type="text" class="form-control" id="" placeholder="Title of the Paper"></div> <div class="form-group col-md-2"> <label for="">Name of the Journal & Publisher</label><input type="text" class="form-control" id="" placeholder="Name of the Journal & Publisher"></div><div class="form-group col-md-2"><label for="">Vol. / Issue No.</label><input type="text" class="form-control" id="" placeholder="Years"></div><div class="form-group col-md-2"><label for="">Year of Published</label><input type="text" class="form-control" id="" placeholder="mm/yyyy"></div><button class="btnRemove btn-danger btn"><i class="fas fa-minus fa-fw "></i></button></div>');
    
    });
  
  // Removing event here
  $('body').on('click','.btnRemove',function() {
       $(this).closest('div').remove()
  });

</script>
<script>
$(document).ready(function() {
  $('#butsave').on('click', function() {
    // $("#butsave").attr("disabled", "disabled");
    var mode = $('#mode').val();
    var designation = $('#designation').val();
    var Institution = $('#Institution').val();
    var workperiod = $('#workperiod').val();
    var totalyears = $('#totalyears').val();
    var   school= $('#school').val();
    var   Author = $('#Author').val();
    var   Paper = $('#Paper').val();
    var Publisher= $('#Publisher').val();
    var Issueno= $('#Issueno').val();
    var yearofpublished = $('#yearofpublished').val();
    var Photograph = $('#uploada')[0];
    var Signature = $('#uploadb')[0];
    var sslc_equivalent = $('#uploadc')[0];
    var hsc_equivalent= $('#uploadd')[0];
    var ug_Degree_Certificate = $('#uploade')[0];
    var   pg_degree_certificate = $('#uploadf')[0];
    var   transfer_certificate = $('#uploadg')[0];
    

    if(mode!="" && designation!="" && Institution !="" && workperiod !=""  && totalyears !=""  && school!=""  && Author!=""  && Paper!=""  && Publisher!=""  &&Issueno!=""  && yearofpublished !=""  && Photograph!=""  && Signature!=""  && sslc_equivalent!=""  && hsc_equivalent!=""  && ug_Degree_Certificate!=""  &&  pg_degree_certificate!="" &&  transfer_certificate!="" ){
      $.ajax({
        url: "details2.php",
        type: "POST",
        data: {
          mode: mode,
          designation: designation,
          Institution: Institution,
          workperiod: workperiod,
          totalyears: totalyears,
          school: school,
          Author: Author,
          Paper: Paper,
          Publisher: Publisher,
          Issueno: Issueno,
          yearofpublished: yearofpublished,
          uploada:uploada,
          uploadb: uploadb,
          uploadc: uploadc,
          uploadd: uploadd,
          uploade: uploade,
          uploadf: uploadf,
          uploadg: uploadg
        
                  

        },
        cache: false,
        success: function(dataResult){
          var dataResult = JSON.parse(dataResult);
          if(dataResult.statusCode==200){
            $("#butsave").removeAttr("disabled");
            $('#msForm').find('input:text').val('');
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




</html>