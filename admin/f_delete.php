<?php

include 'conn.php';

$id = $_GET['id'];

$q = " DELETE FROM `f_complain` WHERE id = $id ";

mysqli_query($con, $q);

header('location:f_facultycomplain.php.php');

?>