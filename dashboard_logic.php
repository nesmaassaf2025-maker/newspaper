<?php
session_start();
include "connection.php";


if($connection->error==false){
    if(isset($_POST["add_category"])){
header("Location:add_category_ui.php");
    }
        if(isset($_POST["show_category"])){
header("Location:show_category_ui.php");
    }
        if(isset($_POST["show_news"])){
header("Location:show_new_ui.php");
    }
      if(isset($_POST["add_new"])){
header("Location:add_new_ui.php");
    }
}


?>