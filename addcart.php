<?php
session_start();
if (isset($_GET['id'])) {
    if (isset($_SESSION['cart'][$_GET['id']])) {
        $_SESSION['cart'][$_GET['id']]++;
        if (isset($_SESSION['cart']['qty'])) {
            $_SESSION['cart']['qty']++;
        } else {
            $_SESSION['cart']['qty'] = 1;
        }
    } else {
        $_SESSION['cart'][$_GET['id']] = 1;
        if (isset($_SESSION['cart']['qty'])) {
            $_SESSION['cart']['qty']++;
        } else {
            $_SESSION['cart']['qty'] = 1;
        }
    }    
}
header('location:index.php');