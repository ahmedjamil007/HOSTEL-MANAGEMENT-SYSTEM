
<?php
session_start();
include('includes/config.php');
include 'conn.php';

?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Dashboard</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" type="text/css" href="dash.css">
</head>











<body>

<div class="sidenav">
  <a href="#" style="background-color: #3C8DBC;padding: 10px;color: whitesmoke;text-align: center;">Baiust Hostel admin</a> <br>  
  <a href="#"><i style="color:white ;word-spacing: 10px;"; class="fa fa-dashboard"></i>Dashboard</a>
  <a href="studentlist.php"><i style="color:white ;word-spacing: 10px;"; class="fa fa-dashboard"></i>Student</a>
  
  
   <button class="dropdown-btn"><i style="color:white ;word-spacing: 10px;"; class="fa fa-dashboard"></i>Room
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="student_room_ab.php">Student room availablity</a>
    <a href="student_room_up.php">Student room updation</a>
    <a href=" facultyroomability.php">Faculty room availablity</a>
    <a href="  facultyroomupdation.php">Faculty room updation</a>
   
    
    
  </div>
  <button class="dropdown-btn"><i style="color:white ;word-spacing: 10px;"; class="fa fa-dashboard"></i>Meal 
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="meal_time.php">Meal Time</a>
    <a href="meal_menu.php">Meal Menu</a>
    <a href="mill_count.php">Daily meal count</a>
    <a href="mealshow.php">Daily meal</a>
  </div>
  
  <button class="dropdown-btn"><i style="color:white ;word-spacing: 10px;"; class="fa fa-dashboard"></i>Add Hostel 
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="add_build.php">Add Building</a>
   
    <a href="room_details.php"> Stu.Add Room</a>
    <a href="f_room_add.php"> Fac.Add Room</a>
  </div>
   
  <button class="dropdown-btn"><i style="color:white ;word-spacing: 10px;"; class="fa fa-dashboard"></i>Complain info 
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="complian_displayst.php">Student complain</a>
    <a href="f_facultycomplain.php">Faculty complain</a>
   
  </div>
   
  <button class="dropdown-btn"><i style="color:white ;word-spacing: 10px;"; class="fa fa-dashboard"></i>Bill info 
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="billingstudent.php">Student Bill</a>
    <a href="billingfaculty.php">Faculty Bill</a>
    
  </div>


  <div class="logout"> <a style="color:white" href="logout.php">Logout</a></div>
</div>

<div class="main">
  <div id="clock">
  <h1 id="date-time" style="font-size: 30px;padding: 10px;"></h1>
</div>
<div>
<div style="display:inline-block;">
<div class="outer">
  <div class="inner">
    <?php
$result1 ="SELECT count(*) FROM requests ";
$stmt1 = $mysqli->prepare($result1);
$stmt1->execute();
$stmt1->bind_result($count1);
$stmt1->fetch();
$stmt1->close();
?>
    <p><a href="" class="dash"><?php echo $count1;?></a> </p>
    <hr>
    <p><a href="../home.php" class="dash"> Student Req</a> </p>
  </div>
</div> 
<div class="outer">
  <div class="inner"style="background-color:darkred;">
    <?php
$result1 ="SELECT count(*) FROM frequests ";
$stmt1 = $mysqli->prepare($result1);
$stmt1->execute();
$stmt1->bind_result($count1);
$stmt1->fetch();
$stmt1->close();
?>
    <p><a href="" class="dash"><?php echo $count1;?></a> </p>
    <hr>
    <p><a href="../facuilty/home.php" class="dash"> Faculty Req.</a> </p>
  </div>
</div>
</div>

<br>
<hr>
<br>
<div>

<div class="outer">
  <div class="inner"style="background-color:#8741A4">
    <?php
$result1 ="SELECT count(*) FROM accounts ";
$stmt1 = $mysqli->prepare($result1);
$stmt1->execute();
$stmt1->bind_result($count1);
$stmt1->fetch();
$stmt1->close();
?>
<p><a href="" class="dash"><?php echo $count1;?></a> </p>
<hr>
    <p><a href="studentlist.php" class="dash">Student</a> </p>
  </div>

</div> 

  <div class="outer">
  <div class="inner" style="background-color: tomato;">
    <?php
$result1 ="SELECT count(*) FROM f_accounts ";
$stmt1 = $mysqli->prepare($result1);
$stmt1->execute();
$stmt1->bind_result($count1);
$stmt1->fetch();
$stmt1->close();
?>
   <p><a href="" class="dash"><?php echo $count1;?></a> </p>
   <hr>
    <p><a href="facultylist.php" class="dash">Faculty</a> </p>
    </div>
</div>
</div>

<br>
<hr>
<br>
<div class="outer">
  <div class="inner" style="background-color: darkgray;">
    <?php
$result1 ="SELECT count(*) FROM room_request ";
$stmt1 = $mysqli->prepare($result1);
$stmt1->execute();
$stmt1->bind_result($count1);
$stmt1->fetch();
$stmt1->close();
?>
   <p><a href="" class="dash"><?php echo $count1;?></a> </p>
   <hr>
    <p><a href="../room_home.php" class="dash"> Student Room Request</a> </p>
  </div>
</div>
<div class="outer">
  <div class="inner" style="background-color:#374850;">
    <?php
$result1 ="SELECT count(*) FROM f_room_request ";
$stmt1 = $mysqli->prepare($result1);
$stmt1->execute();
$stmt1->bind_result($count1);
$stmt1->fetch();
$stmt1->close();
?>
    <p><a href="" class="dash"><?php echo $count1;?></a> </p>
    <hr>
    <p><a href="../facuilty/room_home.php" class="dash"> Faculty Room Request</a> </p>
  </div>
</div>
</div>


<script>
/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
  this.classList.toggle("active");
  var dropdownContent = this.nextElementSibling;
  if (dropdownContent.style.display === "block") {
  dropdownContent.style.display = "none";
  } else {
  dropdownContent.style.display = "block";
  }
  });
}
</script>
<script type="text/javascript">window.addEventListener("load", () => {
  clock();
  function clock() {
    const today = new Date();

    // get time components
    const hours = today.getHours();
    const minutes = today.getMinutes();
    const seconds = today.getSeconds();

    //add '0' to hour, minute & second when they are less 10
    const hour = hours < 10 ? "0" + hours : hours;
    const minute = minutes < 10 ? "0" + minutes : minutes;
    const second = seconds < 10 ? "0" + seconds : seconds;

    //make clock a 12-hour time clock
    const hourTime = hour > 12 ? hour - 12 : hour;

    // if (hour === 0) {
    //   hour = 12;
    // }
    //assigning 'am' or 'pm' to indicate time of the day
    const ampm = hour < 12 ? "AM" : "PM";

    // get date components
    const month = today.getMonth();
    const year = today.getFullYear();
    const day = today.getDate();

    //declaring a list of all months in  a year
    const monthList = [
      "January",
      "February",
      "March",
      "April",
      "May",
      "June",
      "July",
      "August",
      "September",
      "October",
      "November",
      "December"
    ];

    //get current date and time
    const date = monthList[month] + " " + day + ", " + year;
    const time = hourTime + ":" + minute + ":" + second + ampm;

    //combine current date and time
    const dateTime = date + " - " + time;

    //print current date and time to the DOM
    document.getElementById("date-time").innerHTML = dateTime;
    setTimeout(clock, 1000);
  }
});
</script>
</body>
</html> 
