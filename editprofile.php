<?php
session_start();
require "config.php";
require "models/db.php";
require "models/user.php";
$user = new User;
if (isset($_POST['submit'])) {
    $user_id = $_SESSION['user_id'];
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $telephone = $_POST['telephone'];
    $user->editUser($user_id, $fullname, $email, $address, $telephone);
    header('location:editsuccessfully.php');
  }
?>