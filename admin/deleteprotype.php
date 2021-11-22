<?php
    include "common.php";
    if (isset($_GET['type_id'])) {
        $protype->deleteProtype($_GET['type_id']);
    }
    header('location:protypes.php');