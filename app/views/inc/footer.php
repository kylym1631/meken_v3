<footer class="footer">
    <div class="container">
        <button data-modal="consultation" class="button button_consultation">Заказать звонок</button>
        <div class="row footer__row ">
            <?php

            for($i = 0;$i<count(FOOTER_HEAD);$i++)
            {
                $k=$i * 5;
                echo '
                <div class="col-md-3 col-sm-6 footer__border__bottom">
                 <div class="footer__subtitle">'. FOOTER_HEAD[$i]['title'] .' <span class="footer__circle__down icon-circle-down"></span> </div>
                 <ul class="footer__item">
                ';
                $l = count(FOOTER) % count(FOOTER_HEAD);
                if ($l != 0)
                {

                }else{
                    for($j = 0;$j<(count(FOOTER) / count(FOOTER_HEAD));$j++)
                    {
                        echo "<li class=\"footer__item__descr\"><a href=\"" . FOOTER[$k + $j]['link'] . "\">" . FOOTER[$k + $j]['title'] . "</a></li>";
                    }
                }


                echo '  </ul>
             </div>';
            }
            ?>
            <div class="col-md-3 col-sm-7 ">
                <div class="footer__wrapper">
                    <img src="<?php echo URLROOT;?>/img/logo.png" alt="logo" class="footer__logo">
                    <div class="footer__slogan"><i>Низкие цены, <br> высокий сервис!</i></div>
                    <div class="footer__social">
                    <div class="footer__social">
                        <?php
                        for($i=0;$i<count(MAIN_LINKS);$i++)
                            {
                            echo "<a href=\"" . MAIN_LINKS[$i]['link'] . "\">
                                    <div class=\"footer__social__round\">
                                        <div class=\"" . MAIN_LINKS[$i]['icon']. "\">
                                        </div>
                                    </div>
                                 </a>";
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>


<div class="overlay">
    <div class="overlay__bg">
    </div>
    <div class="modal" id="consultation">
        <div class="modal__close">&times;</div>
        <div class="modal__subtitle">Просто заполните форму заявки</div>
        <div class="modal__descr">и мы перезвоним вам в течении 10 минут</div>
        <form class="feed-form feed-form_mt25" action="#">
            <input name="name" required placeholder="Ваше имя" type="text">
            <input name="phone" required placeholder="Ваш телефон">
            <input name="email"  placeholder="Сообщение" >

            <button type="submit" class="button button_submit">заказать консультацию</button>
        </form>
    </div>
    <div class="modal" id="order">
        <div class="modal__close">&times;</div>
        <div class="modal__subtitle">Ваш заказ:</div>
        <div class="modal__descr">Наушники</div>
        <form id="consultation-form" class="feed-form feed-form_mt25" action="#">
            <input name="name" required placeholder="Ваше имя" type="text">
            <input name="phone" required placeholder="Ваш телефон">
            <input name="email"  placeholder="Сообщение">

            <button type="submit" class="button button_submit">купить</button>
        </form>
    </div>
    <div class="modal modal_mini" id="thanks">
        <div class="modal__close">&times;</div>
        <div class="modal__subtitle">Спасибо за вашу заявку!</div>
        <div class="modal__descr">Наш менеджер свяжется с вами в ближайшее время!</div>
    </div>
    <div class="overlay__question">
        <div class="overlay__bg">
        </div>
        <div class="overlay__question__box">
            <div class="modal__close">&times;</div>
            <div class="question__subtitle">pogran</div>
            <div class="modal__close">&times;</div>
            <div class="goods__modal">...</div>
            <button class="button modal__btn">Купить</button>

        </div>
    </div>
</div>

<script src="<?php echo URLROOT; ?>/js/jquery-3.5.1.min.js"></script>
<script src="<?php echo URLROOT; ?>/js/slick/slick.min.js" type="text/javascript"></script>
<script src="<?php echo URLROOT; ?>/js/jquery.validate.min.js"></script>
<script src="<?php echo URLROOT; ?>/js/jquery.maskedinput.min.js"></script>
<?php
 if (substr($_SERVER['REQUEST_URI'],1) == 'shops')
{
    echo "
    <script src=\"". URLROOT ."/js/angry-cart.min.js\"></script>
    <script src=\"". URLROOT ."/js/firebase.js\"></script>
    <script src=\"". URLROOT ."/js/angry-inside.js\"></script>

    ";
};
;?>
<script src="<?php echo URLROOT; ?>/js/script.js"></script>
</body>
</html>