<?php
class Protype extends Db{
    public function getAllProtype(){
        $sql = self::$connection->prepare("SELECT * FROM protypes");
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function addProtype($type_name)
    {
        $sql = self::$connection->prepare("INSERT INTO protypes(type_name) 
        VALUES(?)");
        $sql->bind_param("s",$type_name);
        $sql->execute(); //return an object
    }
    public function editProtype($type_id,$type_name)
    {
        $sql = self::$connection->prepare("UPDATE protypes 
        SET type_name = ?
        WHERE  type_id = ?");
        $sql->bind_param("si", $type_name,$type_id);
        $sql->execute(); //return an object
    }
    public function checkCanDelete($type_id)
    {
        $sql = self::$connection->prepare("SELECT * FROM products
        WHERE type_id = ?");
        $sql->bind_param("i", $type_id);
        $sql->execute(); //return an object
        $items = $sql->get_result()->num_rows;
        if ($items == 0) {
            return true;
        }
        else {
            return false;
        }
    }
    public function deleteProtype($type_id)
    {
        $sql = self::$connection->prepare("DELETE FROM protypes WHERE type_id = ?");
        $sql->bind_param("i",$type_id);
        $sql->execute(); //return an object
    }
}
?>