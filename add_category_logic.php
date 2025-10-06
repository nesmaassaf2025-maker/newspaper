<?php
session_start(); 
$authId=$_SESSION["authUser"]["id"];
include "connection.php";

if($connection->error==false){

if(isset($_POST["add_category"])){
    $name=$_POST["name"];
$sql="INSERT INTO category(name) VALUES ('$name')";

$result=$connection->query($sql);
if($result==true){
    header("Location:show_category_ui.php");
}else{
    echo "failed";
}}

}


?>