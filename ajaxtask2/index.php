<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="jumbotron text-center" style="background-color: green">
  <h1>karka Acadamy Registration</h1>
 
</div>
  
<div class="container">
  <div class="row">
    <form class="form-horizontal" action='' method="POST">
  <fieldset>
    <div id="legend">
      <legend class="">Register</legend>
    </div>
    <div class="control-group">
      <!-- Username -->
      <label class="control-label"  for="username">Username</label>
      <div class="controls">
        <input type="text" id="name" name="name" placeholder="" class="input-xlarge">
        <p class="help-block">Username can contain any letters or numbers, without spaces</p>
      </div>
    </div>
 
    <div class="control-group">
      <!-- E-mail -->
      <label class="control-label" for="email">E-mail</label>
      <div class="controls">
        <input type="text" id="email" name="email" placeholder="" class="input-xlarge">
        <p class="help-block">Please provide your E-mail</p>
      </div>
    </div>
 
    <div class="control-group">
      <!-- Password-->
      <label class="control-label" for="password">Password</label>
      <div class="controls">
        <input type="password" id="password" name="password" placeholder="" class="input-xlarge">
        <p class="help-block">Password should be at least 4 characters</p>
      </div>
    </div>
 
    
 
    <div class="control-group">
      <!-- Button -->
      <div class="controls">
        <button class="btn btn-success" id="butsave">Register</button>
      </div>
    </div>
  </fieldset>
</form>
  </div>
</div>







<script type="text/javascript">
  $(document).ready(function(){
  $("#butsave").click(function(){
     var name = $('#name').val();
    var email = $('#email').val();
    var password = $('#password').val();
    
    if(name!="" && email!="" && password!=""){
      $.ajax({
        url: "save2.php",
        type: "POST",
        data: {
          name: name,
          email: email,
          password: password
                  
        },
        cache: false,
        success: function(response){
          alert(response);

        }
    })
}
  });
});
</script>

</body>
</html>

<?php
include 'database2.php';
$users=mysqli_query($conn,"SELECT * FROM `info`");
?>

 <table style="width:100%" border="2">
  <thead>
    <th>id</th>
    <th>name</th>
    <th>email</th>
      <th colspan="2" >action</th>
        

  </thead>
  <tbody>
  <?php
  while ($row=mysqli_fetch_array($users)) {
  ?>
  <tr>
    <td><?php echo $row['id'];?></td>
    <td><?php echo $row['name'];?></td>
    <td><?php echo $row['email'];?></td>
    <td>
    
        <button class="btn btn-success" id="butsave">edit</button>
      </td>
      <td>
      

   
        <button class="btn btn-success" id="butsave">delete</button>
      </td>
      
  </tr>

<?php
}
?>
</tbody> 
</table>






