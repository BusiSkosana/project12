<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
session_start();
include './db_connect.php';


$username = stripslashes($username);
$password = stripslashes($password);
$username = mysqli_real_escape_string($conn, $username);
$password = mysqli_real_escape_string($conn, $password); 

$data = "SELECT * FROM `details` WHERE user='$username' and password='$password'";
$result = mysqli_query($conn, $data);
    
        
    
if(isset($_POST['submit']))
{
    $username = $_POST['user'];
    $password = $_POST['password'];
    $count = mysqli_num_rows($result);
    
    
    
    if($count==1)
    {
    $_SESSION['user'] = $username;
    $_SESSION['password'] = $password;
    header("Location:login_successful.php");
    }
    else
    {
        echo "incorrect username or password";
    }
}

session_abort();
