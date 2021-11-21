 <?php
    include "common.php";
    if (isset($_GET['id'])) {
        $product->deleteProduct($_GET['id']);
    }
    header('location:products.php');
