<section class="slider__shop">
    <div class="slider__shop__item">

        <?php

        for ($i = 0;$i < count($data['results_slider']);$i++)
            {
                echo "
                 <div class=\"slider__shop__wrapper\">
                    <img class='slider__shop__img' src=\"". URLROOT."/img/shop/slider/". $data['results_slider'][$i]->img ."\" >
                    <div class=\"slider__shop__descr\"><a href=\"#baggage\">". $data['results_slider'][$i]->descr ." <span class=\"slider__shop__descr__price\">". $data['results_slider'][$i]->price ."</span></a></div>
                </div>
                ";
            }
        ?>
        <div class="slider__wrapper slider__wrapper_4">
            <img class="slider__img slider__img__insta" src="<?=URLROOT;?>/img/offer_instagram.png" alt="instagram">
            <div class="slider__descr slider__descr__insta"><a href="<?=$data['link'][1]['link'];?>">Подпишитесь на нас в инстаграм чтобы не упустить специальные предложения</a>
            </div>
            <div class="about__descr__wrapper slider__social__wrapper">
                <?php
                for($i=0;$i<count($data['link']);$i++)
                {
                    echo "<div class=\"about__descr__social__item slider__social__item\">
                            <a href=\"" . $data['link'][$i]['link'] ."\"  class=\"about__descr__social__round\">
                                <span class=\"" . $data['link'][$i]['icon'] . "\"></span></a>
                             </div>";
                }
                ?>
        </div>
    </div>
</section>
