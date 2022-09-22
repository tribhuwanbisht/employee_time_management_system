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
$email=$_SESSION["check_points_email"];
?>


<?php
$condition_check=1;
 $email1=array();
      $user_type=array();
      $sqlquery3="SELECT * from signup ";
      $result3=mysqli_query($connection_static,$sqlquery3);
      $count3=mysqli_num_rows($result3);
      if(mysqli_num_rows($result3)>0)
      {
        while ($row=mysqli_fetch_assoc($result3)) 
        {
          $email1[]=$row["email"];
          $user_type[]=$row["user_type"];        
        } 
        for($i=0;$i<$count3;$i++)
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
$sqlquery="SELECT id from signup where email ='$email'";
$result=mysqli_query($connection_static,$sqlquery);

if(mysqli_num_rows($result)==1)
 	{
       while ($row=mysqli_fetch_assoc($result)) 
	       {
	           $id=$row["id"];
	       }
 	}	
 $sqlquery2="SELECT reference_id from request_leave where reference_id='$id'";
 $result2=mysqli_query($connection_static,$sqlquery2);
 $count=mysqli_num_rows($result2);
 $holiday_left=10-$count;
?>

<?php
   $office_login=array();
   $leaving_home=array();
   $date1=array();
   $shift_starting_time;

             $sqlquery5="SELECT shift_starting_time from signup where email='$email'";
             $result5=mysqli_query($connection_static,$sqlquery5);
             // $count5=mysql_num_rows($result5);
             if(mysqli_num_rows($result5)>0)
             {
             while($row=mysqli_fetch_assoc($result5))
                 {
                      $shift_starting_time=$row["shift_starting_time"];
                      $shift_starting_time=str_replace("am","",$shift_starting_time);
                      $shift_starting_time=str_replace("pm","",$shift_starting_time);
                      $shift_starting_time= trim($shift_starting_time);
                 }
                 
             }

             elseif(mysqli_num_rows($result5)==0)
             {
              echo "tanmay<br>";
             }


             $office_login_temp="";
             $average_punctuality=0;
             $average_commmute_time=0;
             $email = str_replace("@", "at", $email);
             $email = str_replace(".", "dot", $email);
             $sqlquery4 ="SELECT leaving_home , office_login from $email where office_login!='' && leaving_home!=''";
             $result4=mysqli_query($connection_dynamic,$sqlquery4);
             $count4=mysqli_num_rows($result4);
             $temp_count4=$count4;
             $temp_commute=$count4;


if(mysqli_num_rows($result4)>0)
             {

             while($row=mysqli_fetch_assoc($result4))
             	   {

                       $office_login_temp=$row["office_login"];
                       $leaving_home_temp=$row["leaving_home"];
                       $office_login_temp_1=substr($office_login_temp, -2);
                       $leaving_home_temp_1=substr($leaving_home_temp, -2);
 $office_login_temp = str_replace("am", "", $office_login_temp); 
                       $office_login_temp = str_replace("pm", "", $office_login_temp); 
                       $office_login_temp = trim($office_login_temp);
                       $leaving_home_temp = str_replace("am", "", $leaving_home_temp); 
                       $leaving_home_temp = str_replace("pm", "", $leaving_home_temp); 
                       $leaving_home_temp = trim($leaving_home_temp);
                  array_push($office_login,$office_login_temp); 
                       array_push($leaving_home,$leaving_home_temp);

                       
                       $office_login_temp = new DateTime($office_login_temp);   
                       $shift_starting_time_compare =new DateTime($shift_starting_time);
                       $difference = $office_login_temp->diff($shift_starting_time_compare);


                       $leaving_home_temp = new DateTime($leaving_home_temp);     
                       $difference2= $office_login_temp->diff($leaving_home_temp);
                   $total_minutes = $difference->days * 24 * 60;
                       $total_minutes += $difference->h * 60;
                       $total_minutes += $difference->i;
                       $punctuality=(60-$total_minutes)*100/60;
                        $total_minutes_commute = $difference2->days * 24 * 60;

                       $total_minutes_commute += $difference2->h * 60;
                       $total_minutes_commute += $difference2->i;
                       if($leaving_home_temp_1=="am" && $office_login_temp_1=="pm" && $office_login_temp < $shift_starting_time_compare)
                         {
                           $total_minutes_commute=720-$total_minutes_commute;
                         }
                         $single_commmute_time=$total_minutes_commute;
                       $average_commmute_time+=$single_commmute_time;
                      if($office_login_temp < $shift_starting_time_compare && $office_login_temp_1=="am")
                       {
                          echo $office_login_temp->format('h:i:s')."<br>".$shift_starting_time_compare->format('h:i:s');
                        $punctuality=100; 
                        $average_punctuality+=$punctuality;
                        }
                          elseif($punctuality<0)
                       {
                       
                         $temp_count4--;

                             if($temp_count4==0)
                                 {
                                  $temp_count4=1;
                                  }
                                }

                       else
                       {
                       $average_punctuality+=$punctuality;
                       }
                     }
           }
              else
              {
                 $average_punctuality=0;
              $temp_count4=1;
              $temp_commute=1;
              }
      
              $average_punctuality=$average_punctuality/$temp_count4; 
               $average_commmute_time=$average_commmute_time/$temp_commute;  
              if($average_punctuality==0)
              {
                $average_punctuality="---";
                if($average_commmute_time=="NAN")
                {
                  $average_commmute_time="---";
                }
                $temp_count4=0;
                }
               else
              {
                $condition_check=0;
                $average_punctuality = number_format((float)$average_punctuality, 2, '.', '').'%';
                $average_commmute_time.=' min';
              }

              if($condition_check!=0)
              {
                $average_commmute_time.=' min';
              }
              $count_difference=$count4-$temp_count4;
              

        
              $sqlquery6="SELECT leaving_home , office_login from $email where dates='$date'";
              $result6=mysqli_query($connection_dynamic,$sqlquery6); 
              if(mysqli_num_rows($result6)>0)
             {
               while($row=mysqli_fetch_assoc($result6))
                 {
                  $today_office_login=$row["office_login"];
                  $today_leaving_home=$row["leaving_home"];
                  $today_office_login_temp=substr($today_office_login, -2);
                  $today_office_login = str_replace("am", "", $today_office_login); 
                  $today_office_login = str_replace("pm", "", $today_office_login); 
                  $today_office_login = trim($today_office_login);
                  $today_leaving_home = str_replace("am", "", $today_leaving_home); 
                  $today_leaving_home = str_replace("pm", "", $today_leaving_home); 
                  $today_leaving_home = trim($today_leaving_home);
                  if($today_office_login=="" || $today_leaving_home=="")
                  {
                    $punctuality="---";
                    $today_commute_time="---";
                    break;
                  }
                  $today_office_login = new DateTime($today_office_login); 
                  $today_leaving_home = new DateTime($today_leaving_home); 
                  $difference = $today_office_login->diff($shift_starting_time_compare);
                  $difference2= $today_office_login->diff($today_leaving_home);
                  if ($today_office_login < $shift_starting_time_compare && $today_office_login_temp=="am")
                  {   
                      $punctuality=100;
                       $punctuality.="%";

                       $total_minutes_commute = $difference2->days * 24 * 60;
                       $total_minutes_commute += $difference2->h * 60;
                       $total_minutes_commute += $difference2->i;
                       $today_commute_time=$total_minutes_commute." min";

                       break;
                  }
                   
                   else{
                          $today_commute_time=$total_minutes_commute." min";
$punctuality=(60-$total_minutes)*100/60;
                    $punctuality=number_format((float)$punctuality, 2, '.', '');
if($punctuality<0)
                       {
                        $punctuality=0;
                        $punctuality.="% (More than 1 hour late)";
 }
                       else
                       {
                        $punctuality.="%";
                       }
                    }
                 
                  }
              }
              else
              {
$punctuality="---";
                $today_commute_time="---";
}
?>
<?php
 mysqli_close($connection_static);
   mysqli_close($connection_dynamic);
?>
