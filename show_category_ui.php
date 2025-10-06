<?php
session_start();
include "connection.php";
$sql="SELECT * FROM category";
$result=$connection->query($sql);
?>



<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" context="width=device-width,initial-scale=1.0">
    <title>View students</title>
</head>
   <body>

    <table border="1px" width="100%">
    <tr>
        <th>id</th> 
       <th>name</th> 
    </tr>
    <?php
if($result->num_rows !=0){
 while($row = $result->fetch_assoc())  {?>
<tr>
    <td>
        <?php echo $row["id"] ?>
    </td>
     <td>
        <?php echo $row["name"] ?>
    </td>
</tr>
<?php
} 
}
?>


    </table>
   </body>
</html>
