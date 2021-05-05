<?php
include('scripts/db.php');
session_start();

$user_login = $_SESSION['user_login'];
$dzAccessLevel = $_SESSION['user_accessLevel'];
$sessionSql = mysqli_query($con, "SELECT username, access_level FROM useraccount WHERE username='$user_login'");

$row = mysqli_fetch_array($sessionSql);
$login_Session_userName = $row["username"];
$login_Session_userAccessLevel = $row["access_level"];
if (!isset($_SESSION['user_login'])) {
    header("location:index.php");
};
?>
