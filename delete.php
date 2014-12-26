<?php
$id = $_GET['id'];
$link = mysqli_connect("localhost",
    "root",
    "",
    "crud03");
$query = "DELETE FROM `crud03`.`academic_info` WHERE `academic_info`.`id` = $id";
mysqli_query($link, $query);
header('location:list.php');

?>
