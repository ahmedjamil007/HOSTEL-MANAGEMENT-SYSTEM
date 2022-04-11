<?php
include('includes/config.php');



if(!empty($_POST["bedid"])) 
{
$id=$_POST["bedid"];
 $query ="SELECT * FROM f_room_add WHERE bed_no = ?";
$stmt = $mysqli->prepare($query);
$stmt->bind_param('s',$id);
$stmt->execute();
$res=$stmt->get_result();
while($row=$res->fetch_object())
{  echo htmlentities($row->bed_location);
 
 }
}


if(!empty($_POST["rid"])) 
{
$id=$_POST["rid"];
 $query ="SELECT * FROM f_room_add WHERE bed_no = ?";
$stmt = $mysqli->prepare($query);
$stmt->bind_param('s',$id);
$stmt->execute();
$res=$stmt->get_result();
while($row=$res->fetch_object())
{  echo htmlentities($row->bed_rent);
 
 }
}



?>