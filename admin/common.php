<?php
require "config.php";
require "models/db.php";
require "models/product.php";
require "models/protype.php";
require "models/manu.php";
require "models/cart.php";
require "models/cartdetail.php";
$cartdetail = new CartDetail;
$cart = new Cart;
$product = new Product;
$manu = new Manufacture;
$protype = new Protype;
?>