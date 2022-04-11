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
header("location:my-profile.php");
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

<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Baiust hostel</title>
      <link rel="stylesheet" href="style.css">
      <link rel="stylesheet" href="login.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
     
   </head>


   <body>

      <!--sidever start-->

      <div class="wrapper">
         <input type="checkbox" id="btn" hidden>
         <label for="btn" class="menu-btn">
         <i class="fas fa-bars"></i>
         <i class="fas fa-times"></i>
         </label>
        
         <nav id="sidebar">
            <div class="title"  style="font-size: 20px;">
               Hostel Management
            </div>
            <ul class="list-items">
               <li><a href="signup.php"><i class="fas fa-user"></i>Student Registration</a></li>
               <li><a href="facuilty/signup.php"><i class="fas fa-user"></i>Faculty Registration</a></li>
               <li><a href="index.php"><i class="fas fa-user"></i>Student Login</a></li>
               <li><a href="facuilty/index.php"><i class="fas fa-user"></i>Faculty Login</a></li>
               <li><a href="admin/index.php"><i class="fas fa-user"></i>Admin login</a></li>
            
               
            </ul>

         </nav>
      
      </div><!--sidever end-->




      
      <div class="content">
        
 

   <form method="post"style="width: 400px;height: 400px;">
               <img class="f_image" src="images.png" />
               <h2> User Login</h2>
               <input type="text" name="email" class="text-field" placeholder="email" />
               <input type="password" name="password" class="text-field" placeholder="Password" />
               <a href=""><input type="submit" name="login" class="button" value="Login" /></a>
   </form>



   <p style="margin-bottom: 150px;margin-left: 80px;"> "Baiust Hostel Management"</p> 
                 
             
      </div>


   </body>
</html>