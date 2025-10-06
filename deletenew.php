<?php
include"connection.php";
if($_GET["id"]){
    $id=$_GET["id"];
    $sql="DELETE FROM news WHERE id=$id";
    $result=$connection->query($sql);
    if($result==true){
     header("Location:show_new_ui.php?deleted=true");
    }
}



?>