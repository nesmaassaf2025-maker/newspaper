<?php
session_start();
include "connection.php";
$sql="SELECT * FROM news";
$result=$connection->query($sql);
?>



<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" context="width=device-width,initial-scale=1.0">
    <title>View news</title>
</head>
   <body>

    <table border="1px" width="100%">
    <tr>
        <th>icon</th> 
       <th>name</th> 
       <th>descreption</th> 
       <th>category</th> 
    </tr>
    <?php
if($result->num_rows !=0){
 while($row = $result->fetch_assoc())  {?>
<tr>
     <td>
        <?php echo $row["icon"] ?>
    </td>
    <td>
        <?php echo $row["title"] ?>
    </td>
     <td>
        <?php echo $row["description"] ?>
    </td>
       <td>
        <?php echo $row["category"] ?>
    </td>
</tr>
<?php
} 
}
?>


    </table>
   </body>
</html>
