<?php
class PaymentMethod extends Db{
    public function getAllPaymentMethod(){
        $sql = self::$connection->prepare("SELECT * FROM payment_methods");
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
}
?>