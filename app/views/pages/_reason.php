<section class="reason">
    <div class="container">
        <h2 class="title title__reason"> Почему более 35 000 клиентов выбирают нас?</h2>
        <div class="row">

            <?php
            for ($i = 0;$i<count($data['reasons']);$i++)
            {
                echo "<div class=\"col-md-4 col-sm-6\">
                <div class=\"reason__item\">
                    <div class=\"reason__item__round\">
                        <div class=\"". $data['reasons'][$i]->icon ."\"></div>
                    </div>
                    <div class=\"reason__item__descr\">". $data['reasons'][$i]->title ."</div>
                </div>
            </div>";
            }
            ;?>
        </div>
    </div>

</section>