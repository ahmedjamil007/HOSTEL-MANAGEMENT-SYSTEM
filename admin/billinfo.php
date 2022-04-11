<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>hh</title>
</head>
<body>
	 <?php
	 include 'conn.php'; 
 $q = "select * from accounts where regno=$regno  ";

 $query = mysqli_query($con,$q);

 while($res = mysqli_fetch_array($query)){
 ?>
<table style="width:100%; border:1px solid black;">
 
  <tr>
    <td><?php echo $res['regno'];  ?></td>
 <?php 
 }
  ?>
    <td>Maria Anders</td>
    <td>Germany</td>
    <td>Germany</td>
  </tr>
  
</table>
</body>
</html>