<?php
session_start();
if (isset($_GET['id'])) {
    if (isset($_SESSION['cart'][$_GET['id']])) {
        $_SESSION['cart'][$_GET['id']]--;
        if (isset($_SESSION['cart']['qty'])) {
            $_SESSION['cart']['qty']--;
        }
    }   
}
header('location:cart.php');