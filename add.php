<?php
$firstName = $_POST['firstName'];
$lastName  = $_POST['lastName'];
$contact_no = $_POST['contact_no'];

$link = mysqli_connect("localhost",
    "root",
    "shimuafrin",
    "students");



$query = "INSERT INTO `students`.`Users` (

`first_name` ,
`last_name` ,
`contact_no`
)
VALUES (
     '$firstName', '$lastName', '$contact_no'
);";

mysqli_query($link, $query);
echo $query;

header('location:list.php');
?>