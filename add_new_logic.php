<?php
session_start(); 
include("connection.php");

if($connection->error==false){
    if(isset($_POST["add_new"])){
      $title=$_POST["title"];
          $category=$_POST["category"];
            $description=$_POST["description"];
   $icon=$_POST["icon"];
      $sql="INSERT INTO news(title,category,description,icon,user_id) VALUES ('$title','$category','$description','$icon','')"; 
      $result=$connection->query($sql);
      if($result==true){
header("Location:show_new_ui.php?created=true");
    }else{
echo "Faile";
    }
    
    
    
    }
}


?>