<?php
  
$connection_static=mysqli_connect("localhost","root","","checkpoint_static");
if(!$connection_static)
{
	die("Connection not Established".mysqli_connect_error());
}
$connection_dynamic=mysqli_connect("localhost","root","","checkpoint_dynamic");
if(!$connection_dynamic)
{
	die("Connection not Established".mysqli_connect_error());
}

?>