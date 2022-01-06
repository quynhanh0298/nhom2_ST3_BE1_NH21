<?php
session_start();
require "../config.php";
require "../models/db.php";
require "../models/user.php";
$user = new User;
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    if ($user->checkLogin($username, $password)) {
        $_SESSION['user'] = $username;
        $getUser = $user -> getUser($username, $password);
        $_SESSION['user_id'] = $getUser[0]['user_id'];
        if ($getUser[0]['role_id'] == 1) {
            header('location:../admin/dashboard.php');
        }
        else {
            header('location:../index.php');
        }
    }
    else {
        header('location:indexlogin.php');
    }
}
?>