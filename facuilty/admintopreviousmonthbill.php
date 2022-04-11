<?php
session_start();
include('includes/config.php');
include('includes/checklogin.php');
check_login();
//code for complain
//code for complain
if(isset($_POST['submit']))
{
$regno=$_POST['regno'];
$t_bill=$_POST['t_bill'];
$p_bill=$_POST['p_bill'];
$due=$_POST['due'];


$query="insert into s_bill(regno,t_bill,p_bill,due) values(?,?,?,?)";
$stmt = $mysqli->prepare($query);
$rc=$stmt->bind_param('siii',$regno,$t_bill,$p_bill,$due);
$stmt->execute();

header('location:../admintopreviousmonthbill.php');
}

$aregno=$_SESSION['regno'];
if(isset($_POST['update']))
{



$t_bill=$_POST['t_bill'];
$p_bill=$_POST['p_bill'];
$due=$_POST['due'];
            
            






$query="update  s_bill set t_bill=?,p_bill=?,due=? where regno=?";
$stmt = $mysqli->prepare($query);
$rc=$stmt->bind_param('sssi',$t_bill,$p_bill,$due,$aregno);
$stmt->execute();
echo"<script>alert('Profile updated Succssfully');</script>";
header('location:admintopreviousmonthbill.php');

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
      <style type="text/css">#tarih {
  color: #111;
  font-size: 25px;
  font-weight: bold;
  text-align: center;
  letter-spacing: 5px;
  text-shadow: 1px 1px 2px #eee;
  background-color: blueviolet;
  margin-left: 50px;
  margin-right: 50px;
  border-radius: 25px;
}
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;margin-top: 20px;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}


</style>
   </head>
   <body>


 <div class="wrapper">
         <input  type="checkbox" id="btn" hidden>
         <label for="btn" class="menu-btn">
         <i class="fas fa-bars"></i>
         <i class="fas fa-times"></i>
         </label>
          <?php include('includes/billsidebar.php');?>
      </div>

      
          
         
      
    





      
  <div class="content">
             
              <?php 
$aregno=$_SESSION['regno'];
  $ret="select * from f_accounts where regno=?";
    $stmt= $mysqli->prepare($ret) ;
   $stmt->bind_param('s',$aregno);
   $stmt->execute() ;//ok
   $res=$stmt->get_result();
   //$cnt=1;
     while($row=$res->fetch_object())
    {
      ?>
                 <h1 style="text-align: center;"><b><u><?php echo $row->firstname;?>'s bill details</u></b></h1>

  <?php } ?>




<div class="container" style="margin-right: 200px; margin-left: 274px;margin-top: 10px; ">




  <!--<table style="width:100%;border:1px solid black;">

  <tr>
    <?php 
$aregno=$_SESSION['regno'];
  $ret="select * from f_accounts where regno=?";
    $stmt= $mysqli->prepare($ret) ;
   $stmt->bind_param('s',$aregno);
   $stmt->execute() ;//ok
   $res=$stmt->get_result();
   //$cnt=1;
     while($row=$res->fetch_object())
    {
      ?>
    <th style="text-align: center;">Student Id:"<?php echo $row->regno;?>"</th><?php } ?>
    <?php 
$aregno=$_SESSION['regno'];
  $ret="select * from f_room where regno=?";
    $stmt= $mysqli->prepare($ret) ;
   $stmt->bind_param('s',$aregno);
   $stmt->execute() ;//ok
   $res=$stmt->get_result();
   //$cnt=1;
     while($row=$res->fetch_object())
    {
      ?>
    <th style="text-align: center;">Room no:<?php echo $row->room_no;?></th>
    <th style="text-align: center;">Bed no:<?php echo $row->bed_no;?></th><?php } ?>
  </tr>
 
</table>-->
<h1>Bill info</h1>

<div style="font-size: 20px; color: black;font-weight: bold;"><u>Bill info previous month
  <?php 
  date_default_timezone_set('Asia/Dhaka');
$currentMonth = date('F');
echo Date('F', strtotime($currentMonth . " last month"));?></u></div>
<table id="table" border="1">
            <tr>
                <th>Type</th>
                <th>Month/Day</th>
                <th>Value</th>
            </tr>
            <tr>
                <td>Bed Rent</td>
                <?php 
$aregno=$_SESSION['regno'];
  $ret="select * from f_room where regno=?";
    $stmt= $mysqli->prepare($ret) ;
   $stmt->bind_param('s',$aregno);
   $stmt->execute() ;//ok
   $res=$stmt->get_result();
   //$cnt=1;
     while($row=$res->fetch_object())
    {
      ?>
                <td>Per Month</td>
               <td><?php echo $row->bed_rent;?></td><?php } ?>
            </tr>
            <tr>
                <td>Mill Bill</td>
                <?php 
$aregno=$_SESSION['regno'];
  $ret="select SUM(personal) as bll from meal_bill where regno=? AND month(timestamp)=month(now())-1 ";
    $stmt= $mysqli->prepare($ret) ;
   $stmt->bind_param('s',$aregno);
   $stmt->execute() ;//ok
   $res=$stmt->get_result();
   //$cnt=1;
     while($row=$res->fetch_object())
    {
      ?>
                <td>Per day</td>
                <td>0<?php echo $row->bll;?></td>
                            <?php } ?>
            </tr>
            <tr>
                <td>Guest room bill</td>
                
                <td>Per day</td>
                <?php 
$aregno=$_SESSION['regno'];
  $ret="select SUM(room_bill) as bill from guestdetails where regno=? AND month(timestamp)=month(now())-1";
    $stmt= $mysqli->prepare($ret) ;
   $stmt->bind_param('s',$aregno);
   $stmt->execute() ;//ok
   $res=$stmt->get_result();
   //$cnt=1;
     while($row=$res->fetch_object())
    {
      ?>
                <td>0<?php echo $row->bill;?></td>
                             <?php } ?>
            </tr>
            <tr>
                <td>Guest Mill Bill</td>
                <?php 
$aregno=$_SESSION['regno'];
  $ret="select SUM(guest) as bil from meal_bill where regno=? AND month(timestamp)=month(now())-1 ";
    $stmt= $mysqli->prepare($ret) ;
   $stmt->bind_param('s',$aregno);
   $stmt->execute() ;//ok
   $res=$stmt->get_result();
   //$cnt=1;
     while($row=$res->fetch_object())
    {
      ?>
                <td>Per day</td>
               <td>0<?php echo $row->bil;?></td>
                            <?php } ?>
            </tr>
            
           
        </table>
        <span id="val"></span>

<h1>  Billing system</h1>

<table>

  <tr>
    <td style="width:50%">
       <h3 style="text-align:center">Insert Bill info</h3>
    <form method="post">
  <div class="row">
    <?php 
$aregno=$_SESSION['regno'];
  $ret="select * from f_accounts where regno=?";
    $stmt= $mysqli->prepare($ret) ;
   $stmt->bind_param('s',$aregno);
   $stmt->execute() ;//ok
   $res=$stmt->get_result();
   //$cnt=1;
     while($row=$res->fetch_object())
    {
      ?>
              <div class="col-25">
            <label for="lname"> Student Id:</label>
         </div>
        <div class="col-75">
          <input class="o" type="text"   id="val" name="regno" value="<?php echo $row->regno;?>" placeholder=""> <?php } ?>
        </div>
    
         </div>
   <div class="row">
              <div class="col-25">
            <label for="lname"> Total  bill:</label>
         </div>
        <div class="col-75">
          <input class="o" type="text"   id="value1" name="t_bill" placeholder="">
        </div>
    
         </div>
          <div class="row">
              <div class="col-25">
            <label for="lname"> Paybill:</label>
         </div>
        <div class="col-75">
          <input class="o" type="text"   id="value2" name="p_bill" placeholder="">
        </div>
    
         </div>

   <div class="row">
              <div class="col-25">
            <label for="lname"> Due:</label>
         </div>
        <div class="col-75">
          <input class="o" type="text"  id="sum" name="due" placeholder="">
        </div>
    
         </div>

         <br>
   
<div class="row">
   <input class="o" type="submit" name="submit" Value="Submit" class="btn btn-primary">
  </div>
   </form>
    </td>














    <td style="width:50%">
 <h3 style="text-align:center">Update Billing</h3>
      <form method="post">
  <div class="row">
    <?php 
$aregno=$_SESSION['regno'];
  $ret="select * from f_accounts where regno=?";
    $stmt= $mysqli->prepare($ret) ;
   $stmt->bind_param('s',$aregno);
   $stmt->execute() ;//ok
   $res=$stmt->get_result();
   //$cnt=1;
     while($row=$res->fetch_object())
    {
      ?>
              <div class="col-25">
            <label for="lname"> Student Id:</label>
         </div>
        <div class="col-75">
          <input class="o" type="text"   id="val" name="regno" value="<?php echo $row->regno;?>" placeholder=""> <?php } ?>
        </div>
    
         </div>
   <div class="row">
    <?php 
$aregno=$_SESSION['regno'];
  $ret="select * from s_bill where regno=? AND month(date)=month(now())";
    $stmt= $mysqli->prepare($ret) ;
   $stmt->bind_param('s',$aregno);
   $stmt->execute() ;//ok
   $res=$stmt->get_result();
   //$cnt=1;
     while($row=$res->fetch_object())
    {
      ?>
              <div class="col-25">
            <label for="lname"> Total  bill:</label>
         </div>
        <div class="col-75">
          <input class="o" type="text"   id="value11" name="t_bill"value="<?php echo $row->t_bill;?>"  placeholder="">
        </div>
    
         </div>
          <div class="row">
              <div class="col-25">
            <label for="lname"> Paybill:</label>
         </div>
        <div class="col-75">
          <input class="o" type="text"   id="value22" name="p_bill"value="<?php echo $row->p_bill;?>"  placeholder="">
        </div>
    
         </div>

   <div class="row">
              <div class="col-25">
            <label for="lname"> Due:</label>
         </div>
        <div class="col-75">
          <input class="o" type="text"  id="su" name="due"value="<?php echo $row->due;?>"  placeholder=""><?php } ?>
        </div>
    
         </div>

         <br>
   
<div class="row">
    <input  class="o"type="submit" name="update" value="Submit">
  </div>
   </form></td>
    
  </tr>
 
 
</table>

 



</div>























      <script>
   

   
     var table = document.getElementById("table"), sumVal = 0;
            
            for(var row = 1; row < table.rows.length; row++)
            {
                sumVal = sumVal + parseInt(table.rows[row].cells[2].innerHTML);
            }
            
            document.getElementById("val").innerHTML = "Total  = " + sumVal;
            console.log(sumVal);
</script>
      <script type="text/javascript">var myDate = new Date();

var myMonths = [
  "January",
  "February",
  "Marh",
  "April",
  "May",
  "June",
  "July",
  "Auguest",
  "September",
  "October",
  "November",
  "December"
];

document.getElementById("tarih").innerHTML =
  myDate.getDate() +
  " " +
  myMonths[myDate.getMonth()] +
  " " +
  myDate.getFullYear();
</script>
<script>$(function(){
            $('#value1, #value2').keyup(function(){
               var value1 = parseFloat($('#value1').val()) || 0;
               var value2 = parseFloat($('#value2').val()) || 0;
               $('#sum').val(value1 - value2);
            });
         });</script>


         <script>$(function(){
            $('#value11, #value22').keyup(function(){
               var value11 = parseFloat($('#value11').val()) || 0;
               var value22 = parseFloat($('#value22').val()) || 0;
               $('#su').val(value11 - value22);
            });
         });</script>
   </body>
</html>