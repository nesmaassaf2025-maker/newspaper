<?php
session_start();
 $_SESSION["authUser"]=$data;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" context="width=device-width,initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
 <center>
        <form action="dashboard_logic.php" method="post" >
    <lable>add news</lable>
    <input type ="submit" name="add_category" value="add category"/>
     <br>
       <lable>show news</lable>
    <input type ="submit" name="show_category" value="show categories"/>
    <br>
    <lable>show all news</lable>
             <input type="submit" name="show_all_news" value="show all news">
               <br>
  <lable>add new</lable>
             <input type="submit" name="add_new" value="add_new">
 </center>

</body>
</html>
