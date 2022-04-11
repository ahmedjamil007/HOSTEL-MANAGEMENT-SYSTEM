<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="room_details.css">
</head>
<body>
	<h1 style="text-align: center;">Student room</h1>
	<br>
	<a href="dash.php" >Back</a>

<table>
	 <?php
      include 'conn.php';

      $sql = "SELECT * FROM room";
      $result = mysqli_query($con, $sql) or die("Query Unsuccessful.");

      if(mysqli_num_rows($result) > 0)  {
    ?>
  <tr>
    <th>Student id</th>
    <th>Name</th>
    <th>Level</th>
      <th>Term</th>
        <th>Building Name</th>
          <th>Floor no</th>
            <th>room no</th>
              <th>bed no</th>
                <th>Bed Location</th>
                  <th>Bed rent</th>
                    <th>Delete</th>
  </tr>
 
     <?php
            while($row = mysqli_fetch_assoc($result)){
          ?>
  <tr>
    <td><?php echo $row['regno']; ?></td>
    <td><?php echo $row['firstname']; ?></td>
    <td><?php echo $row['level']; ?></td>
     <td><?php echo $row['term']; ?></td>
      <td><?php echo $row['Building_Name']; ?></td>
       <td><?php echo $row['floor_no']; ?></td> 
        <td><?php echo $row['room_no']; ?></td>
         <td><?php echo $row['bed_no']; ?></td>
          <td><?php echo $row['bed_location']; ?></td>
           <td><?php echo $row['bed_rent']; ?></td>
            <td><center><button class="btn-danger btn" style="background-color:inherit;"> <a style="text-decoration: none;color: white;"href="sr_delete.php?id=<?php echo $row['id']; ?>" class="text-white"> Delete </a>  </button></td>
    
  </tr>
   <?php } ?>
</table>
<?php }else{
    echo "<h2>No Record Found</h2>";
  }
  mysqli_close($con);
  ?> 
</body>
</html>