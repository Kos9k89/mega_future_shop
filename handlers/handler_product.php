<?php
    include($_SERVER['DOCUMENT_ROOT'].'/parts/header_conf.php');

    if (!isset($_SESSION['basket'])) {
        $_SESSION['basket'] = [];
    }

    $_SESSION['basket'][] = $_GET['product_id'];

    // echo d($_SESSION['basket']); //количество товаров одного id

    echo count($_SESSION['basket']); //количество товаров всего в корзине count() - это функция кторая считает элементы в массиве
?>