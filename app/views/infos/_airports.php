<?php
echo '<section class="airports "id="airports">
    <div class="container">
        <h2 class="title title__info__news">Аэропорты</h2>';
for ($i=0;$i<count($data['number_airports']);$i++)
{
    echo '<div class="airports__wrapper">
            <div class="airports__subtitle__wrapper">
                <div class="airports__subtitle">'. $data['number_airports'][$i]->title_russian .'<span class="icon-circle-down airports__arrow__down"></span>
                </div>
            </div>
            <div class="airports__item__wrapper">
                <div class="row ">
                    <div class="col-md-4">
                        <div class="airports__item__subtitle">Как добраться?</div>
                        <div class="airports__part">';
                $data['reach'] = typeMatcher($data['airports'],$data['number_airports'][$i]->title_russian,'reach','title_russian');
                airportsChecker($data['reach']);
    echo '
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="airports__item__subtitle">Онлайн табло</div>
                        <div class="airports__part">';
    $data['tablo'] = typeMatcher($data['airports'],$data['number_airports'][$i]->title_russian,'tablo','title_russian');

    airportsChecker($data['tablo']);
                        echo '</div>
                    </div>
                    <div class="col-md-4">
                        <div class="airports__item__subtitle">Контроль</div>
                        <div class="airports__part">';
    $data['control'] = typeMatcher($data['airports'],$data['number_airports'][$i]->title_russian,'control','title_russian');

    airportsChecker($data['control']);
                    echo '</div>
                </div>
            </div>
        </div>

        </div>';
}

        
    echo '</div>
</section>';
;?>