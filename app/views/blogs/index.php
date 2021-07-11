<?php require APPROOT . '/views/inc/header.php'; ?>

<?php
echo '
<section id="news" class="info__news">
        <div class="container">
            <div class="title title__info__news">Новости & Сюжеты</div>
            <div class="info__news__slider__wrapper">
                <div class="slider__news">';

                for ($i=0;$i<count($data['slider']);$i++)
                {
                    echo '
                        <div class="slider__news__item " onclick="window.location=\''. $data['slider'][$i]->link .'\'">
                            <div class="slider__news__dark">
                                <img src="'.URLROOT .'/img/blogs/'. $data['slider'][$i]->img .'">
                                <div class="slider__news__subtitle">
                                    '. $data['slider'][$i]->title .'
                                </div>
                            </div>
                        </div>';
                }



                echo '</div>
                <span class="icon-chevron-left  news__prev "></span>
                <span class="icon-chevron-right  news__next"></span>

            </div>
            <div class="row">
            ';
                for ($i=0;$i<count($data['slider']);$i++)
                {
                    echo '<div class="col-md-4">
                        <li class="link__item"><a href="'.$data['slider'][$i]->link.'">'.$data['slider'][$i]->title.'</a></li>
                    
                </div>';
                }

            echo '</div>
        </div>
    </section>
';
;?>
    <section id="blogs" class=" info__news">
        <div class="container">
            <div class="title title__info__news">Блог</div>
            <div class="row">
                <?php for($i=0;$i<count($data['blogs']);$i++)
                {
                echo'
                <div class="col-md-4">
                        <li class="link__item"><a href="'. $data['blogs'][$i]->link .'">'. $data['blogs'][$i]->title .'</a></li>
                </div>
                ';
                }
                    ;?>
            </div>
        </div>
    </section>
    <section id="sales" class=" info__news">
        <div class="container">
            <div class="title title__info__news">Акции и скидки</div>
            <div class="row">
                <?php for($i=0;$i<count($data['sales']);$i++)
                {
                    echo'
                <div class="col-md-4">
                        <li class="link__item"><a href="'. $data['sales'][$i]->link .'">'. $data['sales'][$i]->title .'</a></li>
                </div>
                ';
                }
                ;?>
            </div>
        </div>
    </section>

    <section id="bonus" class=" info__news">
        <div class="container">
            <div class="title title__info__news">Бонусы и сертификаты</div>
            <div class="row">
                <?php for($i=0;$i<count($data['bonus']);$i++)
                {
                    echo'
                <div class="col-md-4">
                        <li class="link__item"><a href="'. $data['bonus'][$i]->link .'">'. $data['bonus'][$i]->title .'</a></li>
                </div>
                ';
                }
                ;?>
            </div>
        </div>
    </section>

<?php require APPROOT . '/views/inc/footer.php'; ?>