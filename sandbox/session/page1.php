<?php
    session_start(); //созадем сессионную куку

    // $_SESSION['count'] = 1; //это значение будет доступна на всех страницах нашего сайта (но всегда сначала прописывать session_start();)

    if (empty($_SESSION['count'])) {
        $_SESSION['count'] = 1;
    }

    $_SESSION['count']++; //при обновлении будет добавляться плюс 1

    print_r($_SESSION); //глобальный массив
?>