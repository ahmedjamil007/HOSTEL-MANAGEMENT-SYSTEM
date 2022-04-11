<?php
    session_start(); //we need session for the log in thingy XD 
    include("changepass.php");
    
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
<link rel="stylesheet" type="text/css" href="signup.css">
    <title>Request Admin</title>
<style type="text/css">{
  font-family: "Lato", sans-serif;
  background-color: #CDF0FF; 
}

/* Fixed sidenav, full height */
.sidenav {
  height: 100%;
  width: 250px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #374850;
  overflow-x: hidden;
  padding-top: 20px;
}

/* Style the sidenav links and the dropdown button */
.sidenav a, .dropdown-btn {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 20px;
  color: #818181;
  display: block;
  border: none;
  background: none;
  width: 100%;
  text-align: left;
  cursor: pointer;
  outline: none;
  background-color: #1A2226;
}

/* On mouse-over */
.sidenav a:hover, .dropdown-btn:hover {
  color: #f1f1f1;
}

/* Main content */
.main {
  margin-left: 250px; /* Same as the width of the sidenav */
  font-size: 20px; /* Increased text to enable scrolling */
  padding: 0px 10px;

}

/* Add an active class to the active dropdown button */
.active {
  background-color: green;
  color: white;
}

/* Dropdown container (hidden by default). Optional: add a lighter background color and some left padding to change the design of the dropdown content */
.dropdown-container {
  display: none;
  background-color: #262626;
  padding-left: 8px;
}

/* Optional: Style the caret down icon */
.fa-caret-down {
  float: right;
  padding-right: 8px;
}

/* Some media queries for responsiveness */
@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
i{
padding:10px;
}
a{
  background-color: red;
  padding: 10px;
  color: white;
  text-decoration: none;
  border-radius: 10px;

}
th{
  background-color: black;
  color: white;
  padding: 10px;
}
td{
  padding: 15px;
}
#clock{
  background-color: blueviolet;
  color: white;
  border-radius: 25px;

}
.w{
 background-color:lightgreen;
  padding: 10px;
  color: white;
  text-decoration: none;
  border-radius: 10px;
}
h1 {
  text-decoration: underline;
  text-decoration-thickness: 22%; 
  font-size: 40px;

}
</style>
 
   
  </head>

  <body style="  background-color: #CDF0FF;" >

  
</div>

    
<div id="clock">
  <h2 id="date-time" style="font-size: 30px;padding: 10px;margin-left: 590px;"></h2>
</div>
      <a href="../admin/dash.php">back</a>
      <h1 style="text-align: center;"> Facuilty room Request</h1>
        <div class="container">
            <?php
            
                $query = "select * from `f_room_request`;";
                if(count(fetchAll($query))>0){
                    foreach(fetchAll($query) as $row){
                        ?>




<table style="margin-top: 50px; ">
 <tr>
    <th>ID</th>
    <th>Name</th>
<th>Building Name</th>
    <th>Floor no</th>
    <th>Room no</th>
    <th>Bed no</th>
    <th>Bed rent</th>

     <th>Message</th>
     <th>Date</th>
     <th>Accept</th>
        <th>Reject</th>
  </tr>
  <tr>
    <td ><?php echo $row['regno'] ?></td>
    <td ><?php echo $row['firstname'] ?></td>
    <td ><?php echo $row['Building_Name'] ?></td>
   <td ><?php echo $row['floor_no'] ?></td>
    <td ><?php echo $row['room_no'] ?></td>
    <td ><?php echo $row['bed_no'] ?></td>
    <td ><?php echo $row['bed_rent'] ?></td>
    <td ><?php echo $row['bed_rent'] ?></td>
    <td ><i><?php echo $row['message'] ?></i></td>
    <td >     <a  class="w"href="room_accpt.php?id=<?php echo $row['id'] ?>" class="btn btn-primary my-2">Accept</a></td>
      <td > <a href="room_reject.php?id=<?php echo $row['id'] ?>" class="btn btn-secondary my-2">Reject</a></td>
  </tr>
  
</table>


                
                    
            <?php
                    }
                }else{
                    echo  " No Pending Requests.";
                }
            ?>
          
        </div>
          
      

    



    
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
