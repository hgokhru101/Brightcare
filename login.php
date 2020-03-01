<?php
   include("config.php");
   session_start();

   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $login_user = mysqli_real_escape_string($conn,$_POST['username']);
      $Password = mysqli_real_escape_string($conn,$_POST['password']); 
      $role=mysqli_real_escape_string($conn,$_POST['role']);
      $sql = "SELECT * FROM login WHERE uname = '$login_user' and password = '$Password'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
      
      if($count == 1) {
         $_SESSION['login_user'] = $login_user;
         if($row['role']==0)
         {  
            header("location: doctor/index.php");
         }
         else{
        header("location: patient/index.php");
         }
      }else {
         $error = "Your Login Name or Password is invalid";
       header("location: index.html");
      }
   }
?>
