<?php
   $dbhost = 'localhost';
   $dbuser = 'velunivt_lavaza';
   $dbpass = '(_6u;Ca8fXn(';
   
   $conn = mysqli_connect($dbhost, $dbuser, $dbpass);
   	//$conn = mysqli_connect($hostname, $username, $password, "velunivt_lavaza17") or die("Unable to connect to Database");
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
   
   $sql = 'SELECT slno, authname, vtutype, vtun,coauthname1,coauthmailid3 FROM enter2019';
   
   mysqli_select_db($conn, 'velunivt_lavaza17');
   
   $retval = mysqli_query($conn , $sql);
   
   
   
   //$result = mysqli_fetch_array(mysqli_query($conn, $sql));
   
   mysqli_close($conn);
?>



<html>
    <head>
        <style>
            .view-table{
    background: #fff;
    padding: 50px;
    text-align: center;
    line-height: 30px;
    width: 100%;
            }
            
        </style>
        <title>Vel Tech Entrepreneur Details</title>
    </head>
    <body style="background-image: url(assets/img/login-bg.jpg);">
        <div id="table-responsive">
             <div class="container">
  <div class="row">
    <div class="logo" style="background: #fff;"><a href="https://veltech.edu.in"><img src="assets/img/logo.jpg" class="img-responsive" /></a>
    <h1 style="text-align:center;">Vel Tech Entrepreneur Details</h1>
    <p style="padding-left:10px;"><strong>Contact</strong><br>
Ms. Kasthuri .D,<br>
<strong>Alumni Officer</strong><br>
Skype ID : veltech.alumnus<br>
facebook : <a href="https://www.facebook.com/veltech.alumnus.7" target="_blank" rel="noopener">https://www.facebook.com/veltech.alumnus.7</a><br>
facebook name : Veltech Alumnus
LinkedIn : <a href="https://www.linkedin.com/in/veltech-alumnus-318502176" target="_blank" rel="noopener">https://www.linkedin.com/in/veltech-alumnus-318502176</a><br>

Contact No  :09677 763 280<br>
Email Id: <a href="mailto:alumni@veltech.edu.in">alumni@veltech.edu.in</a></p><br><br>
    </div>
    
  </div>
</div>
          
        <table border="1" class="view-table">
             
            <tbody>
               
                <tr>
                    <th>S.No.</th>
                    <th>Name</th>
                    <th>ID No.</th>
                    <th>Organization Name</th>
                    <th>Business Portfolio</th>
                </tr>
                
                <?php 
                    $slno=1;
                    while($result = mysqli_fetch_array($retval))
                    {
                ?>
                
                <tr>
                    <td><?php echo $slno; ?></td>
                     <td><?php echo $result['authname']; ?></td>
                      <td><?php echo $result['vtutype']; echo $result['vtun']; ?></td>
                       <td><?php echo $result['coauthname1']; ?></td>
                        <td><?php echo $result['coauthmailid3']; ?></td>
                </tr>
                <?php
                    $slno++;
                    }
                ?>
                
            </tbody>
        </table>
        </div>
    </body>
</html>