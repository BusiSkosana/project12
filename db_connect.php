<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
//connect to database
$hostname = "localhost";
$username = "root";
$password = "";
$database = "internet_forum";
        

$conn = mysqli_connect($hostname, $username, $password, $database);
//$sql = "SELECT * from `details`";
$select = mysqli_select_db($conn, $database);


//create query
//$query = mysqli_query($conn, $sql);

if(!$select)
{
    echo "Failed to connect to database";
}
 
 