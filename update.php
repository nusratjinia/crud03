<?php
$id = $_POST['id'];
$Level_of_educationdress = $_POST['Level of education'];
$Exam_Title = $_POST['Exam Title'];
$Degree_name = $_POST['Degree name'];
$Group= $_POST['Group'];
$Institude = $_POST['Institude'];
$Year= $_POST['Year'];
$Result= $_POST['Result'];
$Achievement= $_POST['Achievement'];
$Complition_Status= $_POST['Complition Status'];

$link = mysqli_connect("localhost",
"root",
"",
"crud03");


$query = "UPDATE `crud03`.`academic_info` SET `Level of education` = '".$Level_of_education."',
`Exam title` = '".$Exam_Title ."',Degree_name` = '".$firstName."',Group` = '".$Group."',Institude` = '".$Institude."',Result` = '".$Result."',Year` = '".$Year."',Achievement` = '".Achievement."', Complition_Status` = '".$Complition_Status."',WHERE `academic_info`.`id` = $id;";

mysqli_query($link, $query);
header('location:list.php');
?>
