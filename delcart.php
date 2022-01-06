<?php
session_start();
if (isset($_GET['id'])) {
    $_SESSION['cart']['qty'] -= $_SESSION['cart'][$_GET['id']];
    unset($_SESSION['cart'][$_GET['id']]);
} else {
    unset($_SESSION['wishlist']['qty']);
}
header('location:cart.php');
