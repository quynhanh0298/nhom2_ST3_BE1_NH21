<?php
class Manufacture extends Db{
    public function getAllManu(){
        $sql = self::$connection->prepare("SELECT * FROM manufactures");
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function addManufacture($manu_name)
    {
        $sql = self::$connection->prepare("INSERT INTO manufactures(manu_name) 
        VALUES(?)");
        $sql->bind_param("s",$manu_name);
        $sql->execute(); //return an object
    }
    public function editManufacture($manu_id,$manu_name)
    {
        $sql = self::$connection->prepare("UPDATE manufactures 
        SET manu_name = ?
        WHERE  manu_id = ?");
        $sql->bind_param("si",$manu_name, $manu_id);
        $sql->execute(); //return an object
    }
    public function deleteManufacture($manu_id)
    {
        $sql = self::$connection->prepare("DELETE FROM manufactures WHERE manu_id = ?");
        $sql->bind_param("i",$manu_id);
        $sql->execute(); //return an object
    }
}
?>