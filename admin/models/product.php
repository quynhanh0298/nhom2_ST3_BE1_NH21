<?php
class Product extends Db
{
    public function getAllProducts()
    {
        $sql = self::$connection->prepare("SELECT * 
        FROM products, manufactures, protypes
        WHERE products.manu_id = manufactures.manu_id
        AND products.type_id = protypes.type_id
        ORDER BY id DESC");
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
    public function editProduct($id, $name, $manu_id, $type_id, $price, $pro_image, $description, $feature)
    {
        if ($pro_image == "") {
            $sql = self::$connection->prepare("UPDATE products 
            SET name = ?, manu_id = ?, type_id = ?, price = ?, description = ?, feature = ?
            WHERE id = ?");
            $sql->bind_param("siiisii", $name, $manu_id, $type_id, $price, $description, $feature, $id);
        } else {
            $sql = self::$connection->prepare("UPDATE products 
            SET name = ?, manu_id = ?, type_id = ?, price = ?, pro_image = ?, description = ?, feature = ?
            WHERE id = ?");
            $sql->bind_param("siiissii", $name, $manu_id, $type_id, $price, $pro_image, $description, $feature, $id);
        }
        return $sql->execute(); //return an object
    }
    public function addProduct($name, $manu_id, $type_id, $price, $pro_image, $description, $feature)
    {
        $sql = self::$connection->prepare("INSERT INTO products(name, manu_id, type_id, price, pro_image, description, feature) 
        VALUES(?,?,?,?,?,?,?)");
        $sql->bind_param("siiissi", $name, $manu_id, $type_id, $price, $pro_image, $description, $feature);
        return $sql->execute(); //return an object
    }
    public function deleteProduct($id)
    {
        $sql = self::$connection->prepare("DELETE FROM products WHERE id = ?");
        $sql->bind_param("i", $id);
        return $sql->execute(); //return an object
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
    public function getProductByManu($manu_id)
    {
        $sql = self::$connection->prepare("SELECT * FROM products WHERE manu_id = ?");
        $sql->bind_param("i", $manu_id);
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
    public function getFeaturedProducts($type_id)
    {
        $sql = self::$connection->prepare("SELECT *FROM products WHERE type_id = ? AND feature = 1");
        $sql->bind_param("i", $type_id);
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function getProductByManuId($manu_id)
    {
        $sql = self::$connection->prepare("SELECT * FROM products WHERE manu_id = ?");
        $sql->bind_param("i", $manu_id);
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function get5Product($page, $perPage)
    {
        // Tính số thứ tự trang bắt đầu
        $firstLink = ($page - 1) * $perPage;
        $sql = self::$connection->prepare("SELECT *
        FROM products, manufactures, protypes
        WHERE products.manu_id = manufactures.manu_id
        AND products.type_id = protypes.type_id
        ORDER BY id DESC
        LIMIT ?, ?");
        $sql->bind_param("ii", $firstLink, $perPage);
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    function paginate($url, $total, $perPage)
    {
        $totalLinks = ceil($total / $perPage);
        $link = "";
        for($j=1; $j <= $totalLinks ; $j++)
     	{
      		$link = $link . "<li><a href='$url?page=$j'> $j </a></li>";
     	}
        return $link;
    }
}
