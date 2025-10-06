<!DOCTYPE html>
<html>
    <html lang="en">
    <head>
   <meta charset="UTF-8">
    <meta name="viewport" context="width=device-width,initial-scale=1.0">
    <title>Update student</title>
    </head>
    <body>
        <center>
            <h1>Hello in Update student Page</h1>
        </center>
 <center>
    <input type="hidden" name="user_id" value="<?php echo $_GET["id"]?>"/>
        <form action="update_new_logic.php" method="post">
            <input type="text" name="new_new_name" placeholder="new name">
            <br>
             <input type="category" name="new_gpa" placeholder="gpa">
            <br>
            <input type="description" name="new_description" placeholder="description">
            <br>
             <input type="submit" value="update new" name="update_new">
        </form>
    </center>
    </body>
</html>