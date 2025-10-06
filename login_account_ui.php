<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" context="width=device-width,initial-scale=1.0">
    <title>login</title>
</head>
<body>
    <center>
    <h1>Hello in Login Page</h1>
    <?php
if(isset($_GET["statusCode"])){
   if($_GET["statusCode"] == "201"){
    echo "<b> Account created</b>";
   }
}
?>
        <form action="login_account_logic.php" method="post">
    <lable>Email</lable>
    <input type ="email" name="email"/>
     <br>
       <lable>Password</lable>
    <input type ="password" name="password"/>
    <br>
             <input type="submit" name="login" value="login">
        </form>
    </center>
</body>
</html>