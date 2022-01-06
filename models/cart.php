<?php
class Cart extends Db{
    public function addCart($user_id, $total, $payment_method_id, $shipping_fee, $fullname, $email, $address, $telephone)
    {
        $sql = self::$connection->prepare("INSERT INTO `carts`(`user_id`, `total`, `payment_method_id`, `shipping_fee`, `fullname`, `email`, `address`, `telephone`) 
        VALUES (?,?,?,?,?,?,?,?)");
        $sql->bind_param("iiiissss",$user_id, $total, $payment_method_id, $shipping_fee, $fullname, $email, $address, $telephone);
        $sql->execute(); //return an object
    }
    public function getNewestCart()
    {
        $sql = self::$connection->prepare("SELECT * FROM carts ORDER BY cart_id DESC LIMIT 1");
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function getAllCart()
    {
        $sql = self::$connection->prepare("SELECT * FROM carts ORDER BY cart_id DESC");
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function getAllCartByUserId($user_id)
    {
        $sql = self::$connection->prepare("SELECT * FROM carts WHERE user_id = ? ORDER BY cart_id DESC");
        $sql->bind_param("i",$user_id);
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
}