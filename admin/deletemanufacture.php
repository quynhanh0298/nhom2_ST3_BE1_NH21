<?php
    include "common.php";
    if (isset($_GET['manu_id'])) {
        if ($manu->checkCanDelete($_GET['manu_id'])) {
            $manu->deleteManufacture($_GET['manu_id']);
        }
    }
    header('location:manufactures.php');