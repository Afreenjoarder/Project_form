<?php
$ID= $_GET['ID'];

$link = mysqli_connect("localhost",
    "root",
    "shimuafrin",
    "students");

$query ="DELETE FROM `students` . `Users` WHERE `Users` . `ID`=$ID";

mysqli_query($link, $query);

header('location:list.php');
?>
