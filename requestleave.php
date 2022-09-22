<?php
session_start();
$email = $_SESSION["check_points_email"];
   include "config.php";
   date_default_timezone_set('Asia/Kolkata');
    $date=date("d-m-Y");

    $sql = "SELECT id from signup where email = '$email' ";
    $result = mysqli_query($connection_static,$sql);
    if(mysqli_num_rows($result)==1)
    {
    	while ($row = mysqli_fetch_assoc($result)) 
    	{
    		$reference_id = $row["id"];
    		break;

    	}
    }
 $request_leave = mysqli_real_escape_string($connection_static,$_POST["requestleave"]);
   $sqlquery="INSERT into request_leave(reference_id,dates,reason) values('$reference_id','$date',
   '$request_leave')";
   if (mysqli_query($connection_static,$sqlquery)) 
   {  	
   	echo "<script>window.location.assign('dashboard.php')</script>";  	
   }
 else
   {
   	echo "data not inserted";
   }

   mysqli_close($connection_static);
?>
