<?php
echo '<section id="embassies" class="embassies">
    <div class="container">
        <div class="title title__info__news">Посольства</div>';
for ($i=0;$i<count($data['number_embassies']);$i++)
{
    echo '<div class="embassies__wrapper">
            <div class="embassies__subtitle__wrapper">
                <div class="embassies__subtitle">
                    '. $data['number_embassies'][$i]->title_russian .'
                    <span class="icon-circle-down embassies__arrow__down"></span>
                </div>
            </div>
            <div class="embassies__item__wrapper">
                <div class="row">
                    <div class="col-md-4">
                        <div class="embassies__item__subtitle">Контакты</div>
                        <div class="embassies__part">';
    $data['contacts'] = typeMatcher($data['embassies'],$data['number_embassies'][$i]->title_russian,'contacts','title_russian');
        embassiesChecker($data['contacts']);

    echo ' 
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="embassies__item__subtitle">Адрес</div>
                        <div class="embassies__part">';
    $data['address'] = typeMatcher($data['embassies'],$data['number_embassies'][$i]->title_russian,'address','title_russian');
    embassiesChecker($data['address']);
                        echo '</div>

                    </div>
                    <div class="col-md-4">
                        <div class="embassies__item__subtitle">Гравик Работы</div>
                        <div class="embassies__part">';
                        $data['work_hours'] = typeMatcher($data['embassies'],$data['number_embassies'][$i]->title_russian,'work_hours','title_russian');
                        embassiesChecker($data['work_hours']);
                        echo '</div>
                    </div>
                </div>
            </div>
         </div>
';

}
echo '     </div>
    </section>';

