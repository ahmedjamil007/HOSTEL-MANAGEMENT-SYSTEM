<?php

include 'conn.php';

$id = $_GET['id'];

$q = " DELETE FROM `accounts` WHERE id = $id ";

mysqli_query($con, $q);

header('location:studentlist.php');

?>