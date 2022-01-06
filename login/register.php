<?php
session_start();
require "../config.php";
require "../models/db.php";
require "../models/user.php";
$user = new User;
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $fullname = $_POST['fullname'];
    $email = $_POST['email']; 
    $address = $_POST['address']; 
    $telephone = $_POST['telephone'];
    $user->createNewAccount($username, $password, 2, $fullname, $email, $address, $telephone);
    $_SESSION['user'] = $username;
    $_SESSION['name'] = $fullname;
    header('location:indexlogin.php');
}
