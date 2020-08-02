<?php
    include($_SERVER['DOCUMENT_ROOT'].'/parts/header_conf.php');

    $response = [
        'products' => []
    ];

    $sql_products = "SELECT products.* FROM products INNER JOIN product_category /*объединяет 2 таблицы в БД по нужному id */
    ON products.id = product_category.product_id  /*products.* забирате только поля которые находятся в products*/ 
    WHERE product_category.category_id = {$_GET['category_id']}";

    $result_products = mysqli_query($link, $sql_products);

    while ($row = mysqli_fetch_assoc($result_products)) {
        $response['products'][] = $row;
    }

//    sleep(3); //задержка на три секунды, потом все появляется
   echo json_encode($response['products']);
?>