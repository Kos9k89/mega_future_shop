<?php
    $header_config = [
        'title' => 'Главная страница',
        'style' => 'index.css'
    ];

    include('parts/header.php');
?>

<section class="offer">
    <h2 class="offer__title">
        Новые поступления весны
    </h2>

    <p class="offer__subtitle">
            Мы подготовили для Вас лучшие новинки сезона
    </p>

    <a class="offer__btn" href="#">посмореть новинки</a>
</section>

<section class="products">
    <div class="products__inner">
        <div class="products__jeans">
            <div class="products__jeans-jacket">
                джинсовые куртки <span>New Arrival</span>
            </div>

            <div class="products__jeans-inner">
                <div class="products__jeans-info">
                    <div class="products__jeans-attention"></div>

                    <p>
                        каждый сезон мы подготавливаем для Вас исключительно 
                        лучшую модель. Следите за нашими новинками!
                    </p>
                </div>

                <div class="products__jeans-pants">
                    джинсы <span>от 3200 руб.</span>
                </div>
            </div>
        </div>

        <div class="products__accessories">
            <div class="products__accessories-img"></div>

            <div class="products__accessories-name">
                <div class="products__accessories-arrow"></div>

                <p>
                    Аксессуары
                </p>      
            </div>
        </div>
    </div>

    <div class="products__inner">
        <div class="products__shoes">
            <div class="products__shoes-img"></div>

            <div class="products__shoes-name">
                <div class="products__shoes-arrow"></div>

                <p>Элегантная обувь</p>      

                <span>ботинки, кросовки</span>
            </div>
        </div>

        <div class="products__clothes">
            <div class="products__clothes-inner">
                <div class="products__clothes-info">
                    <div class="products__clothes-attention"></div>

                    <p>
                        Самые низкие цены в Москве.
                    </p>

                    <p>
                        Нашли дешевле? Вернем разницу.
                    </p>
                </div>

                <div class="products__clothes-sport">
                    спортивная одежда <span>от 590 руб.</span>
                </div>
            </div>

            <div class="products__clothes-children">
                детская одежда <span>New Arrival</span>
            </div>
        </div>
    
    </div>
</section>

<section class="subscription">
    <h2 class="subscription__title">
        будь всегда в курсе выгодных предложений
    </h2>

    <p class="subscription__subtitle">
         подписывайся и следи за новинками и выгодными предложениями.
    </p>

    <div class="subscription__info">  
        <form class="subscription__form" method="GET" action="">
            <input type="email" name="email" placeholder="e-mail">

            <input type="submit" value="записаться">
        </form>

        <div class="subscription__success"></div>
        <div class="subscription__error"></div>
    </div> 
</section>

<?php
    $footer_config = [
        'script' => 'index.js'
    ];

    include('parts/footer.php');
?>