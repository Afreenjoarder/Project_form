<?php
$ID= $_GET['ID'];

$link = mysqli_connect("localhost",
    "root",
    "shimuafrin",
    "students");

$query = "SELECT * FROM `Users` WHERE `Users` . `ID`=$ID ";
$result = mysqli_query($link, $query);

$row = mysqli_fetch_assoc($result);
print_r($row);


?>
<a href="list.php">Go to Home</a>