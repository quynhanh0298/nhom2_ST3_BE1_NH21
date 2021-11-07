<?php
class Product extends Db
{
    public function getAllProducts()
    {
        $sql = self::$connection->prepare("SELECT * FROM products");
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function getProductById($id)
    {
        $sql = self::$connection->prepare("SELECT * FROM products WHERE id = ?");
        $sql->bind_param("i", $id);
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function get10NewestProducts()
    {
        $sql = self::$connection->prepare("SELECT * FROM products ORDER BY id DESC LIMIT 0,10");
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    //Sear:
    public function search($keyword)
    {
        $sql = self::$connection->prepare("SELECT * FROM products WHERE `name` LIKE ?");
        $keyword = "%$keyword%";
        $sql->bind_param("s", $keyword);
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    //Them producats:
    public function getProductByManu($manu)
    {
        $sql = self::$connection->prepare("SELECT * 
        FROM products INNER JOIN manufactures 
        WHERE products.manu_id = manufactures.manu_id AND manufactures.manu_name = ?");
        $sql->bind_param("s", $manu);
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
     //Them San Pham:
     public function getProductByTypeid($type_id)
     {
         $sql = self::$connection->prepare("SELECT *FROM products WHERE type_id = ?");
         $sql->bind_param("i", $type_id);
         $sql->execute(); //return an object
         $items = array();
         $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
         return $items; //return an array
     }
     
}
