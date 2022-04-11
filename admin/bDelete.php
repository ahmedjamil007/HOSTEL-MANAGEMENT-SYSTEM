<?php

include 'conn.php';

$id = $_GET['id'];

$q = " DELETE FROM `building_add` WHERE id = $id ";

mysqli_query($con, $q);

header('location:add_build.php');

?>