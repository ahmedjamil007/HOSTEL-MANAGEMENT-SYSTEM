<?php
    include('changepass.php');
    $id = $_GET['id'];
    
    $query = "DELETE FROM `f_room_request` WHERE `f_room_request`.`id` = '$id';";
        if(performQuery($query)){
            echo "room request has been rejected.";
        }else{
            echo "Unknown error occured. Please try again.";
        }

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
  margin-top: 25px;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
a{
text-decoration: none;
background-color: indianred;
color: white;
padding: 5px;
font-size: 20px;
 

}
h1{
  text-align: center;
  margin-top: 10px;
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
    <h1 style="text-align: center;">Faculty room</h1>
    <br>
    <a href="dash.php" >Back</a>

<table>
     <?php
      include 'conn.php';

      $sql = "SELECT * FROM f_room";
      $result = mysqli_query($con, $sql) or die("Query Unsuccessful.");

      if(mysqli_num_rows($result) > 0)  {
    ?>
  <tr>
    <th>Student id</th>
    <th>Name</th>
    
        <th>Building Name</th>
          <th>Floor no</th>
            <th>room no</th>
              <th>bed no</th>
                <th>Bed Location</th>
                  <th>Bed rent</th>
                   
  </tr>
 
     <?php
            while($row = mysqli_fetch_assoc($result)){
          ?>
  <tr>
    <td><?php echo $row['regno']; ?></td>
    <td><?php echo $row['firstname']; ?></td>
    
      <td><?php echo $row['Building_Name']; ?></td>
       <td><?php echo $row['floor_no']; ?></td> 
        <td><?php echo $row['room_no']; ?></td>
         <td><?php echo $row['bed_no']; ?></td>
          <td><?php echo $row['bed_location']; ?></td>
           <td><?php echo $row['bed_rent']; ?></td>
            
    
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