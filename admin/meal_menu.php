<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>meal_menu</title>
	<link rel="stylesheet" type="text/css" href="room_details.css">
</head>
<body>
	<h1 style="margin-top: 40px;text-align: center;">Meal Menu </h1>
	<br>
	 <a href="dash.php" >Back</a>
<table>
    <tr>
     <th >Day</th>
    <th>Breakfast</th>
    <th>Prize</th>
     <th>Lunch</th>
      <th>Prize</th>
       <th>Dinner</th>
       <th>Prize</th>
       <th>Update</th>
     </tr>
     <?php

 include 'conn.php'; 
 $q = "select * from meal_menu ";

 $query = mysqli_query($con,$q);

 while($res = mysqli_fetch_array($query)){
 ?>
 
    <td><?php echo $res['dayy'];  ?> </td>
    <td><?php echo $res['breakfast_menu'];  ?> </td>
    <td><?php echo $res['breakfast_price'];  ?> </td>
    <td><?php echo $res['lunch_menu'];  ?> </td>
    <td><?php echo $res['lunch_price'];  ?> </td>
    <td><?php echo $res['dinner_menu'];  ?> </td>
    <td><?php echo $res['dinner_price'];  ?> </td>
    <td><button class="btn-primary btn"> <a href="meal_manuupdate.php?id=<?php echo $res['id']; ?>" class="text-white"> Update </a> </button></td>
  </tr>
  <?php 
 }
  ?>
</table>

  
  
</body>
</html>