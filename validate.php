<?php
session_start();
$username = $_POST['username'];
$password = $_POST['password'];
if (isset($_SESSION['users'][$username]) && $_SESSION['users'][$username] == $password) {
    echo 'Successfully logged in';
} else {
    echo 'Incorrect username or password';
}
?>
