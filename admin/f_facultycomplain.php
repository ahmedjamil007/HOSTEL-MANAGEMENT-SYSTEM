<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Faculty Complain</title>
<link rel="stylesheet" type="text/css" href="complain.css">


	


</head>
<body style=" background-color: #CDF0FF;">
       <img style="margin-top:30px" src="images.png"class="center" />
<h2>Faculty Complain</h2>
    
<a href="dash.php" >Back</a>
<table>
  <tr>
    <th> ID</th>
    <th>Room no</th>
    <th>Complain</th>
    <th>Complain Description</th>
     <th>Delete</th>
  </tr>
  <?php

 include 'conn.php'; 
 $q = "select * from f_complain ";

 $query = mysqli_query($con,$q);

 while($res = mysqli_fetch_array($query)){
 ?>
  <tr>
    <td><?php echo $res['regno'];  ?></td>
    <td><?php echo $res['roomno'];  ?></td>
    <td><?php echo $res['comname'];  ?></td>
    <td><?php echo $res['comdescript'];  ?></td>
    <td><button class="but"> <a href="f_delete.php?id=<?php echo $res['id']; ?>" class="text-white"> Delete </a>  </button></td>
  </tr>
   <?php 
 }
  ?>
</table>
</body>
</html>