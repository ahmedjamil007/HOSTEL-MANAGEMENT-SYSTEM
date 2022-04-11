<?php

include 'conn.php';

if(isset($_POST['done'])){

 $Building_Name = $_POST['dname'];
 
 $q = " INSERT INTO `building_add`(`Building_Name`) VALUES ( '$Building_Name' )";

 $query = mysqli_query($con,$q);
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>add build</title>
	<style >
		
		#build_table {
  
  border-collapse: collapse;
  width: 100%;
  margin-top: 50px;
}

#build_table td, #build_table th {
  border: 1px solid #ddd;
  padding: 15px;
}

#build_table tr:nth-child(even){background-color: #effaf1;}

#build_table tr:hover {background-color: #ddd;}

#build_table th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: center;
  background-color: #81ae64;
  color: white;
  text-align: center;
  font-size: 15px;
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
  margin-left: 600px;
  margin-right: 600px;
  padding: 10px;
  color: white;
  border-radius: 25px;
}
	</style>
</head>
<body>
  <h1 style="margin-top: 40px;text-align: center;"> Add Buildings</h1>
  <a href="dash.php" >Back</a>
<form  method="post" style="margin-top: 40px;margin-left: 50px;">
 	<div>
  <label for="fname" style="font-size: 20px;">Building Name:</label>
  <input style="width:70%" type="text" id="dname" name="dname">
  <input style="background-color:#81ae64;color: white;padding: 10px ;border-radius: 20px;"   type="submit" name="done" value="ADD">
 
  </div>
</form>
	<h1 style="margin-top: 40px;">Buildings</h1>

  		<table id="build_table">
  				<?php
      include 'conn.php';

      $sql = "SELECT * FROM  building_add";
      $result = mysqli_query($con, $sql) or die("Query Unsuccessful.");

      if(mysqli_num_rows($result) > 0)  {
    ?>
  <tr >
   
    <th style="text-align: center;">Building Name</th>
    <th style="text-align: center;width:20%">Delete</th>
  </tr>
  <?php
            while($row = mysqli_fetch_assoc($result)){
          ?>
  <tr>

    <td><center><?php echo $row['Building_Name']; ?></center></td>
   <td> <center><button class="btn-danger btn" style="background-color:red;"> <a style="text-decoration: none;color: white;"href="bDelete.php?id=<?php echo $row['id']; ?>" class="text-white"> Delete </a>  </button></center></td>
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