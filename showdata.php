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
	?>

	<?php
	error_reporting(0);
      $email1=array();
      $user_type=array();
      $sqlquery5="SELECT * from signup ";
      $result5=mysqli_query($connection_static,$sqlquery5);
      $count5=mysqli_num_rows($result5);
      if(mysqli_num_rows($result5)>0)
      {
        while ($row=mysqli_fetch_assoc($result5)) 
        {
          $email1[]=$row["email"];
          $user_type[]=$row["user_type"];        
        } 
        for($i=0;$i<$count5;$i++)
          {
            if($email1[$i]==$_SESSION["check_points_email"])
                {
                  $user_type1=$user_type[$i];
                }
          }
      }

	?>

	<?php
	$date=date("d-m-Y"); 
	$id=array();
	$firstname=array();
	$lastname=array();
	$email=array();
	$reason=array();
	$date=date("d-m-Y");
	$sqlquery="SELECT * FROM signup";
	$result=mysqli_query($connection_static,$sqlquery);
	$count=mysqli_num_rows($result);
	if(mysqli_num_rows($result)>0)
	{
	    while($row=mysqli_fetch_assoc($result))
	    {
	    	$id[]=$row["id"];
	    	$firstname[]=$row["firstname"];
	    	$lastname[]=$row["lastname"];  	
	    	$email[]=$row["email"];
	    }
	}
	?>