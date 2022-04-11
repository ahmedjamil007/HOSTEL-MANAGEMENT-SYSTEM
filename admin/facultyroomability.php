






<!DOCTYPE html>

<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Baiust Hostel</title>
      
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
      
      <style>
        
table {
  background-color: whitesmoke;
  border-collapse: collapse;
  width: 100%;
 
}
a{
text-decoration: none;
background-color: indianred;
color: white;
padding: 5px;
font-size: 20px;
 

}
td, th {
  border: 1px solid #dddddd;
  text-align: center;
  padding: 8px;
}
th{
   background-color: green;
   color: white;
}
tr:nth-child(even) {
  background-color: #dddddd;
}
h1{
  text-align: center;
  margin-top: 120px;
  background-color: #2CB88A;
  margin-left: 400px;
  margin-right: 400px;
  padding: 10px;
  color: white;
  border-radius: 25px;
}

</style>
   </head>
   <body>




     





      
  
              
<br>
<h1 style="text-align: center;">Faculty Room Details</h1>

<br>
<a href="dash.php" >Back</a>
<br>

<br>




<table style="width:100%">
   <?php
      include 'conn.php';

      $sql = "SELECT f_room_add.Building_Name ,f_room_add.floor_no ,f_room_add.room_no ,f_room_add.bed_no ,f_room_add.bed_location ,f_room_add.bed_rent , f_room.msg
FROM f_room_add
LEFT JOIN f_room ON f_room_add.bed_no = f_room.bed_no";
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