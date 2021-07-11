<section   class="slider">
    <div class="slider__item">
        <?php
        for($i=0;$i<count($data['slider']);$i++)
        {
            echo "<div class=\"slider__wrapper slider__wrapper_" . ($i+1) . "\">
                        <img src=\"" . URLROOT ."/img/" . $data['slider'][$i]->img ."\">
                        <div class=\"slider__descr\"><a href=\"" . $data['slider'][$i]->link ."\">" . $data['slider'][$i]->descr ."</a></div>
                 </div>";
        }

        for($i=0;$i<count($data['slider_complex']);$i++)
        {
            echo "<div class=\"slider__wrapper slider__wrapper_sale\">
                        <img class='slider__img slider__img__sale' src=\"" . URLROOT ."/img/" . $data['slider_complex'][$i]->img ."\">
                        <div class=\"slider__descr\"><a href=\"" . $data['slider_complex'][$i]->link ."\">" . $data['slider_complex'][$i]->descr ."</a></div>
                 </div>";
        }
        ?>

        <div class="slider__wrapper slider__wrapper_4">
            <img class="slider__img slider__img__insta" src="<?=URLROOT;?>/img/offer_instagram.png" alt="instagram">
            <div class="slider__descr slider__descr__insta"><a href="<?=$data['link'][1]['link'];?>">Подпишитесь на нас в инстаграм чтобы не упустить специальные предложения</a></div>
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
    </div>
    <span class="icon-chevron-left slick__prev slider__arrow"></span>
    <span class="icon-chevron-right slick__next slider__arrow"></span>
</section>
