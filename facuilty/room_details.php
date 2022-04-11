






<!DOCTYPE html>

<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Baiust Hostel</title>
      <link rel="stylesheet" href="style.css">
      
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
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
  width: 82%;
  margin-left: 270px;
}

td, th {
  border: 1px solid #dddddd;
  text-align: center;
  padding: 8px;
}
th{
   background-color: blueviolet;
   color: white;
}
tr:nth-child(even) {
  background-color: #dddddd;
}
.p{
  background="istockphoto-1179592816-612x612.jpg";

}

#myInput {
  background-image: url('/css/searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 70%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
  margin-left: 100px;
}
</style>
   </head>
   <body>




      <div class="wrapper">
         <input  type="checkbox" id="btn" hidden>
         <label for="btn" class="menu-btn">
         <i class="fas fa-bars"></i>
         <i class="fas fa-times"></i>
         </label>
          
         <?php include('includes/sidebar.php');?>
      
      </div>





      
  <div class="content">
             <img  style="margin-top: 10px;"src="images.png"class="center" />    
              <h1>All Room Details</h1>
              




<br>
<input id="myInput" type="text" placeholder="Search For room number....,Bed number...,Bed rent...">
<br><br>
<table>
   <?php
      include 'conn.php';

      $sql = "SELECT f_room_add.Building_Name ,f_room_add.floor_no ,f_room_add.room_no ,f_room_add.bed_no ,f_room_add.bed_location ,f_room_add.bed_rent , f_room.msg
FROM f_room_add
LEFT JOIN f_room ON f_room_add.bed_no = f_room.bed_no";
      $result = mysqli_query($con, $sql) or die("Query Unsuccessful.");

      if(mysqli_num_rows($result) > 0)  {
    ?>
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
          <tbody id="myTable">
  <tr>

    <td ><?php echo $row['Building_Name']; ?></td>
    <td ><?php echo $row['floor_no']; ?></td>
    <td ><?php echo $row['room_no']; ?></td>
    <td id="myTable"><?php echo $row['bed_no']; ?></td>
    <td ><?php echo $row['bed_location']; ?></td>
    <td ><?php echo $row['bed_rent']; ?></td>
      <td ><?php echo $row['msg']; ?>



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

<div>

                 
        <p> "Baiust Hostel Management"</p>      
      </div>
      <script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>
   </body>
</html>