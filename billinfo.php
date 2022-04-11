<?php
session_start();
include('includes/config.php');
include('includes/checklogin.php');
check_login();
//code for complain
?>






<!DOCTYPE html>

<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Baiust Hostel</title>
      <link rel="stylesheet" href="style.css">
      
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
          <link rel="stylesheet" type="text/css" href="due.css">
      
   </head>
   <body>




      <div class="wrapper">
         <input  type="checkbox" id="btn" hidden>
         <label for="btn" class="menu-btn">
         <i class="fas fa-bars"></i>
         <i class="fas fa-times"></i>
         </label>
          
         <?php include('includes/sidebar.php');?>
      
      </div>





      
  <div class="content">
             <img  style="margin-top: 10px;"src="images.png"class="center" />    
              <h1>Bill Details</h1>




<div class="container" style="margin-right: 200px; margin-left: 274px;margin-top: 10px; ">


<div id="tarih"></div>

  <!--<table style="width:100%;border:1px solid black;">

  <tr>

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
    <th style="text-align: center;">Student Id:"<?php echo $row->regno;?>"</th><?php } ?>
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
    <th style="text-align: center;">Room no:<?php echo $row->room_no;?></th>
    <th style="text-align: center;">Bed no:<?php echo $row->bed_no;?></th><?php } ?>
  </tr>
 
</table>-->
<hr>
<br>

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
  $ret="select * from room where regno=?";
    $stmt= $mysqli->prepare($ret) ;
   $stmt->bind_param('s',$aregno);
   $stmt->execute() ;//ok
   $res=$stmt->get_result();
   //$cnt=1;
     while($row=$res->fetch_object())
    {
      ?>
                <td>Per Month</td>
               <td>0<?php echo $row->bed_rent;?></td><?php } ?>
            </tr>
            <tr>
                <td>Mill Bill</td>
                <?php 
   $aregno=$_SESSION['regno'];
   $ret="select SUM(personal) as bll from meal_bill where regno=? AND  month(timestamp)=month(now()) ";
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
   $ret="select SUM(room_bill) as bill from guestdetails where regno=? AND month(timestamp)=month(now()) ";
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
    $ret="select SUM(guest) as bil from meal_bill where regno=? AND month(timestamp)=month(now()) ";
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
        <span id="val"></span><br> <br>
        <hr style="margin-top:10px;">



        <div style="font-size: 20px; color: blue;font-weight: bold;"> "Bill info previous month
          <?php 
  date_default_timezone_set('Asia/Dhaka');
$currentMonth = date('F');
echo "<span  >".Date('F', strtotime($currentMonth . " last month"))."<span >";?>"</div>





  <table>
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
    <tr>
      <td> Total Bill:<b> <?php echo $row->t_bill;?></b></td>
       <td> Pay Bill:<b> <?php echo $row->p_bill;?></b></td>
        <td> Due : <b> <?php echo $row->due;?></b></td>
    </tr>

<?php } ?>
  </table>
</div>

<div>


                 
        <p> "Baiust Hostel Management"</p>      
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
  "March",
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
   </body>
</html>