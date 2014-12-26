


<?php
$link = mysqli_connect("localhost","root","","crud03");
$query = "select * from academic_info;";
$result = mysqli_query($link, $query);
?>

<table border="2" width="80%">
    <tr><td>id</td>
        <td>Level of education</td>
        <td>Exam Title</td>
        <td>Degree name</td>
        <td>Degree name</td>
        <td>Institude</td>
        <td>Result</td>
        <td>Year</td>
        <td>Achievement</td>
        <td>Complition Status</td>
        <td>Action</td>
    </tr>
    <?php
    foreach($result as $row){
        ?>
        <tr>

            <td><?php echo $row['id']?></td>
            <td><?php echo $row['Level of education']?></td>
            <td><?php echo $row['Exam title']?></td>
            <td><?php echo $row['Degree name']?></td>
            <td><?php echo $row['Group']?></td>
            <td><?php echo $row['Institude']?></td>
            <td><?php echo $row['Year']?></td>
            <td><?php echo $row['Result']?></td>
            <td><?php echo $row['Achievement']?></td>
            <td><?php echo $row['Complition Status']?></td>


            <td> <a href="view.php?id=<?php echo $row['id']?>">View/Show</a> |
                <a href="delete.php?id=<?php echo $row['id']?>">Delete</a> |
                <a href="edit.php?id=<?php echo $row['id']?>">edit</a> |
            </td>
        </tr>
    <?php
    }
    ?>
</table>
