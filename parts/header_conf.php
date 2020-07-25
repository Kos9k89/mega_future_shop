<?php
/**
 * Подключение основных конфигурационных файлов
 */

    define('ROOT_PATH', $_SERVER['DOCUMENT_ROOT']); //создаем глобальную переменную ROOT_PATH, в нее мы положили из глобальной переменной $_SERVER абсолютный путь до наших файлов

    include(ROOT_PATH.'/parts/functions.php'); //чтобы не было ошибок в путях необходимо указывать всегда абсолютный путь, для этого мы и создали перемнную ROOT.PATH
    include(ROOT_PATH.'/conf/db.php');
?>