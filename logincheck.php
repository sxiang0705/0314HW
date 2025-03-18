<?php
session_start(); 

$defaultAdminName = "admin";
$defaultAdminPwd = "1111";
$defaultUserName = "user";
$defaultUserPwd = "1111";

$userName = $_POST["userName"];
$userPwd = $_POST["userPwd"];


if ($defaultAdminName == $userName && $defaultAdminPwd == $userPwd) {
    echo "Login success, Hi Noble Admin";
    $_SESSION["check"] = "Admin"; 
    $cookiedate = strtotime("+10 seconds", time()); 
    setcookie("userName", $defaultAdminName, $cookiedate);
    header("Location: form.php"); 
} else if ($defaultUserName == $userName && $defaultUserPwd == $userPwd) {
    echo "Login success, Hi Common User";
    $_SESSION["check"] = "User"; 
    $cookiedate = strtotime("+10 seconds", time()); 
    setcookie("userName", $defaultUserName, $cookiedate);
    header("Location: form.php"); 
} else {
    echo "Login failed, will send you back to login again";
    header("Refresh:2;url='login.php'"); 
}
?>
