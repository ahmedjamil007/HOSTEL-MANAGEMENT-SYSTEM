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
$comname=$_POST['comname'];
$comdescript=$_POST['comdescript'];


$query="insert into complain(regno,roomno,comname,comdescript) values(?,?,?,?)";
$stmt = $mysqli->prepare($query);
$rc=$stmt->bind_param('ssss',$regno,$roomno,$comname,$comdescript);
$stmt->execute();
echo"<script>alert('Student complain Succssfully ');</script>";
header('location:complain.php');
}
?>






<!DOCTYPE html>

<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Baiust Hostel</title>
      <link rel="stylesheet" href="style.css">
      
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
      
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




              <h1>Complain Box</h1>




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
      <label for="country">Complain Name</label>
    </div>
    <div class="col-75">
      <select id="country" name="comname">
        <option value="australia">Select sector of problem..</option>
        <option value="Food">Food</option>
        <option value="Cleaning">Cleaning</option>
        <option value="Electricty">Electricty</option>
        <option value="Others">Others</option>
      </select>
    </div>
  </div>




       <div class="row">
      <div class="col-25">
      <label for="subject">Description</label>
    </div>
    <div class="col-75">
      <textarea id="subject" name="comdescript" placeholder="Write something.." style="height:200px"></textarea>
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
   </body>
</html>