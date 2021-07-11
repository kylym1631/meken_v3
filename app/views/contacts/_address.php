<section id="address" class="address">
    <div class="container">
        <div class="address__info">
            <div class="title title__address">Контакты и адреса</div>
            <div class="address__city__wrapper">
                <?php
                for ($i=0;$i<count($data['contacts']);$i++)
                {
                    echo "<div class=\"address__city__name";
                    if ($i ==0){
                        echo " address__city__name_active\">";
                    }
                    echo "
                    <span class=\"icon-compass2\"></span>
                    ". $data['contacts'][$i]->city_russian ."
                </div>";

                }
                ?>
            </div>
            <div class="address__city__bg">
            <?php
            for($i = 0;$i< count($data['contacts']);$i++)
            {
                echo "
                <div class=\"address__city__content__wrapper faded\">
                    <div class=\"row\">
                ";

                if ($data['contacts'][$i]->active != 1)
                {
                    echo " 
                                                <h1>Точка временно закрыто</h1>
                                 ";

                }else
                {
                    echo "
                
                        <div class=\"col-md-4\">
                            <div class=\"address__city__content__descr\">
                                <div class=\"address__city__details\">

                                   ";
                    for ($j = 0;$j<count($data['staff']);$j++)
                    {
                        echo " <div class=\"address__city__details__person\">
                                        <span class=\"icon-profile address__city__details__person__icon\"></span>
                ". $data['staff'][$j]->name ." :
                                    </div>
                                    <div class=\"address__city__details__tel\">
                                        <span class=\"icon-phone1\"></span>
                                        <a class=\"address__city__details__link\" href=\"#\">". $data['staff'][$j]->number_1 ."</a>
                                     <br>
                                        <span class=\"icon-phone1\"></span>
                                        <a class=\"address__city__details__link \" href=\"#\">". $data['staff'][$j]->number_2 ."</a>
                                    </div>
                                    <br>";
                    }
                    echo "
                               </div>
                        <div class=\"address__graphic\">". $data['contacts'][$i]->work_hours ."</div>
                   </div>
                  </div>
                        <div class=\"col-md-8\">
                            <div class=\"address__city__content__map\">
                                <div class=\"address__city__location\">
                                    <span class=\"icon-location1 \"></span>
                ". $data['contacts'][$i]->address ."
                                    <div class=\"address__city__location__map\">
                                        <iframe src=\"". $data['contacts'][$i]->link ."\" width=\"100%\" height=\"350px\" frameborder=\"0\"></iframe>
                                    </div>
                                </div>
                              </div>
                        </div>

                    ";
                }
                echo "   </div>
                 </div>";
            }

            ;?>
            </div>
        </div>
    </div>
</section>