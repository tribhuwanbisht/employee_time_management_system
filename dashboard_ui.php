<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
<style type="text/css"> 
.width{
  width: 170px !important;
}

  td{
     padding: 10px;
    }
</style>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
 	

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</head>
<body>
  <?php
$ipaddress = '';
    if (getenv('HTTP_CLIENT_IP'))
        $ipaddress = getenv('HTTP_CLIENT_IP');
    else if(getenv('HTTP_X_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
    else if(getenv('HTTP_X_FORWARDED'))
        $ipaddress = getenv('HTTP_X_FORWARDED');
    else if(getenv('HTTP_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_FORWARDED_FOR');
    else if(getenv('HTTP_FORWARDED'))
       $ipaddress = getenv('HTTP_FORWARDED');
    else if(getenv('REMOTE_ADDR'))
        $ipaddress = getenv('REMOTE_ADDR');
    else
        $ipaddress = 'UNKNOWN';

        
    
  ?>
	<div class="container-fluid" style="padding: 0px;">
		<h1 class="text-center" style="padding-top: 10px;padding-bottom: 10px; background: linear-gradient(45deg,#006666,#02d3d3);
  color: white;">Welcome 
      <?php 
      $email=array();
      $firstname=array();
      $lastname=array();
      $user_type=array();
      $sqlquery2="SELECT * from signup ";
      $result1=mysqli_query($connection_static,$sqlquery2);
      $count=mysqli_num_rows($result1);
      if(mysqli_num_rows($result1)>0)
      {
        while ($row=mysqli_fetch_assoc($result1)) 
        {
          $email[]=$row["email"];
          $firstname[]=$row["firstname"];
          $lastname[]=$row["lastname"];
          $user_type[]=$row["user_type"];
         }
 for($i=0;$i<$count;$i++)
          {
            if($email[$i]==$_SESSION["check_points_email"])
                {
                  $user_type1=$user_type[$i];
                  echo "<span class='text-capitalize' style=''>".$firstname[$i]." ".$lastname[$i]."</span>";
                }
          }
      }


      ?>
<h5 class="text-center">
			<?php
			  
			?>
		</h5>





    

    <div classs="container" style="box-shadow: 2px 2px 40px black; margin-top:10px;">
   
     <nav class="navbar navbar-expand-md bg-primary navbar-dark" style="background: linear-gradient(45deg,#6699cc,#264d73);">
          <div class="container-fluid">
<button class="navbar-toggler  " type="button" data-toggle="collapse" data-target="#navcollapse">
                                  <span class="navbar-toggler-icon"></span>
                       </button>
           <div class="collapse navbar-collapse" id="navcollapse">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                </li>
                
                <li class="nav-item"> 
                    <a id="dashboard1" class="nav-link" href="showdata.php" class="btn btn-success" style="display: none;">Dashboard</a>
                </li>
                <li class="nav-item">
                <a id="statistics" class="nav-link" href="statistics.php" class="btn btn-success" style="display: none;">My Stats</a>
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
        echo "<b>Date : ".$date."</b>";
      ?>
    </h5>




	    <div class="container-fluid" style="margin-top: 40px;">
	    	<div class="row">
                <div class="col-md-2">
                </div>
                <div class="col-md-6 text-center">
                      <table>
                        <tr>
                          <td>
                	<form action="leavinghome.php" method="post" onsubmit="" class="form-inline">
                		<div class="form-group">

                		<button type="submit" name="leaving_home" id="leaving_home" class="btn btn-primary width">Leaving Home
                		</button></td>
                     <td>
                		<input type="text" disabled name="leavinghome" class="form-control style_1" value="<?php echo($leaving_home); ?>">
                      
                	    </div>
                	</form>
                </td></tr>
 <tr>
                    <td>
                  <form action="officelogin.php" method="post" onsubmit="" class="form-inline">
                    <div class="form-group">

                      <!-- <div class="row">
                        <div class="col-md-4"> -->

                    <button style="width: 100%;" type="submit" name="office_login" id="office_login" class="btn btn-primary width">Arrived At Office
                    </button></td>
                    <td>
<input type="text" disabled name="officelogin" class="form-control style_2" value="<?php echo($office_login); ?>">
</div>
                  </form>
                </td>
                  </tr>

                   <tr>
                    <td>
                  <form action="lunchin.php" method="post" onsubmit="" class="form-inline">
                    <div class="form-group">

                    <button type="submit" name="lunch_start" id="lunch_start" class="btn btn-primary width">Lunch Start
                    </button>
                      </td>
                     <td>

                    <input type="text" disabled name="lunchstart" class="form-control style_3" value="<?php echo($lunch_start); ?>">

                      </div>
                  </form>
                  </td></tr>
 <tr>
                    <td>

                  <form action="lunchout.php" method="post" onsubmit="" class="form-inline">
                    <div class="form-group">

                    <button type="submit" name="lunch_finish" id="lunch_finish" class="btn btn-primary width">Lunch Finish
                    </button>
                    </td>
                     <td>

                    <input type="text" disabled name="lunchfinish" class="form-control style_4" value="<?php echo($lunch_finish); ?>">

                      </div>
                  </form>
                   </td>
                  </tr>
                   <tr>
                    <td>

                  <form action="leavingoffice.php" method="post" onsubmit="" class="form-inline">
                    <div class="form-group">

                    <button type="submit" name="leaving_office" id="leaving_office" class="btn btn-primary width">Leaving Office
                    </button>
                     </td>
                     <td>

                    <input type="text" disabled name="leavingoffice" class="form-control style_5" value="<?php echo($leaving_office); ?>">

                      </div>
                  </form>
                    </td>
                  </tr>
                   <tr>
                    <td>

                  <form action="requestleave.php" method="post" class="form-inline">
                     <div class="form-group">
<button type="submit" disabled name="request_leave" id="request_leave" class="btn btn-primary width">Emergency Leave</button>

                     </td>
                     <td>

                      <textarea required rows="3" cols="22" class="form-control style_7" name="requestleave" style="border-radius: 10px;" id="requestleave" placeholder="Type the reason for leave" value=""><?php echo($request_leave); ?></textarea>
<div class="row">
                    <div class="col-md-12" style="padding: 10px;">
   </div>
                  </div>
                </div>
                      </div>
                  </form>
                  </td>
                  </tr>
                  </table>
              
                  </div>
 	    
	    </div>
<?php

$temp = 0;
if(empty($leaving_home))
      {
        echo "<script>document.getElementById('leaving_home').disabled=false;</script>";
        echo "<script>document.getElementById('request_leave').disabled=false;</script>";
      }
      else
{
 echo "<script>document.getElementById('leaving_home').disabled=true;</script>";
}
if(empty($office_login))
      {
        echo "<script>document.getElementById('office_login').disabled=false;</script>";
      }
      else
      {
        echo "<script>document.getElementById('office_login').disabled=true;</script>";
      }

if(empty($lunch_start))
      {
        echo "<script>document.getElementById('lunch_start').disabled=false;</script>";
      }
      else
      {
        echo "<script>document.getElementById('lunch_start').disabled=true;</script>";
      }

if(empty($lunch_finish))
      {
        echo "<script>document.getElementById('lunch_finish').disabled=false;</script>";
      }
      else
      {
        echo "<script>document.getElementById('lunch_finish').disabled=true;</script>";
      }

if(empty($leaving_office))
      {
        echo "<script>document.getElementById('leaving_office').disabled=false;</script>";
      }
      else
      {
        echo "<script>document.getElementById('leaving_office').disabled=true;</script>";
        echo "<script>document.getElementById('request_leave').disabled=true;</script>";
        echo "<script>document.getElementById('requestleave').disabled=true;</script>";
        $temp=1;
      }

if(empty($request_leave) && $temp==0)
{
   echo "<script>document.getElementById('request_leave').disabled=false;</script>";
}
else
{
 echo "<script>document.getElementById('request_leave').disabled=true;</script>";
 echo "<script>document.getElementById('requestleave').disabled=true;</script>";
 echo "<script>document.getElementById('leaving_home').disabled=true;</script>";
 echo "<script>document.getElementById('office_login').disabled=true;</script>";
 echo "<script>document.getElementById('lunch_start').disabled=true;</script>";
 echo "<script>document.getElementById('lunch_finish').disabled=true;</script>";
 echo "<script>document.getElementById('leaving_office').disabled=true;</script>";
}

if($user_type1=="HR" || $user_type1=="Super User")
{
 echo "<script>document.getElementById('statistics').setAttribute('style','display:default')</script>";
 echo "<script>document.getElementById('dashboard1').setAttribute('style','display:default')</script>";
}
elseif($user_type1=="Employee")
{
 echo "<script>document.getElementById('statistics').setAttribute('style','display:default')</script>";
}
mysqli_close($connection_static);
mysqli_close($connection_dynamic);
?>
</body>
</html>