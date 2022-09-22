<?php
session_start();
   include "config.php";
   date_default_timezone_set('Asia/Kolkata');
   $office_login=date("h:i:s"." "."a");
   $date=date("d-m-Y");
   $table_name = $_SESSION["check_points_email"];
   $table_name = str_replace("@", "AT", $table_name);
   $table_name = str_replace(".", "DOT", $table_name);
   $sqlquery="UPDATE $table_name SET office_login = '$office_login'";
   if (mysqli_query($connection_dynamic,$sqlquery)) {
   	
   	echo "<script>window.location.assign('dashboard.php')</script>";
   }
   else
   {
   	echo "data not inserted";
   }

   mysqli_close($connection_static);
   mysqli_close($connection_dynamic);

   
 ?>