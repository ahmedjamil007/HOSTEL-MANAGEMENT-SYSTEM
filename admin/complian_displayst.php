<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Student Complain</title>



	<style type="text/css">
		table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
  margin: 10px;
}

td, th {
  border: 1px solid #dddddd;
  text-align: center;
  padding: 8px;

}

tr:nth-child(even) {
  background-color: #dddddd;
}
th{
	background-color: royalblue;
	color: floralwhite;
}
h2{
  text-align: center;
  margin-top: 10px;
  background-color: #2CB88A;
  margin-left: 400px;
  margin-right: 400px;
  padding: 10px;
  color: white;
  border-radius: 25px;
}
a{
text-decoration: none;
background-color: indianred;
color: white;
padding: 5px;
font-size: 20px;
 

}
img {
  
  height: 150px;
  width: 150px;
  margin-top: 30px;
  border-radius: 85px;
  border:2px solid #fff;
  -moz-box-shadow: 0px 6px 5px #ccc;
  -webkit-box-shadow: 0px 6px 5px #ccc;
  box-shadow: 0px 6px 5px #ccc;
  -moz-border-radius:190px;
  -webkit-border-radius:190px;
  border-radius:190px;
   margin-left: 680px;
  
}
	</style>


</head>
<body style=" background-color: #CDF0FF;">
       <img style="margin-top:30px" src="images.png"class="center" />
<h2>Student Complain</h2>
    
<a href="dash.php" >Back</a>
<table>
  <tr>
    <th>Student ID</th>
    <th>Room no</th>
    <th>Complain</th>
    <th>Complain Description</th>
     <th>Delete</th>
  </tr>
  <?php

 include 'conn.php'; 
 $q = "select * from complain ";

 $query = mysqli_query($con,$q);

 while($res = mysqli_fetch_array($query)){
 ?>
  <tr>
    <td><?php echo $res['regno'];  ?></td>
    <td><?php echo $res['roomno'];  ?></td>
    <td><?php echo $res['comname'];  ?></td>
    <td><?php echo $res['comdescript'];  ?></td>
    <td><button class="but"> <a href="delete.php?id=<?php echo $res['id']; ?>" class="text-white"> Delete </a>  </button></td>
  </tr>
   <?php 
 }
  ?>
</table>
</body>
</html>