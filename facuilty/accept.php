<?php

    include('changepass.php');
    $id = $_GET['id'];
    $query = "select * from `frequests` where `id` = '$id'; ";
    if(count(fetchAll($query)) > 0){
        foreach(fetchAll($query) as $row){
                   $regno = $row['regno'];
            $firstname = $row['firstname'];
            $lastname = $row['lastname'];
            $email = $row['email'];
                   $gender = $row['gender'];
                          $contact = $row['contact'];
                         


                          $dept = $row['dept'];
                         
                             $religion= $row['religion'];
                              $address = $row['address'];





            $password = $row['password'];
            $query = "INSERT INTO `f_accounts` (`id`, `regno`,`firstname`, `lastname`, `email`, `gender`,`contact`,`dept`,`religion`,`address`,`password`) VALUES (NULL, '$regno','$firstname', '$lastname', '$email', '$gender','$contact','$dept','$religion','$address','$password');";
        }
        $query .= "DELETE FROM `frequests` WHERE `frequests`.`id` = '$id';";
        if(performQuery($query)){
            echo "Account has been accepted.";
        }else{
            echo "Unknown error occured. Please try again.";
        }
    }else{
        echo "Error occured.";
    }
    
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>admin hostel</title>
    <style>
table, th, td {
  border:1px solid black;
  text-align: center;
  margin-top: 10px;
}
th{
    color: white;
    background-color: black;
    padding: 5 px;
}
a{
    text-decoration: none;
    background-color: red;
    color: white;
    font-size: 20ox;
    padding: 8px;
}
h1{
    text-align: center;
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
   margin-left: 580px;
  
}
    
</style>
</head>
<body style=" background-color: #CDF0FF;">
       <img style="margin-top:30px" src="images.png"class="center" />
<h1>Faculty List</h1>


<table style="width:100%">
  <tr>
    <th>Faculty id</th>
    <th>Deparment</th>
    <th>Email</th>     <th>Contact Number</th>
  </tr>
  <?php

 include 'conn.php'; 
 $q = "select * from f_accounts ";

 $query = mysqli_query($con,$q);

 while($res = mysqli_fetch_array($query)){
 ?>
  <tr>
    <td><?php echo $res['regno'];  ?></td>
    <td><?php echo $res['dept'];  ?></td>
    <td><?php echo $res['email'];  ?></td>
 
    <td><?php echo $res['contact'];  ?></td>
  </tr>
  <?php 
 }
  ?>
  <a href="home.php">Back</a>
</body>
</html>

