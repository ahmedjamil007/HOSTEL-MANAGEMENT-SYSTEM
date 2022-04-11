<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>meal_time</title>
	<link rel="stylesheet" type="text/css" href="room_details.css">
</head>
<body>
	<h1 style="margin-top: 40px;text-align: center;">Meal time </h1>
	<br>
	 <a href="dash.php" >Back</a>
<table>
  	 <tr>
    <th>Meal</th>
    <th>Start Time</th>
    <th>End Time</th>
    <th>Update</th>
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
    <td><button class="btn-primary btn"> <a href="mealtimeupdate.php?id=<?php echo $res['id']; ?>" class="text-white"> Update </a> </button></td>
  </tr>
  <?php 
 }
  ?>
</table>
</body>
</html>