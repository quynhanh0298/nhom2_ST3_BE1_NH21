<?php
session_start();
if (isset($_GET['id'])) {
    unset($_SESSION['wishlist'][$_GET['id']]);
    $_SESSION['wishlist']['qty']--;
}
else {
    unset($_SESSION['wishlist']['qty']);
}
header('location:wishlist.php');