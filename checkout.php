<?php
session_start();
require "config.php";
require "models/db.php";
require "models/cart.php";
require "models/product.php";
require "models/cartdetail.php";
$cartdetail = new CartDetail;
$product = new Product();
$cart = new Cart;
if (isset($_POST['submit'])) {
    $user_id = $_SESSION['user_id'];
    $total = $_SESSION['total'];
    $payment_method_id = $_POST['payment'];
    $shipping_fee = $_SESSION['shipping_fee'];
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $telephone = $_POST['telephone'];
    $cart->addCart($user_id, $total, $payment_method_id, $shipping_fee, $fullname, $email, $address, $telephone);
    $newestCart = $cart->getNewestCart();
    $getAllProducts = $product->getAllProducts();
    foreach ($getAllProducts as $value) :
        if (isset($_SESSION['cart'][$value['id']]) && $_SESSION['cart'][$value['id']] > 0) {
            $cart_id = $newestCart[0]['cart_id'];
            $product_id = $value['id'];
            $product_name = $value['name'];
            $price = $value['price'];
            $qty = $_SESSION['cart'][$value['id']];
            $total = $value['price'] * $_SESSION['cart'][$value['id']];
            $cartdetail->addCartDetail($cart_id, $product_id, $product_name, $price, $qty, $total);
        }
    endforeach;
    unset($_SESSION['cart']);
    header('location:finishorder.php');
}
?>