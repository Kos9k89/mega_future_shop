<?php
    $header_config = [
        'title' => 'Карточка товара',
        'style' => 'product.css'
    ];

    include('parts/header.php');

    $template = [
        'id' => '',
        'img_url' => '',
        'name' => '',
        'description' => '',
        'price' => '',
    ];

    if (!empty($_GET['id'])) {
        $sql = "SELECT * FROM products WHERE id = '{$_GET['id']}'";
        $result = mysqli_query($link, $sql);

        $template = mysqli_fetch_assoc($result);

        // d($template);
    } else {
        header('Location: /catalog.php'); //редирект - если случайно зайти сразу на эту страницу, то перебросит на главную или каталог
    }  //в Location передаем url страницы куда надо перебросить

    $breadcrumbs = 'мужчинам';
?>

<div class="breadcrumbs">
    <a href="/">главная</a> / 
    
    <a href="/catalog.php"><?= $breadcrumbs ?></a>
</div>

<div class="product">
    <div class="product-img" style="background-image: url(<?= $template['img_url'] ?>)"></div>

    <div class="product-name">
        <?= $template['name'] ?>
    </div>

    <div class="product-price">
        <?= $template['price'] ?> руб.
    </div>

    <div class="product-description">
        <?= $template['description'] ?>
    </div>

    <div class="product-btn" data-product-id="<?= $template['id'] ?>"> <!-- product-id хранится в $template-->
        Добавить в корзину
    </div>
</div>

<?php
    $footer_config = [
        'script' => 'product.js'
    ];

    include('parts/footer.php');
?>