<?php
    include($_SERVER['DOCUMENT_ROOT'].'/parts/functions.php'); //т.к. нет подключения к ROOT_PATH

    $products = [
        [
            'name' => 'Шапка',
            'price' => '1000р'
        ],
        [
            'name' => 'Штаны',
            'price' => '2500р'
        ]
    ];

    // d($products);
    // json_encode() - переводит массив в строку json
    echo json_encode($products);
?>