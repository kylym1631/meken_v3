<section id="service" class="service">
    <div class="container">
        <div class="title title__shop">Услуги</div>
        <?php

//        for ($i=0;$i < count($data['services']);$i++)
//        {
//            echo "
//            <div id=\"". $data['services'][$i]->id_html ."\" class=\"row service__wrapper\">
//
//            ";
//            if ($data['services'][$i]->left_img)
//            {
//                echo "<div class=\"col-md-6\">
//                <img class=\"service__img\" src=\"img/service/". $data['services'][$i]->img ."\">
//                 </div>";
//
//
//                echo "<div class=\"col-md-6\">
//                    <div  class=\"service__subtitle \">". $data['services'][$i]->title ."</div>
//                    <div class=\"service__descr\">". $data['services'][$i]->descr ."<br><span>". $data['services'][$i]->price ."</span></div>
//                    <button class=\"button service__btn\">Добавить услугу</button>
//                 </div>
//            ";
//            }else
//            {
//                echo "<div class=\"col-md-6\">
//                    <div  class=\"service__subtitle \">". $data['services'][$i]->title ."</div>
//                    <div class=\"service__descr\">". $data['services'][$i]->descr ."<br><span>". $data['services'][$i]->price ."</span></div>
//                    <button class=\"button service__btn\">Добавить услугу</button>
//                 </div>
//            ";
//
//                echo "<div class=\"col-md-6\">
//                <img class=\"service__img\" src=\"img/service/". $data['services'][$i]->img ."\">
//                 </div>";
//            }
//
//
//            echo "
//            </div>
//             <hr class=\"service__hr\">
//        ";
        $imgLeft = 2;
        for ($i=0;$i < count($data['services']);$i++)
        {
            echo "
            <div id=\"". $data['services'][$i]->id_html ."\" class=\"row service__wrapper\">
            
            ";
            $imgLeft++;
            if ($imgLeft % 2)
            {
                echo "<div class=\"col-md-6\">
                <img class=\"service__img\" src=\"img/service/". $data['services'][$i]->img ."\">
                 </div>";


                echo "<div class=\"col-md-6\">
                    <div  class=\"service__subtitle \">". $data['services'][$i]->title ."</div>
                    <div class=\"service__descr\">". $data['services'][$i]->descr ."<br><span>". $data['services'][$i]->price ."</span></div>
                    <button class=\"button service__btn\">Добавить услугу</button>
                 </div>
            ";
            }else
            {
                echo "<div class=\"col-md-6\">
                    <div  class=\"service__subtitle \">". $data['services'][$i]->title ."</div>
                    <div class=\"service__descr\">". $data['services'][$i]->descr ."<br><span>". $data['services'][$i]->price ."</span></div>
                    <button class=\"button service__btn\">Добавить услугу</button>
                 </div>
            ";

            echo "<div class=\"col-md-6\">
            <img class=\"service__img\" src=\"img/service/". $data['services'][$i]->img ."\">
             </div>";
            }


            echo "
            </div>
             <hr class=\"service__hr\">
        ";
        }
        ;?>
</section>