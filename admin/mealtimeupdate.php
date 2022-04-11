<?php

 include 'conn.php';

 if(isset($_POST['done'])){

 $id = $_GET['id'];

 $meal_nme = $_POST['username'];
 $start_time = $_POST['user'];
 $end_time = $_POST['name'];
 $q = " update meal_time set id=$id,meal_nme='$meal_nme', start_time='$start_time', end_time='$end_time' where id=$id  ";

 $query = mysqli_query($con,$q);

 header('location:meal_time.php');
 }

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>meal</title>
    <style> 
* {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
h4{
    color: #35AC43;
    font-weight: bold;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}

</style>
</head>
<body>
<div class="container">
  <form method="post">
    
    <div class="row">
      
    <div class="col-25">
      <label for="fname">Meal</label>
    </div>
    <div class="col-75">
     
      <select  name="username">
        <option >Select Meal Type</option>
        <option >Breakfast</option>
        <option >Lunch</option>
        <option >Dinner</option>
      </select>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="fname">Start Time</label>
    </div>
    <div class="col-75">
   <select  name="user">
        <option >Select Start Time</option>
        <option >00:15:00</option>
        <option >00:30:00</option>
        <option >00:45:00</option>
        <option >01:00:00</option>
        <option >01:15:00</option>
         <option >01:30:00</option>
         <option >02:00:00</option>
         <option >02:15:00</option>
         <option >02:30:00</option>
         <option >02:45:00</option>
        <option >03:00:00</option>
        <option >03:15:00</option>
        <option >03:30:00</option>
        <option >03:45:00</option>
         <option >04:00:00</option>
         <option >04:15:00</option>
         <option >04:30:00</option>
         <option >04:45:00</option>
          <option >05:00:00</option>
         <option >05:15:00</option>
         <option >05:30:00</option>
         <option >05:45:00</option>
          <option >06:00:00</option>
         <option >06:15:00</option>
         <option >06:30:00</option>
         <option >06:45:00</option>
          <option >07:00:00</option>
         <option >07:15:00</option>
         <option >07:30:00</option>
         <option >07:45:00</option>
          <option >08:00:00</option>
         <option >08:15:00</option>
         <option >08:30:00</option>
         <option >08:45:00</option>
          <option >09:00:00</option>
         <option >09:15:00</option>
         <option >09:30:00</option>
         <option >09:45:00</option>
          <option >10:00:00</option>
         <option >10:15:00</option>
         <option >10:30:00</option>
         <option >10:45:00</option>
           <option >11:00:00</option>
         <option >11:15:00</option>
         <option >11:30:00</option>
         <option >11:45:00</option>
          <option >12:00:00</option>
         <option >12:15:00</option>
         <option >12:30:00</option>
         <option >12:45:00</option>
          <option >13:00:00</option>
         <option >13:15:00</option>
         <option >13:30:00</option>
         <option >13:45:00</option>
          <option >14:00:00</option>
         <option >14:15:00</option>
         <option >14:30:00</option>
         <option >14:45:00</option>
          <option >15:00:00</option>
         <option >15:15:00</option>
         <option >15:30:00</option>
         <option >15:45:00</option>
          <option >16:00:00</option>
         <option >16:15:00</option>
         <option >16:30:00</option>
         <option >16:45:00</option>
          <option >17:00:00</option>
         <option >17:15:00</option>
         <option >17:30:00</option>
         <option >17:45:00</option>
          <option >18:00:00</option>
         <option >18:15:00</option>
         <option >18:30:00</option>
         <option >18:45:00</option>
          <option >19:00:00</option>
         <option >19:15:00</option>
         <option >19:30:00</option>
         <option >19:45:00</option>
          <option >20:00:00</option>
         <option >20:15:00</option>
         <option >20:30:00</option>
         <option >20:45:00</option>
          <option >21:00:00</option>
         <option >21:15:00</option>
         <option >21:30:00</option>
         <option >21:45:00</option>
          <option >22:00:00</option>
         <option >22:15:00</option>
         <option >22:30:00</option>
         <option >22:45:00</option>
          <option >23:00:00</option>
         <option >23:15:00</option>
         <option >23:30:00</option>
         <option >23:45:00</option>
          <option >24:00:00</option>
         <option >24:15:00</option>
         <option >24:30:00</option>
         <option >24:45:00</option>
       
      </select>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="lname">End Time</label>
    </div>
    <div class="col-75">
     <select  name="name">
        <option >Select End Time</option>
        <option >00:15:00</option>
        <option >00:30:00</option>
        <option >00:45:00</option>
        <option >01:00:00</option>
        <option >01:15:00</option>
         <option >01:30:00</option>
         <option >02:00:00</option>
         <option >02:15:00</option>
         <option >02:30:00</option>
         <option >02:45:00</option>
        <option >03:00:00</option>
        <option >03:15:00</option>
        <option >03:30:00</option>
        <option >03:45:00</option>
         <option >04:00:00</option>
         <option >04:15:00</option>
         <option >04:30:00</option>
         <option >04:45:00</option>
          <option >05:00:00</option>
         <option >05:15:00</option>
         <option >05:30:00</option>
         <option >05:45:00</option>
          <option >06:00:00</option>
         <option >06:15:00</option>
         <option >06:30:00</option>
         <option >06:45:00</option>
          <option >07:00:00</option>
         <option >07:15:00</option>
         <option >07:30:00</option>
         <option >07:45:00</option>
          <option >08:00:00</option>
         <option >08:15:00</option>
         <option >08:30:00</option>
         <option >08:45:00</option>
          <option >09:00:00</option>
         <option >09:15:00</option>
         <option >09:30:00</option>
         <option >09:45:00</option>
          <option >10:00:00</option>
         <option >10:15:00</option>
         <option >10:30:00</option>
         <option >10:45:00</option>
           <option >11:00:00</option>
         <option >11:15:00</option>
         <option >11:30:00</option>
         <option >11:45:00</option>
          <option >12:00:00</option>
         <option >12:15:00</option>
         <option >12:30:00</option>
         <option >12:45:00</option>
          <option >13:00:00</option>
         <option >13:15:00</option>
         <option >13:30:00</option>
         <option >13:45:00</option>
          <option >14:00:00</option>
         <option >14:15:00</option>
         <option >14:30:00</option>
         <option >14:45:00</option>
          <option >15:00:00</option>
         <option >15:15:00</option>
         <option >15:30:00</option>
         <option >15:45:00</option>
          <option >16:00:00</option>
         <option >16:15:00</option>
         <option >16:30:00</option>
         <option >16:45:00</option>
          <option >17:00:00</option>
         <option >17:15:00</option>
         <option >17:30:00</option>
         <option >17:45:00</option>
          <option >18:00:00</option>
         <option >18:15:00</option>
         <option >18:30:00</option>
         <option >18:45:00</option>
          <option >19:00:00</option>
         <option >19:15:00</option>
         <option >19:30:00</option>
         <option >19:45:00</option>
          <option >20:00:00</option>
         <option >20:15:00</option>
         <option >20:30:00</option>
         <option >20:45:00</option>
          <option >21:00:00</option>
         <option >21:15:00</option>
         <option >21:30:00</option>
         <option >21:45:00</option>
          <option >22:00:00</option>
         <option >22:15:00</option>
         <option >22:30:00</option>
         <option >22:45:00</option>
          <option >23:00:00</option>
         <option >23:15:00</option>
         <option >23:30:00</option>
         <option >23:45:00</option>
          <option >24:00:00</option>
         <option >24:15:00</option>
         <option >24:30:00</option>
         <option >24:45:00</option>
       
      </select>

    </div>
  </div>
  
  
  <br>
  <div class="row">
    <input type="submit"name="done" value="Submit">
  </div>
  </form>
  
</div>
</body>
</html>