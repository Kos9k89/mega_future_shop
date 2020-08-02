<?php
    include($_SERVER['DOCUMENT_ROOT'].'/parts/header_conf.php');
?>
    <?php if (isset($_GET['email']) & !empty($_GET['email'])) : ?>
        <?php
            $sql = "INSERT INTO subscription (id, email) 
            VALUES (null, '{$_GET['email']}')";
    
            $result = mysqli_query($link, $sql);
    
            if ($result) {
                echo "<div class='subscription__success'>Вы подписаны!</div>";
            } else {
                echo '<div class="subscription__success">К сожалению, по техническим причинам не удалось отправить данные</div>';
            }
        ?>
    <?php else : ?>
        <?php echo "<div class='subscription__error'>Введите email...</div>"; ?>
    <?php endif; ?>
