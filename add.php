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
$query = INSERT INTO `crud03`.`academic_info` (`Level of education`, `Exam title`, `Degree name`, `Group`, `Institude`, `Year`, `Result`, `Acheivement`, `Complition Status`)
        VALUES (NULL, '".$Level of education."', '".$Exam title."', '".$Degree name."', '".$Group."', '".$Institude."', '".$Year."', '".$Result."', '".$Acheivement."', '".$Complition Status."');";

mysqli_query($link, $query);

?>
