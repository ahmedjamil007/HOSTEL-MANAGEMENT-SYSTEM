<?php

include 'conn.php';

if(isset($_POST['done'])){

 $Building_Name= $_POST['name'];
 $floor_no= $_POST['floor_no'];
 $room_no= $_POST['room_no'];
 $bed_no= $_POST['bed_no'];
 $bed_location= $_POST['bed_location'];
 $bed_rent= $_POST['bed_rent'];
 $q = " INSERT INTO `f_room_add`( `Building_Name`,`floor_no`,`room_no`,`bed_no`,`bed_location`,`bed_rent`) VALUES (  '$Building_Name','$floor_no','$room_no','$bed_no','$bed_location','$bed_rent' )";

 $query = mysqli_query($con,$q);
}
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
  <link rel="stylesheet" type="text/css" href="room.css">
</head>
<body>
  <h1 style="text-align:center;"> Add Room Details</h1>
  <a href="dash.php" >Back</a>
<div class="container">
  <form method="post">
  
  






  <div class="row">
  	
    <div class="col-25">
      <label for="country">Pick a Building</label>
    </div>
    
    <div class="col-75">
    	<select name="name" >
    		<option value="">Select Building</option>
    	<?php
	        			//connection
	        			$conn = new mysqli('localhost', 'root', '', 'hostel');

	        			$sql = "SELECT * FROM building_add";
	        			$query = $conn->query($sql);

	        		
	        		?>
      
      	
   <?php
	
	while($row = $query->fetch_assoc()){
	        				echo "
	        					<option>".$row['Building_Name']."</option>
	        				";
	        			}
	        			?>
      </select>

<?php  ?>

    </div>
  </div>
  <div class="row">



    <div class="col-25">
      <label for="fname"> Floor no</label>
    </div>
    <div class="col-75">
      <input type="text"  name="floor_no" placeholder="">
    </div>
  </div>
  <div class="row">



    <div class="col-25">
      <label for="fname">room no</label>
    </div>
    <div class="col-75">
      <input type="text"  name="room_no" placeholder="">
    </div>
  </div>
  <div class="row">
  <div class="col-25">
      <label for="fname">Bed no</label>
    </div>
    <div class="col-75">
      <input type="text"  name="bed_no" placeholder="">
    </div>
  </div>
  <div class="row">
   <div class="col-25">
      <label for="fname">Bed Location</label>
    </div>
    <div class="col-75">
      <input type="text"  name="bed_location" placeholder="">
    </div>
  </div>
  <div class="row">
   <div class="col-25">
      <label for="fname">Bed Rent</label>
    </div>
    <div class="col-75">
      <input type="text"  name="bed_rent" placeholder="">
    </div>
  </div>
  <br>
   
   <div class="row">
    <input type="submit"name="done" value="Submit">
  </div>
  
  </form>
</div>



  <table id="build_table">
          <?php
      include 'conn.php';

      $sql = "SELECT * FROM f_room_add";
      $result = mysqli_query($con, $sql) or die("Query Unsuccessful.");

      if(mysqli_num_rows($result) > 0)  {
    ?>
  <tr >
   
    <th style="text-align: center;">Building Name</th>
       <th style="text-align: center;">Floor No</th>
          <th style="text-align: center;">Room No</th>
             <th style="text-align: center;">Bed No</th>
                <th style="text-align: center;">Bed Location</th>
                   <th style="text-align: center;">Bed Rent</th>
    <th style="text-align: center;width:20%">Delete</th>
  </tr>
  <?php
            while($row = mysqli_fetch_assoc($result)){
          ?>
  <tr>

    <td><center><?php echo $row['Building_Name']; ?></center></td>
      <td><center><?php echo $row['floor_no']; ?></center></td>
        <td><center><?php echo $row['room_no']; ?></center></td>
          <td><center><?php echo $row['bed_no']; ?></center></td>
            <td><center><?php echo $row['bed_location']; ?></center></td>
              <td><center><?php echo $row['bed_rent']; ?>
   <td> <center><button class="btn-danger btn" style="background-color:inherit;"> <a style="text-decoration: none;color: white;"href="f_room_delete.php?id=<?php echo $row['id']; ?>" class="text-white"> Delete </a>  </button></center></td>
  </tr>
   <?php } ?>
  
  
</table>
<?php }else{
    echo "<h2>No Record Found</h2>";
  }
  mysqli_close($con);
  ?>    
</div>
</body>
</html>