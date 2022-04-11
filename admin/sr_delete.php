<?php

include 'conn.php';

$id = $_GET['id'];

$q = " DELETE FROM `room` WHERE id = $id ";

mysqli_query($con, $q);

header('location:student_room_up.php');

?>