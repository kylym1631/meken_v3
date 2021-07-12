<?php require APPROOT . '/views/inc/header.php'; ?>
    <section class="about">
        <div class="container">
            <h1 class="about__title"><?= SITENAME;?></h1>
            <div class="row">
                <div class="col-md-8 ">
                    <h2 class="about__subtitle">Надёжный и удобный сервис для <br> покупки самых дешёвых авиабилетов</h2>
                </div>
                <div class="col-md-4 about__paper__airline">
                    <img src="<?=URLROOT ;?>/img/icons/paper_airline.png" alt="paper-airline" class="about__airplane">
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <div class="about__descr">
                        <span class="about__descr__us">О нас</span> <br>
                        Мекен авиа помогает согражданам с мая  2018 года.
                        Мы предоставляем всю информацию по багажу, возврату, обменам, оповещаем о важных событиях и не только. И возмещаем ваши потери от человеческих факторов  моментально. Поэтому более 35 000 сограждане выбрали нас. На данный момент у нас есть <a href="#address" class="about__descr__link">офисы <?php
                            for ($i=0;$i<count($data['contacts']);$i++)
                            {
                                echo $data['contacts'][$i]->city_russian ;
                                if($i == (count($data['contacts']))-2)
                                {
                                    echo " и ";
                                }else{
                                    if ($i == (count($data['contacts']))-1)
                                    {
                                        echo " ";
                                    }else
                                    {
                                        echo ", ";
                                    }
                                }
                            }
                            ;?> </a>  Мы работаем без выходных для вашего удобства. Часто проводим персональные скидки, акции и  делимся полезной информацией, поэтому подпишитесь на нас в соц.сетях.  
                    </div>

                </div>
                <div class="col-md-4">
                    <div class="about__quote"><i>"Есть в этом что-то волшебное: уезжаешь одним человеком, а возвращаешься совершенно другим"</i></div>
                </div>
            </div>
            <div class="about__descr__wrapper">
                <?php
                for ($i = 0;$i < count($data['link']);$i++){
                    echo "<a href=\"" . $data['link'][$i]['link'] . "\" class=\"about__descr__social__item\">
                    <div class=\"about__descr__social__round\">
                        <span class=\"". $data['link'][$i]['icon'] ."\"></span></div>
                    <div class=\"about__descr__social__descr\">". ucwords($data['link'][$i]['title']) ."</div>
                </a>";
                }
                ;?>
            </div>
        </div>

    </section>
<?php require APPROOT . '/views/contacts/_address.php'; ?>
<?php require APPROOT . '/views/contacts/_reviews.php'; ?>
<?php require APPROOT . '/views/inc/footer.php'; ?>