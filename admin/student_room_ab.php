






<!DOCTYPE html>

<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Baiust Hostel</title>
      <link rel="stylesheet" type="text/css" href="room_details.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
      
      
   </head>
   <body>




     





      
  
              
<br>
<h1 style="text-align: center;">Student Room Details</h1>

<br>
<a href="dash.php" >Back</a>
<br>

<br>




<table style="width:100%">
   <?php
      include 'conn.php';

      $sql = "SELECT room_add.Building_Name ,room_add.floor_no ,room_add.room_no ,room_add.bed_no ,room_add.bed_location ,room_add.bed_rent , room.msg
FROM room_add
LEFT JOIN room ON room_add.bed_no = room.bed_no";
      $result = mysqli_query($con, $sql) or die("Query Unsuccessful.");

      if(mysqli_num_rows($result) > 0)  {
    ?>
    <tbody id="myTable">
  <tr>
    <th>Building Name</th>
    <th>Floor No</th>
    <th>Room No</th>
    <th>Bed No</th>
    <th>Bed Location</th>
    <th>Bed Rent</th>
    <th>Availability</th>
  </tr>
  
 <?php
            while($row = mysqli_fetch_assoc($result)){
          ?>
          
  <tr>

    <td><?php echo $row['Building_Name']; ?></td>
    <td><?php echo $row['floor_no']; ?></td>
    <td><?php echo $row['room_no']; ?></td>
    <td><?php echo $row['bed_no']; ?></td>
    <td><?php echo $row['bed_location']; ?></td>
    <td><?php echo $row['bed_rent']; ?>
      <td><?php echo $row['msg']; ?>



    </td>
 
    
  </tr>
</tbody>
  <?php } ?>
</table>
<?php }else{
    echo "<h2>No Record Found</h2>";
  }
  mysqli_close($con);
  ?>


   </body>
</html>