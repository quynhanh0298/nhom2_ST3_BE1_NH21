<?php
class User extends Db{
    public function checkLogin($username, $password){
        $sql = self::$connection->prepare("SELECT * FROM users
        WHERE `username` = ? AND `password` = ?");
        $password = md5($password);
        $sql->bind_param("ss", $username, $password);
        $sql->execute(); //return an object
        $items = $sql->get_result()->num_rows;
        if ($items == 1) {
            return true;
        }
        else {
            return false;
        }
    }
    public function createNewAccount($username, $password, $role_id, $fullname, $email, $address, $telephone){
        $sql = self::$connection->prepare("INSERT INTO users(username, password, role_id, fullname, email, address, telephone) 
        VALUES(?,?,?,?,?,?,?)");
        $password = md5($password);
        $sql->bind_param("ssissss", $username, $password, $role_id, $fullname, $email, $address, $telephone);
        return $sql->execute(); //return an object
    }
    public function getUser($username, $password){
        $sql = self::$connection->prepare("SELECT * FROM users
        WHERE `username` = ? AND `password` = ?");
        $password = md5($password);
        $sql->bind_param("ss", $username, $password);
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function getUserByUsername($username){
        $sql = self::$connection->prepare("SELECT * FROM users
        WHERE `username` = ?");
        $sql->bind_param("s", $username);
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function getAllUser(){
        $sql = self::$connection->prepare("SELECT * FROM users ORDER BY user_id DESC");
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function editUser($user_id, $fullname, $email, $address, $telephone)
    {
        $sql = self::$connection->prepare("UPDATE users 
        SET fullname = ?, email = ?, address = ?, telephone = ?
        WHERE  user_id = ?");
        $sql->bind_param("ssssi", $fullname, $email, $address, $telephone, $user_id);
        $sql->execute(); //return an object
    }
}
?>