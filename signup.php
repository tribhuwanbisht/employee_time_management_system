<?php
$user_type = $_POST["user_type"];
$firstname= $_POST["firstname"];
$lastname= $_POST["lastname"];
$firstname_lowercase=strtolower($firstname);
$lastname_lowercase=strtolower($lastname);
$employee_id=$_POST["employee_id"];
include "config.php";


$success=0;

if($user_type == "Super User")
{
$sqlquery2="SELECT * from signup where user_type= 'Super User' ";
$result2=mysqli_query($connection_static,$sqlquery2);
	if(mysqli_num_rows($result2)>=1)
	{
		mysqli_close($connection_static);
	 die("<h3>Super User Account Already Created</h3>");
	}

	if(mysqli_num_rows($result2)==0)
	{
		$success=1;
	}
}




if($user_type == "HR")
{
$sqlquery2="SELECT * from signup where user_type='HR' ";
$result2=mysqli_query($connection_static,$sqlquery2);
	if(mysqli_num_rows($result2)>=1)
	{
		mysqli_close($connection_static);
	 die("<h3>HR Account Already Created</h3>");
	}

	elseif(mysqli_num_rows($result2)==0)
	{      

          $sqlquery_employee_id="SELECT * from employeeid_validation";
          $result_employee_id=mysqli_query($connection_static,$sqlquery_employee_id) ;
            if(mysqli_num_rows($result_employee_id)>0)
               {
	               while($row=mysqli_fetch_assoc($result_employee_id))
	                    {
							$first_name_validation=$row["first_name"];
							$last_name_validation=$row["last_name"];
							$employee_id_validation=$row["employee_id"];
							$shift_timing=$row["shift_timing"];
							$first_name_validation=strtolower($first_name_validation);
							$last_name_validation=strtolower($last_name_validation);
		

		                    if($firstname_lowercase==$first_name_validation && $lastname_lowercase==$last_name_validation && $employee_id==$employee_id_validation)
								{  
 $success=1;  
					            }
                        }
               }    
			if($success==0)
			   { 
					mysqli_close($connection_static);
					echo "<script>window.location.assign('signupvalidation.html')</script>";
			   }   
	}
}

$mobile_number= $_POST["mobile_number"];
$email=$_POST["email"];
$password=$_POST["password"];
$confirm_password=$_POST["confirm_password"];
$country_code="+".$_POST["country_code"];
$firstname_ucfirst=ucfirst($firstname);
$lastname_ucfirst=ucfirst($lastname);


$sqlquery_employee_id="SELECT * from employeeid_validation";
$result_employee_id=mysqli_query($connection_static,$sqlquery_employee_id);
if(mysqli_num_rows($result_employee_id)>0)
{
	while($row=mysqli_fetch_assoc($result_employee_id))
	{
		$first_name_validation=$row["first_name"];
		$last_name_validation=$row["last_name"];
		$employee_id_validation=$row["employee_id"];
		$shift_starting_time=$row["shift_starting_time"];
		$shift_ending_time=$row["shift_ending_time"];
		$first_name_validation=strtolower($first_name_validation);
		$last_name_validation=strtolower($last_name_validation);


		if($firstname_lowercase==$first_name_validation && $lastname_lowercase==$last_name_validation && $employee_id==$employee_id_validation)
			{  
                           $success=1;  
                            break;
                          }

	}
}    
	if($success==0)
	{ 
echo "<script>window.location.assign('signupvalidation.html')</script>";
}
if($confirm_password==$password)
 {  
	$password=md5($password);
 $sqlquery_signup= "INSERT into signup(user_type,firstname,lastname,country_code,mobile_number,email,password,employee_id) values('$user_type','$firstname','$lastname','$country_code','$mobile_number','$email','$password','$employee_id')";
	if( mysqli_query($connection_static,$sqlquery_signup))
	{   


		$adding_shift_timing="UPDATE signup SET shift_starting_time = '$shift_starting_time', shift_ending_time = '$shift_ending_time' WHERE employee_id='$employee_id_validation' ";
        $result_adding_shift_timing=mysqli_query($connection_static,$adding_shift_timing);
		$table_name = $email;
		$table_name = str_replace("@", "AT", $table_name);
		$table_name = str_replace(".", "DOT", $table_name);
		$create_table = "CREATE TABLE $table_name (id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        dates VARCHAR(20) NOT NULL,
        leaving_home VARCHAR(20) NOT NULL,
        office_login VARCHAR(20) NOT NULL,
        lunch_start VARCHAR(20) NOT NULL,
        lunch_finish VARCHAR(20) NOT NULL,
        leaving_office VARCHAR(20) NOT NULL
        )";

		mysqli_query($connection_dynamic,$create_table);
		echo "<script>window.location.assign('login.html')</script>";
	}
	
	else
	{
		echo "data not inserted";
	}
}

else
{
	echo "Password not matched";
}

mysqli_close($connection_static);
mysqli_close($connection_dynamic);


?>