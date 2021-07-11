<section id="reviews" class="reviews">
    <div class="container">
        <div class="title title__reviews">Отзывы</div>
        <div class="reviews__slider reviews__slider__img__wrapper">
            <?php
            for ($i = 0;$i < count($data['review_img']);$i++)
            {
                echo "
                <div>
                    <img src=\"". URLROOT ."/img/reviews/". $data['review_img'][$i] ."\" class=\"reviews__slider__img\">
                 </div>
                ";

            }
            ;?>
        </div>

        <div class="reviews__slider reviews__slider__video__wrapper">

            <?php
            for ($i = 0;$i < count($data['review_video']);$i++)
            {
                echo "
                <div>
                    <video  class=\"reviews__slider__video\" width=\"auto\" height=\"240\" controls  controlslist=\"nofullscreen nodownload noremoteplayback\" disablepictureinpicture loop autoplay muted>
                        <source src=\"". URLROOT . "/videos/reviews/" . $data['review_video'][$i] ."\" type=\"video/mp4\">
                    </video>
                </div>
                ";

            }
            ;?>
        </div>
    </div>

</section>