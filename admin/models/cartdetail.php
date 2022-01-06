<?php
class CartDetail extends Db{
    public function addCartDetail($cart_id, $product_id, $product_name, $price, $qty, $total)
    {
        $sql = self::$connection->prepare("INSERT INTO `cart_details`(`cart_id`, `product_id`, `product_name`, `price`, `qty`, `total`) 
        VALUES (?,?,?,?,?,?)");
        $sql->bind_param("iisiii",$cart_id, $product_id, $product_name, $price, $qty, $total);
        $sql->execute(); //return an object
    }
    public function getCartDetailByCartId($cart_id)
    {
        $sql = self::$connection->prepare("SELECT * FROM cart_details WHERE cart_id = ?");
        $sql->bind_param("i",$cart_id);
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
}