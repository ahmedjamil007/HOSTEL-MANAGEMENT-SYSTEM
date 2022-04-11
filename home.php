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
      <a href="admin/dash.php">back</a>
      <h1 style="text-align: center;"> Stduent Request</h1>
        <div class="container">
            <?php
            
                $query = "select * from `requests`;";
                if(count(fetchAll($query))>0){
                    foreach(fetchAll($query) as $row){
                        ?>




<table style="margin-top: 50px; ">
 <tr>
    <th>ID</th>
    <th>Department</th>

    <th>Level</th>
    <th>Term</th>
     <th>email</th>
     <th>Message</th>
     <th>Date</th>
     <th>Accept</th>
        <th>Reject</th>
  </tr>
  <tr>
    <td ><?php echo $row['regno'] ?></td>
    <td ><?php echo $row['dept'] ?></td>
    
    <td ><?php echo $row['level'] ?></td>
    <td ><?php echo $row['term'] ?></td>
    <td ><?php echo $row['email'] ?></td>
    <td ><?php echo $row['message'] ?></td>
    <td ><i><?php echo $row['date'] ?></i></td>
    <td >     <a  class="w"href="accept.php?id=<?php echo $row['id'] ?>" class="btn btn-primary my-2">Accept</a></td>
      <td > <a href="reject.php?id=<?php echo $row['id'] ?>" class="btn btn-secondary my-2">Reject</a></td>
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
