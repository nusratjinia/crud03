<?php

$link = mysqli_connect("localhost",
    "root",
    "",
    "crud03");
$query = "select * from academic_info WHERE id = $id";
$result = mysqli_query($link, $query);
$row = mysqli_fetch_assoc($result);
?>
<form action="update.php" method="post">
    <input type="hidden" name="id" value="<?php echo $row['id'];?>" />
    <label>Level of education:</label>
    <input type="text" name="Level of education" value="<?php echo $row['Level of education'];?>" />
    <label>Exam name:</label>
    <input type="text" name="Exam name" value="<?php echo $row['Exam name'];?>" />
    <label>Degree name:</label>
    <input type="text" name="Degree name" value="<?php echo $row['Degree name'];?>" />
    <label>Group:</label>
    <input type="text" name="Group" value="<?php echo $row['Group'];?>" />
    <label>Institude:</label>
    <input type="text" name="Institude" value="<?php echo $row['Institude'];?>" />
    <label>Result:</label>
    <input type="text" name="Result" value="<?php echo $row['Result'];?>" /
    <label>Year:</label>
    <input type="text" name="Year" value="<?php echo $row['Year'];?>" />
    <label>Achievement:</label>
    <input type="text" name="Achievement" value="<?php echo $row['Achievement'];?>" /
    <label>Complition Status:</label>
    <input type="text" name="Complition Status" value="<?php echo $row['Complition Status'];?>"

    <input type="submit" name="update" value="update">

</form>
