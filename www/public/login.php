<?php
session_start();
function login($username, $password)
{
    $db_username= 'admin';
    $db_password = '1234';
    
    if($username == $db_username && $password == $db_password)
    {
        return true;
    }else{
        return false;
    }
}

if($_SERVER['REQUEST_METHOD'] == 'POST')
{ 
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    if(login($username, $password))
    {
        $_SESSION['username'] = $username;
        header("Location: dashboard.php");
    }else{
        header("Location: index.php");
    }
}else{
    header("Location: index.php");
}
