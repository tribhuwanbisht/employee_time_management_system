<!DOCTYPE html>
<html>
<head>
	<title>Statistics</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</head>

	<body>

		<div class="container-fluid" style="padding: 0px;">
			<h1 class="text-center" style="margin-bottom: 6px;padding-bottom: 10px;padding-top: 10px;background: linear-gradient(45deg,#006666,#02d3d3) !important;
color: white !important;
  }">My Statistics</h1>
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
                    <a id="dashboard1" class="nav-link" href="showdata.php" class="btn btn-success" style="display: none;">Dashboard</a>
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

			<div class="container">
				<?php
				  echo "<table id='stat_table' style='font-size:20px;' class='table table-responsive-xs table-hover table-condensed'><tr><th>"."Number of Holidays left out of 10"."</th><td>".$holiday_left."</td></tr><tr><th>Today's Punctuality</th><td>".$punctuality."</td></tr><tr><th>Average Punctuality</th><td>".$average_punctuality."</td></tr><tr><th>Number of Days when I was more than 1 hour late</th><td>".$count_difference."</td></tr><tr><th>Today's Commute Time</th><td>".$today_commute_time."</td></tr><tr><th>Average Commute Time</th><td>".$average_commmute_time."</td></tr><table>";

                ?>
</div>




		</div>
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