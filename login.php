<?php
session_start();
session_regenerate_id();
 include "config.php";
 
   $email=$_POST["email"];
   $password=$_POST["password"];
   $user_type=$_POST["user_type"];
   $password = md5($password);
   $sqlquery="SELECT * from signup where email='$email' and password='$password' and user_type='$user_type'";

   
   $result=mysqli_query($connection_static,$sqlquery);

   $num = mysqli_num_rows($result);
   if($num == 1)
   {
         $_SESSION["check_points_email"] = $email;
         header("location:dashboard.php");
   }
   else
   {
   		header("location:loginvalidation.html");
   }
   mysqli_close($connection_static);
   mysqli_close($connection_dynamic);

?>