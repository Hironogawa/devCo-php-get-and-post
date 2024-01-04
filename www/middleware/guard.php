<?php
if (session_status() === PHP_SESSION_NONE)
{
    session_start();
}

if(!isset($_SESSION['username']))
{
    header("Location: /index.php");
    
    
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        $ip = $_SERVER['REMOTE_ADDR'];
    }
  
    $logFile = fopen($_SERVER["DOCUMENT_ROOT"] . "/../log/login-activity.txt", "a") or die("Unable to open file!");
    $txt = "Anonym User tried to log in in at: " . date("Y-m-d h:i:sa") . " | from IP: " . $ip . "\n";
    fwrite($logFile, $txt);
    fclose($logFile);

} 



