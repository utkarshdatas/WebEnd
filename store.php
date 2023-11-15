<?php
session_start();
if (!isset($_SESSION['users'])) {
    $_SESSION['users'] = array();
}
$username = $_POST['username'];
$password = $_POST['password'];
$_SESSION['users'][$username] = $password;
header('Location: login.php');
?>
