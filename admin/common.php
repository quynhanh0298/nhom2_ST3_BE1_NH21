<?php
require "config.php";
require "models/db.php";
require "models/product.php";
require "models/protype.php";
require "models/manu.php";
$product = new Product;
$manu = new Manufacture;
$protype = new Protype;
$getAllManu = $manu->getAllManu();
$getAllProtype = $protype->getAllProtype();
?>