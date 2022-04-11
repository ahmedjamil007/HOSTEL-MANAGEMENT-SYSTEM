<?php
session_start();
include('includes/config.php');

include('includes/checklogin.php');
check_login();
$aregno=$_SESSION['regno'];
if(isset($_POST['update']))
{

            
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $dept = $_POST['dept'];
            
            $gender = $_POST['gender'];
            $contact = $_POST['contact'];
            $email = $_POST['email'];
            $level = $_POST['level'];
            $term = $_POST['term'];

            
            $gname = $_POST['gname'];
        
            $gcontact = $_POST['gcontact'];
            $address = $_POST['address'];
               $religion = $_POST['religion'];






$query="update  accounts set firstname=?,lastname=?,dept=?,gender=?,contact=?,email=?,level=?,term=?,gname=?,gcontact=?,address=?,religion=? where regno=?";
$stmt = $mysqli->prepare($query);
$rc=$stmt->bind_param('ssssssssssssi',$firstname,$lastname,$dept,$gender,$contact,$email,$level,$term,$gname,$gcontact,$address,$religion,$aregno);
$stmt->execute();
echo"<script>alert('Profile updated Succssfully');</script>";
header('location:my-profile.php');

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
   <body >


      <div class="wrapper">
         <input  type="checkbox" id="btn" hidden>
         <label for="btn" class="menu-btn">
         <i class="fas fa-bars"></i>
         <i class="fas fa-times"></i>
         </label>
          <?php include('includes/sidebar.php');?>
      </div>






      <div class="content">
          <div>
                <img style="margin-top:550px" src="images.png"class="center" /> 
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
                 <h1><b><u><?php echo $row->firstname;?>'s Profile</u></b></h1>

  <?php } ?>
<div class="container" style="margin-right: 200px; margin-left: 274px;margin-top: 15px; ">
  <form method="post" style="margin-top:15px"onSubmit="return valid();">

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
               <label class="l" for="regno">Student Id:</label>
           </div>
          <div class="col-75">
               <input class="o" type="text" id="regno" name="regno"value="<?php echo $row->regno;?>"readonly >
          </div>
          </div>


  <div class="row">
    <div class="col-25">
      <label for="firstname"> Firstame:</label>
    </div>
    <div class="col-75">
      <input class="o"type="text" id="firstname" name="firstname"value="<?php echo $row->firstname;?>" >
    </div>
  </div>
 
  <div class="row">
    <div class="col-25">
      <label for="firstname"> lastame:</label>
    </div>
    <div class="col-75">
      <input class="o"type="text" id="firstname" name="lastname"value="<?php echo $row->lastname;?>" >
    </div>
  </div>
 <div class="row">
    <div class="col-25">
      <label for="dept"> Department:</label>
    </div>
    <div class="col-75">
      <input class="o"type="text" id="dept" name="dept"value="<?php echo $row->dept;?>" >
    </div>
  </div>

  <div class="row">
    <div class="col-25">
      <label for="gender">Gender:</label>
    </div>
    <div class="col-75">
      <input class="o" type="text" id="gender" name="gender"value="<?php echo $row->gender;?>" >
    </div>
  </div>



  <div class="row">
    <div class="col-25">
      <label for="contact">Contact No:</label>
    </div>
    <div class="col-75">
      <input class="o" type="text" id="contact" name="contact" value="<?php echo $row->contact;?>">
    </div>
  </div>



 <div class="row">
    <div class="col-25">
      <label for="email">Email id:</label>
    </div>
    <div class="col-75">
      <input class="o" type="text" id="email" name="email"value="<?php echo $row->email;?>" >
    </div>
  </div>
   <div class="row">
    <div class="col-25">
      <label for="level"> Level:</label>
    </div>
    <div class="col-75">
      <input class="o"type="text" id="level" name="level"value="<?php echo $row->level;?>" >
    </div>
  </div>
   <div class="row">
    <div class="col-25">
      <label for="term"> Term:</label>
    </div>
    <div class="col-75">
      <input class="o"type="text" id="term" name="term"value="<?php echo $row->term;?>" >
    </div>
  </div>
   <div class="row">
    <div class="col-25">
      <label for="gname"> Gurdian name:</label>
    </div>
    <div class="col-75">
      <input class="o"type="text" id="gname" name="gname" value="<?php echo $row->gname;?>">
    </div>
  </div>


    <div class="row">
    <div class="col-25">
      <label for="gcontact"> Gurdian contact:</label>
    </div>
    <div class="col-75">
      <input class="o"type="text" id="gcontact" name="gcontact"value="<?php echo $row->gcontact;?>" >
    </div>
  </div>
   <div class="row">
    <div class="col-25">
      <label for="address"> Address:</label>
    </div>
    <div class="col-75">
      <input class="o"type="text" id="address" name="address"value="<?php echo $row->address;?>" >
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="address"> Religion:</label>
    </div>
    <div class="col-75">
      <input class="o"type="text" id="address" name="religion"value="<?php echo $row->religion;?>" >
    </div>
  </div>
   
  <br>
   
<div class="row">
    <input  class="o"type="submit" name="update" value="Submit">
  </div>



<?php } ?>
  </form>

</div>



</div>
<br>
<hr>
<h1 style="text-align: center;">Room Details</h1>
<br>

<table style="width:70%;margin-left: 275px;background-color: #F2F2F2;font-weight: bold;border-radius: 15px; border: 5px solid black;">
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
  <tr>
    <td>Building Name-<?php echo $row->Building_Name;?></td>
    <td>Floor No-<?php echo $row->floor_no;?></td>
    <td>Room No-<?php echo $row->room_no;?></td>
    <td>Bed No-<?php echo $row->bed_no;?></td>
    <td>Bed Location-<?php echo $row->bed_location;?></td>
    <td>Bed rent-<?php echo $row->bed_rent;?></td>

  </tr>
  <?php } ?>
</table>
<div>




                 
        <p> "Baiust Hostel Managment"</p>      
      </div>
   </body>
   
   <script type="text/javascript"></script>
</html>