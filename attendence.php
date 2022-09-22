<!DOCTYPE html>
	<html>
	<head>
		<title>Time Attendance</title>

		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="stylesheet.css">

		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

	</head>
	<body>
		<div class="container-fluid" style="padding: 0px;">
			<h1 class="text-center" style="margin-bottom: 6px; padding-top: 10px;padding-bottom: 10px;background: linear-gradient(45deg,#006666,#02d3d3) !important;
color: white !important;
  }">HR Pannel</h1>
			
			




            <div classs="container" style="box-shadow: 2px 2px 40px black; margin-top:10px;">
   
     <nav class="navbar navbar-expand-md bg-primary navbar-dark" style="background: linear-gradient(45deg,#6699cc,#264d73);">
          <div class="container-fluid">
       <button class="navbar-toggler  " type="button" data-toggle="collapse" data-target="#navcollapse">
                                  <span class="navbar-toggler-icon"></span>
                       </button>
           <div class="collapse navbar-collapse" id="navcollapse">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="dashboard.php">Home</a>
                </li>
                
                <li class="nav-item"> 
                    <a id="dashboard1" class="nav-link" href="#" class="btn btn-success" style="display: none;">Dashboard</a>
                </li>
                <li class="nav-item">
                <a id="statistics" class="nav-link" href="statistics.php" class="btn btn-success">My Stats</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="" style="padding-top: 6px;"><form action="" method="POST"><input type="submit" name="logout" value="Logout" class="btn" id="logout_style" style="padding:0px; color:rgba(255,255,255,.5);"></form></a>
                </li>
              </ul>
          </div>
          </div>

             </div>
           </nav>
          </div><br>



<h5 class="text-center">
      <?php
        echo "<b>Date : ".$date."</b><br><br>";
      ?>
    </h5>

			<div class="container-fluid">
				<div class="row">
					<div class="col-md-6" style="border-right: 1px solid #E5E7E9;">
      <div class="row">
	                     	 <div class="col-md-3">
	                     	 </div>
	                     	 <div class="col-md-6">
	                     	 	<div class="row">
	                     	 		<div class="col-md-12">
	                     	 			<button onclick="add_employee();" class="btn btn-primary"> Add New Employee</button><br><br>
	                     	 		</div>
	                     	 	</div>

	                     	 	<div class="row">
	                     	 		<div class="col-md-12"  id="add_employee" style="display: none;">
				     	<?php
	echo " <form action='employeeid_validation.php' method='post'>
                                       <div class='form-group text-left'>
                                           <label for='first_name'>Enter First Name</label>
                                           <input type='text' class='form-control text-capitalize' name='first_name' id='first_name' placeholder='Enter First Name' pattern='[A-Za-z]{1,}' title='Only Alphabetic Value is Allowed'>
                                        </div>
                                        <div class='form-group text-left'>
                                           <label for='last_name'>Enter Last Name</label>
                                           <input type='text' class='form-control text-capitalize' name='last_name' id='last_name' placeholder='Enter Last Name' pattern='[A-Za-z]{1,}' title='Only Alphabetic Value is Allowed'><br>
                                        </div>
                                        
                                        <div class='text-left'>
                                          <label>Select The Department Of The Employee</label><br>
                                          <input type='radio' name='Department' value='IT' checked> IT<br>
										  <input type='radio' name='Department' value='Sales'> Sales<br>
										  <input type='radio' name='Department' value='Marketing'> Marketing<br>
										  <input type='radio' name='Department' value='Admin'> Admin<br>
										  <input type='radio' name='Department' value='Accounting'> Accounting<br>
										  <input type='radio' name='Department' value='HR'> HR<br><br>
										  </div>


                                        <div class='form-group text-left'>
                                          <label>Select The Shift Time Of Employee</label> 
                                          <br><b>From:</b>
                                          <select required class='form-control selectpicker text' name='shift_timing_from' id='shift_timing_from' style='background: transparent;border-radius: 5px; border-bottom: 2px solid #02d3d3;'>
                                             
                                                  <option value='12:00:00 am'>12:00 am</option>
												  <option value='01:00:00 am'>1:00 am</option>
												  <option value='02:00:00 am'>2:00 am</option>
												  <option value='03:00:00 am'>3:00 am</option>
												  <option value='04:00:00 am'>4:00 am</option>
												  <option value='05:00:00 am'>5:00 am</option>
												  <option value='06:00:00 am'>6:00 am</option>
												  <option value='07:00:00 am'>7:00 am</option>
												  <option value='08:00:00 am'>8:00 am</option>
												  <option value='09:00:00 am'>9:00 am</option>
												  <option value='10:00:00 am'>10:00 am</option>
												  <option value='11:00:00 am'>11:00 am</option>
												  <option value='12:00:00 pm' selected>12:00 pm</option>
												  <option value='01:00:00 pm'>1:00 pm</option>
												  <option value='02:00:00 pm'>2:00 pm</option>
												  <option value='03:00:00 pm'>3:00 pm</option>
												  <option value='04:00:00 pm'>4:00 pm</option>
												  <option value='05:00:00 pm'>5:00 pm</option>
												  <option value='06:00:00 pm'>6:00 pm</option>
												  <option value='07:00:00 pm'>7:00 pm</option>
												  <option value='08:00:00 pm'>8:00 pm</option>
												  <option value='09:00:00 pm'>9:00 pm</option>
												  <option value='10:00:00 pm'>10:00 pm</option>
												  <option value='11:00:00 pm'>11:00 pm</option>
                                          </select>
                                          
                                          <br><b>To:</b>
                                          <select required class='form-control selectpicker text' name='shift_timing_to' id='shift_timing_to' style='background: transparent;border-radius: 5px; border-bottom: 2px solid #02d3d3;'>
                                                  <option value='12:00:00 am'>12:00 am</option>
												  <option value='01:00:00 am'>1:00 am</option>
												  <option value='02:00:00 am'>2:00 am</option>
												  <option value='03:00:00 am'>3:00 am</option>
												  <option value='04:00:00 am'>4:00 am</option>
												  <option value='05:00:00 am'>5:00 am</option>
												  <option value='06:00:00 am'>6:00 am</option>
												  <option value='07:00:00 am'>7:00 am</option>
												  <option value='08:00:00 am'>8:00 am</option>
												  <option value='09:00:00 am'>9:00 am</option>
												  <option value='10:00:00 am'>10:00 am</option>
												  <option value='11:00:00 am'>11:00 am</option>
												  <option value='12:00:00 pm'>12:00 pm</option>
												  <option value='01:00:00 pm'>1:00 pm</option>
												  <option value='02:00:00 pm'>2:00 pm</option>
												  <option value='03:00:00 pm'>3:00 pm</option>
												  <option value='04:00:00 pm'>4:00 pm</option>
												  <option value='05:00:00 pm'>5:00 pm</option>
												  <option value='06:00:00 pm' selected>6:00 pm</option>
												  <option value='07:00:00 pm'>7:00 pm</option>
												  <option value='08:00:00 pm'>8:00 pm</option>
												  <option value='09:00:00 pm'>9:00 pm</option>
												  <option value='10:00:00 pm'>10:00 pm</option>
												  <option value='11:00:00 pm'>11:00 pm</option>
                                             

                                          </select>
                                          
                                        </div>
                                        <input type='submit' class='btn btn btn-warning' style='display:inline;margin-top:0px;margin-left:88px;margin-bottom:10px' value='Create Employee ID'>
                                             <br>

                                    </form>";
?></div></div>

                        <div class="row">
	                     	 		<div class="col-md-12"><br>
	                     	 			<button onclick="show_employee_id()" class="btn btn-primary">Show Employee IDs</button><br><br>
	                     	 		</div>
	                   	</div>

                        <div class="row">
                        	<div class="col-md-12">
                               <?php

                               $sqlquery4="SELECT * from employeeid_validation";
                                    $result4=mysqli_query($connection_static,$sqlquery4);
                                    if(mysqli_num_rows($result4)>0)
                                         {
                                         	echo "<table id='show_employee_id' style='display:none;' class='table table-responsive-xs table-hover table-condensed'>";
                                              while($row=mysqli_fetch_assoc($result4))
                                                  {
							                          $first_name=$row["first_name"];
							                          $last_name=$row["last_name"];
							                          $department=$row["department"];
							                          $id=$row["id"];
							                        		
							                      

                                                    if($department=="IT")
				                                    {
				                                    $department=str_replace("IT", "01", $department);
				                                    } 
				                                    elseif($department=="Sales")
				                                    {
				                                    $department=str_replace("Sales", "02", $department);
				                                    }
				                                    elseif($department=="Marketing")
				                                    {
				                                    $department=str_replace("Marketing", "03", $department);
				                                    }
				                                    elseif($department=="Admin")
				                                    {
				                                    $department=str_replace("Admin", "04", $department);
				                                    }
				                                    elseif($department=="Accounting")
				                                    {
				                                    $department=str_replace("Accounting", "05", $department);
				                                    }
				                                    elseif($department=="HR")
				                                    {
				                                    $department=str_replace("HR", "06", $department);
				                                    }

				                                    $firstCharacter = substr($first_name, 0, 1);
				                                    $firstTwoCharacters = substr($last_name, 0, 2);
				                                    $firstCharacter=strtoupper($firstCharacter);
				                                    $firstTwoCharacters=strtoupper($firstTwoCharacters);
				                                    $unique_id=str_pad($id, 4 , "0", STR_PAD_LEFT);
                                         $employee_id="FIL".$department.$unique_id.$firstCharacter.$firstTwoCharacters;
                                                  $sql_employee_id= "UPDATE employeeid_validation SET employee_id = '$employee_id' WHERE id = '$id'";
                                                  $result_employee_id=mysqli_query($connection_static,$sql_employee_id);
                                      echo "<tr><td class='text-left'><b>".$id.". "."<span class='text-capitalize'>".$first_name." ".$last_name."</b></span></td><td class='text-left'><b>FIL".$department.$unique_id.$firstCharacter.$firstTwoCharacters."</b></td></tr>";
                                                }
                                                echo "</table>";
							              }
							         else
							         	  {
							         	  	echo "Unsuccessful";
							         	  }

                               ?>

                        	</div>
                        </div>
               
                       </div>
                       <div class="col-md-3">
                       </div>
                      </div>
				    </div>








				<div class="col-md-6">

	         <?php
                    echo "<h4 style='color:white;' ><span id='span2' style='border-radius:5px; padding-left:5px; padding-right:5px;'>Employees On Leave Today</span></h4>";
	         
	$sqlquery2="SELECT * FROM request_leave where dates='$date'";
	$result2=mysqli_query($connection_static,$sqlquery2);
	$count1=mysqli_num_rows($result2);
	if(mysqli_num_rows($result2)>0)
	 {
	 	while($row2=mysqli_fetch_assoc($result2))
	 	{
	 		$reason[]=$row2["reason"];
	 		$referenceId[]=$row2["reference_id"];

	 	}
                for($i=0;$i<$count1;$i++)
	 	{  
	 	   $sqlquery3="SELECT * FROM signup where id='$referenceId[$i]'";
	 	   $result3=mysqli_query($connection_static,$sqlquery3);
	 	   if(mysqli_num_rows($result3)>0)
               {  	  
	 	          while($row3=mysqli_fetch_assoc($result3))
		 	             {
		 		             $firstname1=$row3["firstname"];
		 		             $lastname1=$row3["lastname"];
		 		             echo "<p id='div1' class='text-capitalize'><b>".$firstname1." ".$lastname1." :"."</b>"." ".$reason[$i]."<br></p>";		 		             
		                 }

	              
	            }

	 	}
	 	 
	 }

	 else{
	 	echo "<br>";
	 	echo"<b>No Employee On Leave Today</b>";
	 }

	?>
     


	         <?php
	               echo "<br><hr>";
	               echo "<h4 style='color:white;' ><span id='span3' style='border-radius:5px; padding-left:5px; padding-right:5px;'>Employee Working Today</span></h4><br>";
     for($i=0;$i<$count;$i++)
			       {  
                               $email[$i] = str_replace("@", "AT", $email[$i]);
			           $email[$i] = str_replace(".", "DOT", $email[$i]);
			           $temp_email = $email[$i];
                               $sqlquery1="SELECT * from $temp_email where dates='$date' ";
			           $result1 = mysqli_query($connection_dynamic,$sqlquery1);
			           if(mysqli_num_rows($result1)>0)
			              {		    
			                  while ($row1 = mysqli_fetch_assoc($result1)) 
			                     {
						         	$leaving_home = $row1["leaving_home"];
						         	$office_login = $row1["office_login"];
						         	$lunch_start = $row1["lunch_start"];
						         	$lunch_finish = $row1["lunch_finish"];
						         	$leaving_office = $row1["leaving_office"];
	                                $show_id = "table".$i;          
						         	echo "<button onclick='showData(".json_encode($show_id).");' class='btn btn-primary text-capitalize' style='display:inline-block;margin-bottom:4px;'>".$firstname[$i]." ".$lastname[$i]."</button>"."<br>"."<table id='".$show_id."' style='display:none;' class='table table-responsive-xs table-hover table-condensed'><tr><th>"."Leaving Home"."</th><td>".$leaving_home."</td></tr>"."<tr><th>"."Arrived At Office"."</th><td>".$office_login."</td></tr>"."<tr><th>"."Lunch In"."</th><td>".$lunch_start."</td></tr>"."<tr><th>"."Lunch Out"."</th><td>".$lunch_finish."</td></tr>"."<tr><th>"."Leaving Office"."</th><td>".$leaving_office."</td></tr></table>"."<br>";
			                        
			                     }
			               }
                                     }
                         mysqli_close($connection_static);
                 mysqli_close($connection_dynamic);

	         ?>
	     </div>
	     
	 </div>
				
			</div>






		</div>

	<script type="text/javascript">
		var temp =0;
		var arr = [];
		function showData(idd)
		{   var id = idd;
			if(!arr.includes(id))
			{
               arr.push(id);
               temp = 0; 
			}
			else
			{
				var index = arr.indexOf(id);
				arr.splice(index,1);
				temp = 1;
			}
                   if(temp == 0)
			{
			 document.getElementById(id).style.display="";
			 temp = 1;
			}
			else
			{
			
			   document.getElementById(id).style.display = "none";
			   temp = 0;
			}

			
		}
		var temp2=1;
		function add_employee()
		{   
			if(temp2==1)
			{
			document.getElementById("add_employee").style.display="block";
			temp2=0;
		    }
		    else
		    {
		    document.getElementById("add_employee").style.display="none";
		    temp2=1;	
		    }

		}
		var temp3=1;
		function show_employee_id()
		{
			if(temp3==1)
			{
			document.getElementById("show_employee_id").style.display="block";
			temp3=0;
	     	}
	     	else
	     	{
             document.getElementById("show_employee_id").style.display="none";
			temp3=1;
	     	}
		}
         </script>
	</body>
	</html>

    <?php

if($user_type1=="HR" || $user_type1=="Super User")
{
 echo "<script>document.getElementById('statistics').setAttribute('style','display:default')</script>";
 echo "<script>document.getElementById('dashboard1').setAttribute('style','display:default')</script>";
}
elseif($user_type1=="Employee")
{
 echo "<script>document.getElementById('statistics').setAttribute('style','display:default')</script>";
}
?>