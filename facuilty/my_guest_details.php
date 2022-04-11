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
      </div>






    
                






</div>
<br>
<hr>
   <?php 
   $aregno=$_SESSION['regno'];
   $ret="select * from f_accounts where regno=? ";
   $stmt= $mysqli->prepare($ret) ;
   $stmt->bind_param('s',$aregno);
   $stmt->execute() ;//ok
   $res=$stmt->get_result();
   //$cnt=1;
     while($row=$res->fetch_object())
    {
      ?>
                 <h1 style="text-align: center;"><b><u><?php echo $row->firstname;?>'s Guest details</u></b></h1>

  <?php } ?>
<br>

<table style="width:70%;margin-left: 275px;background-color: #F2F2F2;font-weight: bold;">
 
  <tr>
<th>Room no</th>
<th>Number of day</th>
<th>Number of Guest</th>
<th>Total Room Bill</th>

<th>Date</th>
 <?php 
$aregno=$_SESSION['regno'];
  $ret="select * from guestdetails where regno=? AND month( timestamp)=month(now())  ORDER BY timestamp  DESC";
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
  <td><?php echo $row->roomno;?></td>
  <td><?php echo $row->num_of_day;?></td>
  <td><?php echo $row->num_of_guest;?></td>
  <td><?php echo $row->room_bill;?></td>
  
  <td><?php echo $row->timestamp?></td>
</tr>
  <?php } ?>
</table>

   </body>
   
   <script type="text/javascript"></script>
</html>