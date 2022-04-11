<?php
require_once("includes/config.php");

// For room availbilty
if(!empty($_POST["bed_no"])) 
{
$bed_no=$_POST["bed_no"];
$result ="SELECT count(*) FROM room WHERE bed_no=?";
$stmt = $mysqli->prepare($result);
$stmt->bind_param('s',$bed_no);
$stmt->execute();
$stmt->bind_result($count);
$stmt->fetch();
$stmt->close();
if($count>0)
echo "<span style='color:red'>This bed already full.</span>";
else
	echo "<span style='color:blue'> Bed are Available</span>";
}
?>