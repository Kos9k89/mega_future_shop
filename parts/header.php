<?php
    include('parts/header_conf.php');
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $header_config['title'] ?></title>

    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/styles/style-font.css">
    <link rel="stylesheet" href="/styles/styles.css">
    <link rel="stylesheet" href="/styles/<?= $header_config['style'] ?>">
</head>
<body>
    <div class="wrapper">
        <header class="header">
            <div class="header__inner">
                <div class="header__Logo">
                    <a href="/"><img src="/images/icons/logo.jpg" alt="logo"></a>
                </div>

                <nav class="header__menu">
                    <ul>
                        <li>
                            <a class="header__menu-female" href="/catalog.php?category_id=1">Женщинам</a>
                        </li>

                        <li>
                            <a class="header__menu-male" href="/catalog.php?category_id=2">Мужчинам</a>
                        </li>

                        <li>
                            <a class="header__menu-children" href="/catalog.php?category_id=3">Детям</a>
                        </li>

                        <li>
                            <a class="header__menu-new" href="#">Новинки</a>
                        </li>

                        <li>
                            <a class="header__menu-about" href="#">О нас</a>
                        </li>
                    </ul>
                </nav>
            </div>

            <div class="header__user">
                <a class="header__user-login" href="#">Войти</a>

                <a class="header__user-basket" href="#">Корзина(0)</a>
            </div>
        </header>
