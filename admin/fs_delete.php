<?php

include 'conn.php';

$id = $_GET['id'];

$q = " DELETE FROM `f_accounts` WHERE id = $id ";

mysqli_query($con, $q);

header('location:facultylist.php');

?>