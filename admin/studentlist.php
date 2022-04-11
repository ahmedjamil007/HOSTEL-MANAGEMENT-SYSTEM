<?php
session_start();
include('includes/config.php');
if(isset($_POST['login']))
{
$email=$_POST['email'];
$password=$_POST['password'];
$stmt=$mysqli->prepare("SELECT email,password,regno FROM accounts WHERE email=? and password=? ");
            $stmt->bind_param('ss',$email,$password);
            $stmt->execute();
            $stmt -> bind_result($email,$password,$regno);
            $rs=$stmt->fetch();
            $stmt->close();
            $_SESSION['regno']=$regno;
            $_SESSION['login']=$email;
            $uip=$_SERVER['REMOTE_ADDR'];
            $ldate=date('d/m/Y h:i:s', time());
            if($rs)
            {
             $uregno=$_SESSION['regno'];
             $uemail=$_SESSION['login'];
$ip=$_SERVER['REMOTE_ADDR'];
$geopluginURL='http://www.geoplugin.net/php.gp?ip='.$ip;
$addrDetailsArr = unserialize(file_get_contents($geopluginURL));

$log="insert into userLog(userId,userEmail,userIp) values('$uid','$uemail','$ip')";
$mysqli->query($log);
if($log)
{
header("location:../my-profile.php");
            }
}
            else
            {
               echo "<script>alert('Invalid Username/Email or password');</script>";
               header("location:signup.php");
            }
         }
            ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>admin hostel</title>
    <link rel="stylesheet" type="text/css" href="styyle.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
    

</head>
<body style=" background-color: #CDF0FF;">
       <img style="margin-top:30px" src="images.png"class="center" />
<h1>Student List</h1>
<input id="myInput" type="text" placeholder="Search For Student ID....,Email...,Phone number...">

<table style="width:100%">
  <tr>
    <th>Student id</th>
    <th>Deparment</th>
    <th>Level</th>
    <th>Term</th>
     <th>Contact Number</th>
     <th>Email</th>
     
      <th>Password</th>
       <th>More Information</th>
     <th>Delete</th>
  </tr>
  <?php

 include 'conn.php'; 
 $q = "select * from accounts ";

 $query = mysqli_query($con,$q);

 while($res = mysqli_fetch_array($query)){
 ?>
 <tbody id="myTable">
  <tr>
    <td><?php echo $res['regno'];  ?></td>
    <td><?php echo $res['dept'];  ?></td>
    <td><?php echo $res['level'];  ?></td>
    <td><?php echo $res['term'];  ?></td>
    <td><?php echo $res['contact'];  ?></td>
    <td><?php echo $res['email'];  ?></td>
     <td><?php echo $res['password'];  ?></td>
    
    <td><button class="b" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">More Information</button>


<div id="id01" class="modal">
  
  <form class="modal-content animate"   method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      
    </div>

    <div class="container">
      <label for="uname"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required>
        
      <button type="submit" name="login">Login</button>
      
    </div>

    <div class="container" style="background-color:#f1f1f1">
    
    </div>
  </form>
</div></td>

    <td><button class="b" style="background-color: red;"> <a style="text-decoration: none; color: white;" href="sdelete.php?id=<?php echo $res['id']; ?>">Delete</button>  </td>





  </tr>
</tbody>
  <?php 
 }
  ?>
  <a class="n" href="dash.php">Back</a>
</body>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
</html>
