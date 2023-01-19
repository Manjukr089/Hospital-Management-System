<?php

 if(isset($_POST['name'])&&  isset($_POST['email']) && isset($_POST['mobile']) && isset($_POST['sex']) && isset($_POST['disease']))
 {
     include 'dbconnect.php';
     
     function validate($data)
     {
         $data=trim($data);
         $data= stripslashes($data);
         $data= htmlspecialchars($data);
         return $data;
     }
     $name=validate($_POST['name']);
     $email= validate($_POST['email']);
     $mobile= validate($_POST['mobile']);
     $sex= validate($_POST['sex']);
     $disease= validate($_POST['disease']);
     if(empty($name) || empty($email) || empty($mobile)|| empty($sex) || empty($disease) )
     {
         header("Location:viewdonor.php ");
     }
     else
     {
      $sql="INSERT INTO college(name,email,mobile,sex,disease)values ('$name','$email','$mobile','$sex','$disease')";
      $res= mysqli_query($conn, $sql);
      if($res)
      {
          
          echo "<h1> Your appointment registerd successfully!</h1>";
       

      }
     else
      {
          echo "Your message could not be sent..!";   
      }
     }
 }
    /* else
     {
         header("Location: v.php");
     }*/
 ?>
<?
<html>
<head></head>
<body>
	        <link rel="stylesheet" href="hospital.css">     

   <center><a href="home.html"><font color="green"><h1>HOME</h1></font></center></a> 
</body>
</html>
     
