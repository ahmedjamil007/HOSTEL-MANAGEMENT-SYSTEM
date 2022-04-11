<?php

include 'conn.php';

$id = $_GET['id'];

$q = " DELETE FROM `room_add` WHERE id = $id ";

mysqli_query($con, $q);

header('location:room_details.php');

?>