<?php

include "connection.php";

function validatedata($data){
    $data=trim($data);
    $data=htmlspecialchars($data);
     return $data;
}
if($connection->error==false){

if(isset($_POST["create_Account"])){
$name=validatedata($_POST["name"]);
$email=validatedata($_POST["email"]);
$password=password_hash(validatedata($_POST["password"]),PASSWORD_BCRYPT);
    

$sql="INSERT INTO users(name,email,password) VALUES ('$name','$email','$password')";

$result=$connection->query($sql);
if($result==true){
    header("Location:login_account_ui.php?statusCode=201");
}else{
    echo "failed";
}}}
?>