<?php
session_start();
include('includes/config.php');
date_default_timezone_set('Asia/Dhaka');  

?>




<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>mill info</title>
	<style>
    body{
        background-color: #CDF0FF;
    }
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: center;
  padding: 8px;
  font-weight: bold;
}
th{
    color: white;
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
h2{
  text-align: center;
  
  background-color: #2CB88A;
  margin-left: 400px;
  margin-right: 400px;
  padding: 10px;
  color: white;
  border-radius: 25px;
  font-size: 32px;
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

<body>

  <div id="tarih"></div><!---date-->


  <h1> Daily Meal Count</h1><!---h1 tag-->


  <a href="dash.php" >Back</a><!---back to dashbord buttun-->


<table style="margin-top: 10px;"><!---table start for student/faculty meal count start-->

  <tr>
      <th  style="background-color:#696E77;">Breakfast(Total)</th>
      <th style="background-color:#696E77;" >Hall(B)</th>
      <th  style="background-color:#696E77;">Canteen(B)</th>
      <th style="background-color:#43464C;">Lunch(Total)</th>
      <th style="background-color:#43464C;">Hall(L)</th>
      <th style="background-color:#43464C;" >Canteen(L)</th>
      <th style="background-color:#303236;">Dinner(Total)</th>
      <th style="background-color:#303236;">Hall(D)</th>
      <th style="background-color:#303236;">Canteen(D)</th>
    
  </tr>



  <tr>
  	<?php
$result1 ="SELECT count(*) FROM meal_bill WHERE meal_type LIKE 'B%' AND day(timestamp)=day(now()) ";
$stmt1 = $mysqli->prepare($result1);
$stmt1->execute();
$stmt1->bind_result($count1);
$stmt1->fetch();
$stmt1->close();
?>
    <td style="background-color:#dddddd;"><?php echo $count1;?></td><!---total breakfast-->



    <?php
$result1 ="SELECT count(*) FROM meal_bill WHERE meal_type LIKE 'B%' AND place LIKE 'H%' AND day(timestamp)=day(now()) ";
$stmt1 = $mysqli->prepare($result1);
$stmt1->execute();
$stmt1->bind_result($count1);
$stmt1->fetch();
$stmt1->close();
?>
    <td style="background-color:white;"><?php echo $count1;?></td><!---hall breakfast-->



    <?php
$result1 ="SELECT count(*) FROM meal_bill WHERE meal_type LIKE 'B%' AND place LIKE 'C%' AND day(timestamp)=day(now()) ";
$stmt1 = $mysqli->prepare($result1);
$stmt1->execute();
$stmt1->bind_result($count1);
$stmt1->fetch();
$stmt1->close();
?>

    <td style="background-color:white;"><?php echo $count1;?></td><!---centen breakfast--><!------BREAKFAST END----->
   
   



   <?php
$result1 ="SELECT count(*) FROM meal_bill WHERE meal_type LIKE 'L%' AND day(timestamp)=day(now()) ";
$stmt1 = $mysqli->prepare($result1);
$stmt1->execute();
$stmt1->bind_result($count1);
$stmt1->fetch();
$stmt1->close();
?>
    <td style="background-color:#dddddd;"><?php echo $count1;?></td><!---total lunch-->






    <?php
$result1 ="SELECT count(*) FROM meal_bill WHERE meal_type LIKE 'L%' AND place LIKE 'H%' AND day(timestamp)=day(now()) ";
$stmt1 = $mysqli->prepare($result1);
$stmt1->execute();
$stmt1->bind_result($count1);
$stmt1->fetch();
$stmt1->close();
?>
    <td style="background-color:white;"><?php echo $count1;?></td><!---hall lunch-->


   
   <?php
$result1 ="SELECT count(*) FROM meal_bill WHERE meal_type LIKE 'L%' AND place LIKE 'C%' AND day(timestamp)=day(now()) ";

$stmt1 = $mysqli->prepare($result1);
$stmt1->execute();
$stmt1->bind_result($count1);
$stmt1->fetch();
$stmt1->close();
?>
    <td style="background-color:white;"><?php echo $count1;?></td><!---centten lunch--><!-----LUCNCH END-->
   





    <?php
$result1 ="SELECT count(*) FROM meal_bill WHERE meal_type LIKE 'D%' AND day(timestamp)=day(now()) ";
$stmt1 = $mysqli->prepare($result1);
$stmt1->execute();
$stmt1->bind_result($count1);
$stmt1->fetch();
$stmt1->close();
?>
    <td style="background-color:#dddddd;"><?php echo $count1;?></td><!---total dinner-->




    <?php
$result1 ="SELECT count(*) FROM meal_bill WHERE meal_type LIKE 'D%' AND place LIKE 'H%' AND day(timestamp)=day(now()) ";
$stmt1 = $mysqli->prepare($result1);
$stmt1->execute();
$stmt1->bind_result($count1);
$stmt1->fetch();
$stmt1->close();
?>
    <td style="background-color:white;"><?php echo $count1;?></td><!---hall dinner-->
   
   <?php
$result1 ="SELECT count(*) FROM meal_bill WHERE meal_type LIKE 'D%' AND place LIKE 'C%' AND day(timestamp)=day(now()) ";
$stmt1 = $mysqli->prepare($result1);
$stmt1->execute();
$stmt1->bind_result($count1);
$stmt1->fetch();
$stmt1->close();
?>
    <td style="background-color:white;"><?php echo $count1;?></td><!---centenn dinner-->
   
  </tr>
  
</table><!---hall breakfast-->

<!---table start for student/faculty meal count end-->

<!---guest meal details-->


<h2 style="text-align: center;"> Daily Guest Meal Count</h2>



<table style="margin-top: 30px;"><!---table start for guest meal count start-->

  <tr>
        <th  style="background-color:#696E77;">Breakfast(Total)</th>
        <th style="background-color:#696E77;" >Hall(B)</th>
        <th  style="background-color:#696E77;">Canteen(B)</th>
        <th style="background-color:#43464C;">Lunch(Total)</th>
        <th style="background-color:#43464C;">Hall(L)</th>
        <th style="background-color:#43464C;" >Canteen(L)</th>
        <th style="background-color:#303236;">Dinner(Total)</th>
        <th style="background-color:#303236;">Hall(D)</th>
        <th style="background-color:#303236;">Canteen(D)</th>
  </tr>



  <tr>
    <?php
      include 'conn.php';
      $sql = "SELECT SUM(guest_no)  AS no
      FROM meal_bill WHERE meal_type LIKE 'B%'AND day(timestamp)=day(now()) ";
      $result = mysqli_query($con, $sql) or die("Query Unsuccessful.");
      if(mysqli_num_rows($result) > 0)  {
    ?>
    <?php
            while($row = mysqli_fetch_assoc($result)){
          ?>
    <td style="background-color:#dddddd;">0<?php echo $row['no']; ?></td>
  <?php } ?>

<?php }else{
    echo "<h2>No Record Found</h2>";
  }
  mysqli_close($con);
  ?>
<!---total breakfast-->






    <?php
      include 'conn.php';
      $sql = "SELECT SUM(guest_no)  AS noo
      FROM meal_bill WHERE meal_type LIKE 'B%' AND place LIKE 'H%'AND day(timestamp)=day(now()) ";
      $result = mysqli_query($con, $sql) or die("Query Unsuccessful.");
      if(mysqli_num_rows($result) > 0)  {
    ?>
    <?php
            while($row = mysqli_fetch_assoc($result)){
          ?>
    <td style="background-color:white;" >0<?php echo $row['noo']; ?></td>
  <?php } ?>

<?php }else{
    echo "<h2>No Record Found</h2>";
  }
  mysqli_close($con);
  ?>
<!---hall breakfast-->



    <?php
      include 'conn.php';

      $sql = "SELECT SUM(guest_no)  AS nooO
FROM meal_bill WHERE meal_type LIKE 'B%' AND place LIKE 'C%'AND day(timestamp)=day(now()) ";
      $result = mysqli_query($con, $sql) or die("Query Unsuccessful.");

      if(mysqli_num_rows($result) > 0)  {
    ?>

    <?php
            while($row = mysqli_fetch_assoc($result)){
          ?>
    <td style="background-color:white;" >0<?php echo $row['nooO']; ?></td>
  <?php } ?>

<?php }else{
    echo "<h2>No Record Found</h2>";
  }
  mysqli_close($con);
  ?><!---canteen breakfast-->


  <!------BREAKFAST END----->
   
   
   <?php
      include 'conn.php';

      $sql = "SELECT SUM(guest_no)  AS LO
FROM meal_bill WHERE meal_type LIKE 'L%' AND day(timestamp)=day(now()) ";
      $result = mysqli_query($con, $sql) or die("Query Unsuccessful.");

      if(mysqli_num_rows($result) > 0)  {
    ?>

    <?php
            while($row = mysqli_fetch_assoc($result)){
          ?>
    <td style="background-color:#dddddd;">0<?php echo $row['LO']; ?></td>
  <?php } ?>

<?php }else{
    echo "<h2>No Record Found</h2>";
  }
  mysqli_close($con);
  ?>

    <?php
      include 'conn.php';

      $sql = "SELECT SUM(guest_no)  AS LOO
FROM meal_bill WHERE meal_type LIKE 'L%' AND place LIKE 'H%'AND day(timestamp)=day(now()) ";
      $result = mysqli_query($con, $sql) or die("Query Unsuccessful.");

      if(mysqli_num_rows($result) > 0)  {
    ?>

    <?php
            while($row = mysqli_fetch_assoc($result)){
          ?>
    <td style="background-color:white;">0<?php echo $row['LOO']; ?></td>
  <?php } ?>

<?php }else{
    echo "<h2>No Record Found</h2>";
  }
  mysqli_close($con);
  ?>
   
   <?php
      include 'conn.php';

      $sql = "SELECT SUM(guest_no)  AS Loo
FROM meal_bill WHERE meal_type LIKE 'L%' AND place LIKE 'C%'AND day(timestamp)=day(now()) ";
      $result = mysqli_query($con, $sql) or die("Query Unsuccessful.");

      if(mysqli_num_rows($result) > 0)  {
    ?>

    <?php
            while($row = mysqli_fetch_assoc($result)){
          ?>
    <td style="background-color:white;">0<?php echo $row['Loo']; ?></td>
  <?php } ?>

<?php }else{
    echo "<h2>No Record Found</h2>";
  }
  mysqli_close($con);
  ?><!-----LUCNCH END-->
   
   <?php
      include 'conn.php';

      $sql = "SELECT SUM(guest_no)  AS Doo
FROM meal_bill WHERE meal_type LIKE 'D%' AND day(timestamp)=day(now()) ";
      $result = mysqli_query($con, $sql) or die("Query Unsuccessful.");

      if(mysqli_num_rows($result) > 0)  {
    ?>

    <?php
            while($row = mysqli_fetch_assoc($result)){
          ?>
    <td style="background-color:#dddddd;">0<?php echo $row['Doo']; ?></td>
  <?php } ?>

<?php }else{
    echo "<h2>No Record Found</h2>";
  }
  mysqli_close($con);
  ?>
    <?php
      include 'conn.php';

      $sql = "SELECT SUM(guest_no)  AS DOoo
FROM meal_bill WHERE meal_type LIKE 'D%' AND place LIKE 'H%'AND day(timestamp)=day(now()) ";
      $result = mysqli_query($con, $sql) or die("Query Unsuccessful.");

      if(mysqli_num_rows($result) > 0)  {
    ?>

    <?php
            while($row = mysqli_fetch_assoc($result)){
          ?>
    <td style="background-color:white;">0<?php echo $row['DOoo']; ?></td>
  <?php } ?>

<?php }else{
    echo "<h2>No Record Found</h2>";
  }
  mysqli_close($con);
  ?>
   <?php
      include 'conn.php';

      $sql = "SELECT SUM(guest_no)  AS Ioo
FROM meal_bill WHERE meal_type LIKE 'D%' AND place LIKE 'C%'AND day(timestamp)=day(now()) ";
      $result = mysqli_query($con, $sql) or die("Query Unsuccessful.");

      if(mysqli_num_rows($result) > 0)  {
    ?>

    <?php
            while($row = mysqli_fetch_assoc($result)){
          ?>
    <td style="background-color:white;">0<?php echo $row['Ioo']; ?></td>
  <?php } ?>

<?php }else{
    echo "<h2>No Record Found</h2>";
  }
  mysqli_close($con);
  ?>
   
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
