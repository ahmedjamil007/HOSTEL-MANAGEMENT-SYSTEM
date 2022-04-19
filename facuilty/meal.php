<?php 

session_start();
include('includes/config.php');

include('includes/checklogin.php');
include 'includes/meal_functions.php';

    $db_con = new Database();
    $con = $db_con->connect();
    
?>

<!DOCTYPE html>

<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Baiust Hostel</title>
      <link rel="stylesheet" href="style.css">
       <link rel="stylesheet" href="meal.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
      <style type="text/css">#clock{
  background-color: #367FA9;
  color: whitesmoke;
  text-align: center;
  font-size: 25px;
  border-radius: 25px;
font-size: 25px;
margin-right: 200px;
margin-left: 250px;
}</style>
   </head>





   <body>

    <!--sider start-->
      <div class="wrapper">
         <input  type="checkbox" id="btn" hidden>
         <label for="btn" class="menu-btn">
         <i class="fas fa-bars"></i>
         <i class="fas fa-times"></i>
         </label>
          <?php include('includes/sidebar.php');?>
      </div><!--sider end-->










<div class="content">
          
          <img  style="margin-top: 180px;"src="images.png"class="center" />

<div class="main">
  <div id="clock">
  <h1 id="date-time" style="font-size: 30px;padding: 10px;"></h1>
</div>


          <h1 >Meal Order</h1>
<table class="meal">
     <tr>
    <th>Meal</th>
    <th>Start Time</th>
    <th>End Time</th>
   
  </tr>
     <?php

 include 'conn.php'; 
 $q = "select * from meal_time ";

 $query = mysqli_query($con,$q);

 while($res = mysqli_fetch_array($query)){
 ?>
 
    <td><?php echo $res['meal_nme'];  ?> </td>
    <td><?php echo $res['start_time'];  ?> </td>
    <td><?php echo $res['end_time'];  ?> </td>

  </tr>
  <?php 
 }
  ?>
</table>
 


<?php if (isset($_SESSION['success_message']) && !empty($_SESSION['success_message'])) { ?>
                        <div  style="margin-top: 10px;margin-left: 400px;margin-right: 400px;background-color: seagreen;font-size: 20px;color:white;padding: 10px;border-radius: 25px;box-shadow: 5px 10px limegreen;"><b><?php echo $_SESSION['success_message']; ?></b></div>
                        <?php
                        unset($_SESSION['success_message']);
                    }
                    ?>

    <table class="meal">
        <tr>          <th>#</th>
                     <th>Meal</th>
                     <th>Food menu</th>
                     <th>Cost</th>
                     <th>Guest</th>
                     <th>Place</th>
                     <th>Confirm</th>
                     <th>Submit</th>
        </tr>


        <!--breakfast-------------------------------------------->

                <?php

                    //getting meals; 
                    date_default_timezone_set('Asia/Dhaka');                       
                    $day = date('l');
                   

                   echo "<h1 >" . $day . "</h1>";
                    
                        $query_to_read_meal_info = "SELECT * FROM meal_menu WHERE dayy = '$day';";
                        
                        $read_meal_info = new Database();
                        $meal_info = $read_meal_info->read($query_to_read_meal_info); 
                
                        while($row = mysqli_fetch_assoc($meal_info)){
                            $data[] = $row;
                        }
                
                        //print_r($meal_info);

                        //echo $day;

                        //getting meals time limit;
                        $query_to_read_meal_time = "SELECT * FROM meal_time;";
                        
                        $read_meal_time = new Database();
                        $meal_time = $read_meal_time->read($query_to_read_meal_time); 
                
                        while($row2 = mysqli_fetch_assoc($meal_time)){
                            $data2[] = $row2;
                        }

                        //echo $data2[1]['start_time'];

                        $date = date("Y/m/d");

                        /*//check bill for breakfast;
                        $query_to_check_meal_bill = "SELECT * FROM meal_bill WHERE sub_date = '$date' AND hall_id = '1' AND meal_type = 'Breakfast';";

                        $read_meal_bill = new Database();
                        $meal_bill = $read_meal_bill->read($query_to_check_meal_bill); 

                        print_r($meal_bill);*/
                
                ?>

        <tr>
          <form action="includes/meal_functions.php" method="post">
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
            <td width="10%"><input type="text" name="regno" value="<?php echo $row->regno;?>" class="guest_input"readonly ><?php } ?>
                     <td width="10%">Breakfast</td>
                     <td width="30%"><?php echo $data[0]['breakfast_menu']; ?></td>
                     <td width="10%"><?php echo $data[0]['breakfast_price']; ?></td>


                     <td width="10%"><input type="text" name="guest_no" value="0" class="guest_input" required>
                     <input type="hidden" name="price" value="<?php echo $data[0]['breakfast_price']; ?>">
                     <input type="hidden" name="hall_id" value="1"><!--insert hall_id here-->
                     <input type="hidden" name="meal_type" value="Breakfast">
                     <input type="hidden" name="start_time" value="<?php echo $data2[0]['start_time']; ?>">
                     <input type="hidden" name="end_time" value="<?php echo $data2[0]['end_time']; ?>">
                     <input type="hidden" name="date" value="<?php echo $date; ?>">
                    </td>
                     <td width="15%">

                        <input type="radio" id="hall" name="place" value="Hall" required>

                             <label for="hall">Hall</label> <br>

                         <input type="radio" id="canteen" name="place" value="Canteen" required>

                             <label for="canteen">Canteen</label>

                         </td>


                      <td width="15%">
                        <input type="radio" id="order" name="type_submit" value="order" required>

                             <label for="order">Order</label> <br>

                          <input type="radio" id="cancel" name="type_submit" value="cancel" required>

                              <label for="cancel">Cancel</label>
                      </td>
                      <td width="10%">
                         <button class="button"  type="submit" name="meal_sub">Submit</button>
                      </td>

                    </form>
        </tr>



              <!--lunch start-------------------------------------------->

        <tr>
          <form action="includes/meal_functions.php" method="post">
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
     <td width="10%"><input type="text" name="regno" value="<?php echo $row->regno;?>" class="guest_input"readonly ><?php } ?>
                      <td width="10%">Lunch</td>
                      <td width="30%"><?php echo $data[0]['lunch_menu']; ?></td>
                      <td width="10%"><?php echo $data[0]['lunch_price']; ?></td>
                      

                     <td width="10%"><input type="text" name="guest_no" value="0" class="guest_input" required>
                     <input type="hidden" name="price" value="<?php echo $data[0]['lunch_price']; ?>">
                     <input type="hidden" name="hall_id" value="1"><!--insert hall_id here-->
                     <input type="hidden" name="meal_type" value="Lunch">
                     <input type="hidden" name="start_time" value="<?php echo $data2[1]['start_time']; ?>">
                     <input type="hidden" name="end_time" value="<?php echo $data2[1]['end_time']; ?>">
                     <input type="hidden" name="date" value="<?php echo $date; ?>">
                    </td>
                     <td width="15%">

                        <input type="radio" id="hall" name="place" value="Hall" required>

                             <label for="hall">Hall</label> <br>

                         <input type="radio" id="canteen" name="place" value="Canteen" required>

                             <label for="canteen">Canteen</label>

                         </td>


                      <td width="15%">
                        <input type="radio" id="order" name="type_submit" value="order" required>

                             <label for="order">Order</label> <br>

                          <input type="radio" id="cancel" name="type_submit" value="cancel" required>

                              <label for="cancel">Cancel</label>
                      </td>
                      <td width="10%">
                         <button class="button"  type="submit" name="meal_sub">Submit</button>
                      </td>

                        </form>
        </tr>
                   

             <!--dinner start------------------------------>
        <tr>
<form action="includes/meal_functions.php" method="post">
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
     <td width="10%"><input name="regno" value="<?php echo $row->regno;?>" class="guest_input"readonly ><?php } ?>
                     <td width="10%">Dinner</td>
                     <td width="30%"><?php echo $data[0]['dinner_menu']; ?></td>
                     <td width="10%"><?php echo $data[0]['dinner_price']; ?></td>
                     

                     <td width="10%"><input type="text" name="guest_no" value="0" class="guest_input" required>
                     <input type="hidden" name="price" value="<?php echo $data[0]['dinner_price']; ?>">
                     <input type="hidden" name="hall_id" value="1"><!--insert hall_id here-->
                     <input type="hidden" name="meal_type" value="Dinner">
                     <input type="hidden" name="start_time" value="<?php echo $data2[2]['start_time']; ?>">
                     <input type="hidden" name="end_time" value="<?php echo $data2[2]['end_time']; ?>">
                     <input type="hidden" name="date" value="<?php echo $date; ?>">
                    </td>
                     <td width="15%">

                        <input type="radio" id="hall" name="place" value="Hall" required>

                             <label for="hall">Hall</label> <br>

                         <input type="radio" id="canteen" name="place" value="Canteen" required>

                             <label for="canteen">Canteen</label>

                         </td>


                      <td width="15%">
                        <input type="radio" id="order" name="type_submit" value="order" required>

                             <label for="order">Order</label> <br>

                          <input type="radio" id="cancel" name="type_submit" value="cancel" required>

                              <label for="cancel">Cancel</label>
                      </td>
                      <td width="10%">
                         <button class="button"  type="submit" name="meal_sub">Submit</button>
                      </td>

                      </form>
        </tr>

</table>

</form>

<div>

                 
        <p style="margin-top: 10px; margin-left: 150px;"> "Baiust Hostel Management"</p>      
      </div>
   </body>
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
</html>
