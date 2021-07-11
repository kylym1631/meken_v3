<section class="popular">
    <div class="container">
        <div class="currency">
            <div class="currency__close">Закрыть</div>
            <div id='gcw_mainFPxGFM7pa' class='gcw_mainFPxGFM7pa'></div>
            <script>function reloadFPxGFM7pa(){ var sc = document.getElementById('scFPxGFM7pa');if (sc) sc.parentNode.removeChild(sc);sc = document.createElement('script');sc.type = 'text/javascript';sc.charset = 'UTF-8';sc.async = true;sc.id='scFPxGFM7pa';sc.src = 'https://freecurrencyrates.com/ru/widget-horizontal?iso=USD-RUB-KGS-EUR&df=2&p=FPxGFM7pa&v=fits&source=cbr&width=300&width_title=225&firstrowvalue=1&thm=A6C9E2,FCFDFD,4297D7,5C9CCC,FFFFFF,C5DBEC,FCFDFD,2E6E9E,000000&title=%D0%9A%D0%BE%D0%BD%D0%B2%D0%B5%D1%80%D1%82%D0%B5%D1%80%20%D0%B2%D0%B0%D0%BB%D1%8E%D1%82&tzo=-180';var div = document.getElementById('gcw_mainFPxGFM7pa');div.parentNode.insertBefore(sc, div);} reloadFPxGFM7pa(); </script>
        </div>
        <div class="currency_770">
            <div class="currency_770__close">Закрыть</div>
            <div id='gcw_mainFPpjZ7QyB' class='gcw_mainFPpjZ7QyB'></div>
            <script>function reloadFPpjZ7QyB(){ var sc = document.getElementById('scFPpjZ7QyB');if (sc) sc.parentNode.removeChild(sc);sc = document.createElement('script');sc.type = 'text/javascript';sc.charset = 'UTF-8';sc.async = true;sc.id='scFPpjZ7QyB';sc.src = 'https://freecurrencyrates.com/ru/widget-horizontal?iso=USD-RUB-KGS-EUR&df=2&p=FPpjZ7QyB&v=fits&source=fcr&width=760&width_title=200&firstrowvalue=1&thm=A6C9E2,FCFDFD,4297D7,5C9CCC,FFFFFF,C5DBEC,FCFDFD,2E6E9E,000000&title=%D0%9A%D0%BE%D0%BD%D0%B2%D0%B5%D1%80%D1%82%D0%B5%D1%80%20%D0%B2%D0%B0%D0%BB%D1%8E%D1%82&tzo=-180';var div = document.getElementById('gcw_mainFPpjZ7QyB');div.parentNode.insertBefore(sc, div);} reloadFPpjZ7QyB(); </script>
        </div>

        <div class="popular__icon">
            <a href="<?=URLROOT;?>/blogs#sales">
                <div class="popular__icon__item">
                    <img src="<?=URLROOT;?>/img/icons/sale.png" alt="sale" class="popular__icon__item__img">
                    <div class="popular__icon__item__descr">акции</div>
                </div>
            </a>
            <a href="<?=URLROOT;?>/blogs">
                <div class="popular__icon__item">
                    <img src="<?=URLROOT;?>/img/icons/news.png" alt="news" class="popular__icon__item__img">
                    <div class="popular__icon__item__descr">новости</div>
                </div>
            </a>
            <a href="<?=URLROOT;?>/contacts#address">
                <div class="popular__icon__item">
                    <img src="<?=URLROOT;?>/img/icons/location.png" alt="location" class="popular__icon__item__img">
                    <div class="popular__icon__item__descr">офисы</div>
                </div>
            </a>
        </div>

        <h2 class="title">Популярные направления</h2>
        <div class="row">
            <?php
            for ($i = 0;$i < count($data['popular']);$i++)
            {
                echo "<div class=\"col-md-6 col-lg-4\">
                <div style='background: url(". URLROOT."/img/". $data['popular'][$i]->img_path .") center center/cover no-repeat' class=\"popular__wrapper \" onclick=\"window.location='//tp.media/r?trace_id=Zz89897ec7fbdf4c9ba398bc46f65149&p=4044&marker=292335.Zz89897ec7fbdf4c9ba398bc46f65149.$1489.$11&u=%2F%2Ftravel.mekenavia.ru%2Fflights%2F" . $data['popular'][$i]->city_from . $data['day15'] . $data['popular'][$i]->city_to . $data['day25']. "1%3Fmarker%3D292335.Zz89897ec7fbdf4c9ba398bc46f65149.%241489.%2411%26locale%3Dru%26currency%3Drub'\">
                    <div class=\"popular__img__transparent\">
                        <div class=\"popular__img__transparent__descr\">" . $data['popular'][$i]->title ."</div>
                    </div>
                </div>
        </div>";
            }
            ;?>

        </div>
    </div>

</section>