<section id="avia" class="avia ">
    <div class="container">
        <div class="title title__info__news">Авиакомпании</div>

        <?php
        for ($i=0;$i<count($data['number_avia']);$i++)
        {
            echo "
            <div class=\"avia__companies\">
                <div class=\"avia__companies__subtitle__wrapper\">
                    <div class=\"avia__companies__subtitle \">". $data['number_avia'][$i]->title ."
                        <span class=\"icon-circle-down arrow__down\"></span></div>
                </div>
                <div class=\"avia__companies__wrapper\">
                    <div class=\"row \">
                        <div class=\"col-md-4\">
                            <div class=\"avia__subtitle\">Тариф и багаж</div>
                            
                            ";
            $data['tariff'] = typeMatcher($data['avia'],$data['number_avia'][$i]->title,'tariff','title');
            for ($j=0;$j<count($data['tariff']);$j++)
            {
                echo "<div class=\"avia__item__wrapper\">
                                <div class=\"avia__item avia__item__1\">
                                    <div class=\"avia__item__text avia__item__text__1\">". $data['tariff'][$j]->subtitle ."</div>
                                    <span class=\"icon-circle-down arrow__down\"></span>
                                </div>
                                <div class=\"avia__item__descr avia__item__descr__1\">
                                    ". $data['tariff'][$j]->descr ."
                                </div>
                            </div>";
            }


            echo "</div>
    
                        <div class=\"col-md-4\">
                            <div class=\"avia__subtitle\">Доп. услуги</div>
                            ";
            $data['services'] = typeMatcher($data['avia'],$data['number_avia'][$i]->title,'services','title');

            for ($j=0;$j<count($data['services']);$j++)
            {
                echo "<div class=\"avia__item__wrapper\">
                                    <div class=\"avia__item avia__item__2\"><div class=\"avia__item__text avia__item__text__2\">". $data['services'][$j]->subtitle ."</div><span class=\"icon-circle-down arrow__down\"></span></div>
                                    <div class=\"avia__item__descr avia__item__descr__2\">
                                        ". $data['services'][$j]->descr ."
        
                                    </div>
                                 </div>";
            }

            echo "</div>
    
                        <div class=\"col-md-4\">
                            <div class=\"avia__subtitle\">Тип самолёта</div>";
            $data['planes'] = typeMatcher($data['avia'],$data['number_avia'][$i]->title,'planes','title');
            for ($j=0;$j<count($data['planes']);$j++)
            {
                echo "<div class=\"avia__item__wrapper\">
                                    <div class=\"avia__item avia__item__3\"><div class=\"avia__item__text avia__item__text__3\">". $data['planes'][$j]->subtitle ."</div> <span class=\"icon-circle-down arrow__down\"></span></div>
                                    <div class=\"avia__item__descr avia__item__descr__3\">
                                        <img src=\"".URLROOT."/img/planes/". imgSwitchPlane($data['number_avia'][$i]->title) ."\">
                                        ". $data['planes'][$j]->descr ."
                                    </div>
                                 </div>";
            }

            echo "</div>
                    </div>
                </div>
            </div>
            ";
        }
        ;?>

    </div>
</section>