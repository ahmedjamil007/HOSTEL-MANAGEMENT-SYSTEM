<?php
session_start();
include('includes/config.php');

include('includes/checklogin.php');
check_login();
?>




<!DOCTYPE html>

<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Baiust Hostel</title>
      <link rel="stylesheet" href="style.css">
      
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
      <style >
        th{
          background-color: black;
          color: white;
          text-align: center;
        }
        td{
          text-align: center;
        }
      </style>
   </head>



   <body >


      <div class="wrapper">
         <input  type="checkbox" id="btn" hidden>
         <label for="btn" class="menu-btn">
         <i class="fas fa-bars"></i>
         <i class="fas fa-times"></i>
         </label>
          <?php include('includes/sidebar.php');?>
      </div><!--sideber-->






    
                






</div>
<br>
<hr>
  <?php 
   $aregno=$_SESSION['regno'];
   $ret="select * from accounts where regno=?";
   $stmt= $mysqli->prepare($ret) ;
   $stmt->bind_param('s',$aregno);
   $stmt->execute() ;//ok
   $res=$stmt->get_result();
   //$cnt=1;
     while($row=$res->fetch_object())
    {
      ?>
                 <h1 style="text-align: center;"><b><u><?php echo $row->firstname;?>'s Meal details</u></b></h1>

  <?php } ?>
<br>

<table style="width:70%;margin-left: 275px;background-color: #F2F2F2;font-weight: bold;">
 
  <tr>
<th>Meal</th>
<th>Bill</th>
<th>Num of Guest</th>
<th>Guest bill</th>
<th>Place</th>
<th>Date</th>


 <?php 
   $aregno=$_SESSION['regno'];
   $ret="select * from meal_bill where regno=?AND month( sub_date)=month(now()) ORDER BY sub_date DESC";
   $stmt= $mysqli->prepare($ret) ;
   $stmt->bind_param('s',$aregno);
   $stmt->execute() ;//ok
   $res=$stmt->get_result();
   //$cnt=1;
     while($row=$res->fetch_object())
    {
      ?>

  </tr>
  <tr>
  <td><?php echo $row->meal_type;?></td>
  <td><?php echo $row->personal;?></td>
  <td><?php echo $row->guest_no?></td>
  <td><?php echo $row->guest?></td>
  <td><?php echo $row->place?></td>
  <td><?php echo $row->sub_date?></td>
</tr>
  <?php } ?>
</table>

   </body>
   
   <script type="text/javascript"></script>
</html>