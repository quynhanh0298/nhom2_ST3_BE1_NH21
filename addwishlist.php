<?php
session_start();
if (isset($_GET['id'])) {
    if (isset($_SESSION['wishlist'][$_GET['id']])) {
    } else {
        $_SESSION['wishlist'][$_GET['id']] = 1;
        if (isset($_SESSION['wishlist']['qty'])) {
            $_SESSION['wishlist']['qty']++;
        } else {
            $_SESSION['wishlist']['qty'] = 1;
        }
    }    
}
header('location:index.php');