<?php
session_start();
if(!isset($_SESSION["check_points_email"]))
{
    session_unset();
    session_destroy();
    echo "<script>window.location.assign('login.html');</script>";
}
if (isset($_POST["logout"])) 
{
    session_unset();
    session_destroy();
    echo "<script>window.location.assign('login.html');</script>";
}
?>
<?php 

      include "config.php";
      error_reporting(0);
      $table_name = $_SESSION["check_points_email"];
      $table_name = str_replace("@", "AT", $table_name);
      $table_name = str_replace(".", "DOT", $table_name);
      $date=date("d-m-Y");//TODAY DATE
      $leaving_home = $office_login = $lunch_start = $lunch_finish = $leaving_office = $request_leave = "" ;
      $sqlquery="SELECT * from $table_name where dates = '$date' ";
      $result = mysqli_query($connection_dynamic,$sqlquery);
      if(mysqli_num_rows($result)==1)
      {
         while ($row = mysqli_fetch_assoc($result)) 
         {
         	$leaving_home = $row["leaving_home"];
         	$office_login = $row["office_login"];
         	$lunch_start = $row["lunch_start"];
         	$lunch_finish = $row["lunch_finish"];
         	$leaving_office = $row["leaving_office"];
         }
      }
      $email = $_SESSION["check_points_email"];
 $sql = "select id from signup where email = '$email' ";
    $result = mysqli_query($connection_static,$sql);
    if(mysqli_num_rows($result)==1)
    {
      while ($row = mysqli_fetch_assoc($result)) 
      {
        $reference_id = $row["id"];
        break;

      }
    }
      $sqlquery1="SELECT * from request_leave where dates='$date' AND reference_id = '$reference_id' ";
      $result = mysqli_query($connection_static,$sqlquery1);
      if(mysqli_num_rows($result)==1)
      {
        while($row = mysqli_fetch_assoc($result)) 
          {
            $request_leave=$row["reason"];
            }
          
      }
      

?>