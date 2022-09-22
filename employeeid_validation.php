<?php
session_start();

include "config.php";
$table_name1="employeeid_validation";
$first_name=$_POST["first_name"];
$last_name=$_POST["last_name"];
$department=$_POST["Department"];
$shift_starting_time=$_POST["shift_timing_from"];
$shift_ending_time=$_POST["shift_timing_to"];
$sqlquery3="INSERT into $table_name1(first_name,last_name,department,shift_starting_time,shift_ending_time) values('$first_name','$last_name','$department','$shift_starting_time','$shift_ending_time')";
$result3=mysqli_query($connection_static,$sqlquery3);
echo "<script>window.location.assign('showdata.php')</script>";
   mysqli_close($connection_static);
   mysqli_close($connection_dynamic);
?>
