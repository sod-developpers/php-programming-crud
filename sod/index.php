<?php
// require "connection.php";
$conn = new mysqli("localhost","root","","php_programming");

// sql command
$sql = "SELECT * FROM students";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border='1'>
        <tr>
            <th>Identification</th>
            <th>Names</th>
            <th>Level</th>
            <th>Ages</th>
            <th>Actions</th>
        </tr>

        <?php
            while($row = $result->fetch_object()){
                ?>
                  <tr>
                    <td><?php echo $row->id ?></td>
                    <td><?php echo $row->names ?></td>
                    <td><?php echo $row->level ?></td>
                    <td><?php echo $row->ages ?></td>
                    <td>
                        <a href="#">Delete</a> | 
                        <a href="#">Update</a>
                    </td>
                  </tr>  
                <?php
            }
        ?>

    </table>
</body>
</html>