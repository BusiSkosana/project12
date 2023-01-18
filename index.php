<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Internet Forum</title>
    </head>
    <body style="text-align: center; color: green;">
        <h1>Welcome to our internet forum!</h1>
        <h2>Login</h2>
        <fieldset>
            <form action="" method="POST" style="color: white; background-color: green;">
                Username<br/> 
                <input type="text" name="user" value=""><br/>
                Password<br/>
                <input type="text" name="password" value=""><br/><br/>
                <input type="submit" name="submit" value="Login">
            </form>
        </fieldset>
        
        
        
        <?php
        
        
       include './db_connect.php';
       include './check_login.php';
       
        ?>
    </body>
</html>
