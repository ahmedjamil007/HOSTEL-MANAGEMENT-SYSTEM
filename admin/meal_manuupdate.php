




<?php

 include 'conn.php';

 if(isset($_POST['done'])){

 $id = $_GET['id'];

 $dayy = $_POST['username'];
 $breakfast_menu = $_POST['user'];
 $breakfast_price = $_POST['breakfastp'];
 $lunch_menu = $_POST['lunch'];
 $lunch_price = $_POST['lunchp'];
 $dinner_menu = $_POST['dinner'];
 $dinner_price = $_POST['dinnerp'];
 $q = " update meal_menu set id=$id,dayy='$dayy', breakfast_menu='$breakfast_menu', breakfast_price='$breakfast_price' ,lunch_menu='$lunch_menu', lunch_price='$lunch_price',dinner_menu='$dinner_menu',dinner_price='$dinner_price'where id=$id  ";

 $query = mysqli_query($con,$q);

 header('location:meal_manuupdate.php');
 }?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
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
a{
text-decoration: none;
background-color: indianred;
color: white;
padding: 5px;
font-size: 20px;
 

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
<a href="meal_menu.php" >Back</a>
<div class="container">
              
  <form method="post">
    <div>
   
  	<div class="row">
    <div class="col-25">


 
      <label for="fname">Day</label>
    </div>
    <div class="col-75">
      
      <input type="text"  name="username" placeholder="">
    </div>
  
  </div>
  <div class="row">
    <div class="col-25">
      <label for="fname">Breakfast</label>
    </div>
    <div class="col-75">
      <input type="text"  name="user" id="user" placeholder="">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="lname">Price</label>
    </div>
    <div class="col-75">
      <input type="text"  name="breakfastp" id="breakfastp" placeholder="">
    </div>
  </div>
    <div class="row">
    <div class="col-25">
      <label for="fname">Lunch</label>
    </div>
    <div class="col-75">
      <input type="text"  name="lunch" id="lunch" placeholder="">
    </div>
  </div>
    <div class="row">
    <div class="col-25">
      <label for="fname">Price</label>
    </div>
    <div class="col-75">
      <input type="text"  name="lunchp"id="lunchp" placeholder="">
    </div>
  </div>
    <div class="row">
    <div class="col-25">
      <label for="fname">Dinner</label>
    </div>
    <div class="col-75">
      <input type="text"  name="dinner"  id="dinner"placeholder="">
    </div>
  </div>
    <div class="row">
    <div class="col-25">
      <label for="fname">Price</label>
    </div>
    <div class="col-75">
      <input type="text"  name="dinnerp" id="dinnerp" placeholder="">
    </div>
  </div>
  
  <br>
  <div class="row">
    <input type="submit"name="done" value="Submit">
  </div>
 
</div>
  </form>
  
</div>
</body>
</html>