<?php
session_start();
include('includes/config.php');
include('includes/checklogin.php');
check_login();
//code for complain
if(isset($_POST['submit']))
{
$regno=$_POST['regno'];
$roomno=$_POST['roomno'];
$num_of_day=$_POST['num_of_day'];
$num_of_guest=$_POST['num_of_guest'];
$perdaybill=$_POST['perdaybill'];
$room_bill=$_POST['room_bill'];

$query="insert into guestdetails(regno,roomno,num_of_day,num_of_guest,perdaybill,room_bill) values(?,?,?,?,?,?)";
$stmt = $mysqli->prepare($query);
$rc=$stmt->bind_param('ssssss',$regno,$roomno,$num_of_day,$num_of_guest,$perdaybill,$room_bill);
$stmt->execute();

header('location:guest.php');
}
?>






<!DOCTYPE html>

<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Baiust Hostel</title>
      <link rel="stylesheet" href="style.css">
      
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
   </head>
   <body>




      <div class="wrapper">
         <input  type="checkbox" id="btn" hidden>
         <label for="btn" class="menu-btn">
         <i class="fas fa-bars"></i>
         <i class="fas fa-times"></i>
         </label>
          
         <?php include('includes/sidebar.php');?>
      
      </div><!--sidebar-->





      
  <div class="content">
             <img  style="margin-top: 10px;"src="images.png"class="center" />




              <h1>Guest Details</h1>




<div class="container" style="margin-right: 200px; margin-left: 274px;margin-top: 10px; ">



  <form method="post">
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

    <div class="row">
      <div class="col-25">
           <label for="fname"> Student Id</label>
      </div>
      <div class="col-75">
           <input class="o" type="text" id="fname" name="regno"value="<?php echo $row->regno;?>" readonly >
      </div>
  </div>

 <?php } ?>

  <div class="row">
    <?php 
   $aregno=$_SESSION['regno'];
   $ret="select * from room where regno=?";
   $stmt= $mysqli->prepare($ret) ;
   $stmt->bind_param('s',$aregno);
   $stmt->execute() ;//ok
   $res=$stmt->get_result();
   //$cnt=1;
     while($row=$res->fetch_object())
    {
      ?>
    <div class="col-25">
      <label for="lname">Room no.</label>
    </div>
    <div class="col-75">
      <input class="o" type="text" id="lname" name="roomno" value="<?php echo $row->room_no;?>" readonly>
    </div>
    <?php } ?>
  </div>





 




       <div class="row">
                   <div class="col-25">
                    <label for="fname"> Number of days Stay</label>
               </div>
                <div class="col-75">
                  <input class="o" type="text"  id="value1" name="num_of_day" placeholder="">
              </div>
             
             </div>
                 <div class="row">
                  
                   <div class="col-25">
                    <label for="fname"> Number of Guest</label>
               </div>
                <div class="col-75">
                  <input class="o" type="text"  id="value2" name="num_of_guest"  placeholder="">
              </div>
             </div>


        <div class="row">

          <?php

 include 'conn.php'; 
 $q = "select * from guest ";

 $query = mysqli_query($con,$q);

 while($res = mysqli_fetch_array($query)){
 ?>


              <div class="col-25">
            <label for="lname">  Room bill(per day):</label>
         </div>
        <div class="col-75">
          <input class="o" type="text" id="value3" name="perdaybill" value="<?php echo $res['perdaybill'];  ?>" readonly>
        </div>
     <?php } ?>
         </div>


         <div class="row">
              <div class="col-25">
            <label for="lname"> Total Room bill:</label>
         </div>
        <div class="col-75">
          <input class="o" type="text"  id="sum" name="room_bill" placeholder="">
        </div>
    
         </div>
  
 
  <br>
  <div class="row">
   <input class="o" type="submit" name="submit" Value="Submit" class="btn btn-primary">
  </div>

  



  </form>


</div>
<div>

                 
        <p> "Baiust Hostel Management"</p>      
      </div>
      <script type="text/javascript">
        $(function(){
            $('#value1, #value2,#value3').keyup(function(){
               var value1 = parseFloat($('#value1').val()) || 0;
               var value2 = parseFloat($('#value2').val()) || 0;
              var value3 = parseFloat($('#value3').val()) || 0;
               $('#sum').val(value1 * value2 * value3);
            });
         });
       </script>
   </body>
</html>