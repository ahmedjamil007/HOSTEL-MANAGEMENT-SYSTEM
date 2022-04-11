<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>meal show </title>
	<style>
table {
 
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}
th{
	background-color: black;
	color: white;
}
h1{
	text-align: center;
}
tr:nth-child(even) {
  background-color: #dddddd;
}
#tarih {
  color: #111;
  font-size: 50px;
  font-weight: bold;
  text-align: center;
  letter-spacing: 5px;
  text-shadow: 5px 2px 2px #eee;
 background-color: white;
  margin-left: 500px;
  margin-right: 500px;
  border-radius: 25px;
}
a{
text-decoration: none;
background-color: indianred;
color: white;
padding: 5px;
font-size: 20px;
 

}
</style>
</head>
<body style="background-color: #CDF0FF;">
	
	    <h1> Daily Meal </h1><!---h1 tag-->

 <div id="tarih"></div><!---date-->
  <a href="dash.php" >Back</a><!---back to dashbord buttun-->
<table>
 
    
  <tr>
    <td>
    	<h1> Breakfast</h1>
    <table>
    <tr>  
    <th>ID</th>
    <th> Meal type</th>
    <th> Guest</th>
    <th> place</th>
    </tr>

    <?php

 include 'conn.php'; 
 $q = "select * from meal_bill WHERE meal_type LIKE 'B%'AND day(timestamp)=day(now()) ";

 $query = mysqli_query($con,$q);

 while($res = mysqli_fetch_array($query)){
 ?>
    <tr>  
    <td><?php echo $res['regno'];  ?></td>
    <td><?php echo $res['meal_type'];  ?></td>
    <td><?php echo $res['guest_no'];  ?></td>
       <td><?php echo $res['place'];  ?></td>
    </tr><?php 
 }
  ?>
    
    
    </table>
    
    
    </td>
    <td>
    	<h1> Lunch</h1>
    <table>
    <tr>  
    <th> ID</th>
    <th> Meal type</th>
    <th> Guest</th>
    <th> place</th>
    </tr>
    <?php

 include 'conn.php'; 
 $q = "select * from meal_bill WHERE meal_type LIKE 'L%'AND day(timestamp)=day(now()) ";

 $query = mysqli_query($con,$q);

 while($res = mysqli_fetch_array($query)){
 ?>
    <tr>  
    <td><?php echo $res['regno'];  ?></td>
    <td><?php echo $res['meal_type'];  ?></td>
    <td><?php echo $res['guest_no'];  ?></td>
       <td><?php echo $res['place'];  ?></td>
    </tr><?php 
 }
  ?>
    
    </table>
    </td>
    <td>
    	<h1> Dinner</h1>
    	<table>
    <tr>  
    <th> ID</th>
    <th> Meal type</th>
    <th> Guest</th>
    <th> place</th>
    </tr>
    <?php

 include 'conn.php'; 
 $q = "select * from meal_bill WHERE meal_type LIKE 'D%'AND day(timestamp)=day(now()) ";

 $query = mysqli_query($con,$q);

 while($res = mysqli_fetch_array($query)){
 ?>
    <tr>  
    <td><?php echo $res['regno'];  ?></td>
    <td><?php echo $res['meal_type'];  ?></td>
    <td><?php echo $res['guest_no'];  ?></td>
       <td><?php echo $res['place'];  ?></td>
    </tr><?php 
 }
  ?>
    
    </table>
    </td>
  </tr>
 
  
</table>
<script type="text/javascript">var myDate = new Date();

var myMonths = [
  "January",
  "February",
  "March",
  "April",
  "May",
  "June",
  "July",
  "Auguest",
  "September",
  "October",
  "November",
  "December"
];

document.getElementById("tarih").innerHTML =
  myDate.getDate() +
  " " +
  myMonths[myDate.getMonth()] +
  " " +
  myDate.getFullYear();
</script>
</body>
</html>