<section id="goods" class="goods">
    <div class="container">
        <h2 class="title title__shop">Товары</h2>

        <div class="row">
                <?php
                for ($i=0;$i<count($data['goods']);$i++)
                {
                    echo "
        <div class=\"col-lg-4 col-md-6\">
            <div class=\"goods__wrapper\">
                ";
                if ($data['goods'][$i]->active == 0){
                    echo "<div class=\"goods__for__order\">На заказ</div>";
                }

                echo "<div class=\"goods__slider\">";
                    $goodsImg = checkerImg('img/shop/'.$data['goods'][$i]->folder_name);
                    for ($j = 0;$j<count($goodsImg);$j++)
                    {
                        echo "<div class=\"goods__slider__item\">
                                <img src=\"img/shop/". $data['goods'][$i]->folder_name . "/" . $goodsImg[$j]. "\" class=\"goods__img\">
                            </div>";
                    }

                  echo "</div>
                        <div class=\"goods__descr\">". $data['goods'][$i]->title ."</div>
                            <div class=\"goods__price\">";
                            if ($data['goods'][$i]->old_price){
                               echo "<span>". $data['goods'][$i]->old_price ."₽</span>";
                            }
                             echo $data['goods'][$i]->price ."₽</div>
                            <div class=\"goods__btn__wrapper\">
                                <button class=\" button button__goods__mini\">
                                    <span class=\"icon-info\"></span>
                                </button>
                                <button class=\"button goods__btn\">Купить</button>
                                <button class=\" button button__mini button__mini__basket\" onclick=\"cart.addToCart("; echo ($i+1) .", {title: '". $data['goods'][$i]->title ."', price: ".$data['goods'][$i]->price .", image: 'img/shop/". $data['goods'][$i]->folder_name ."'})\">
                                    <span class=\"icon-cart\"></span>
                                </button>
                            </div>
                            <div class=\"goods__text\">
                                "; echo $data['goods'][$i]->descr."
                            </div>
                        </div>
                 </div>
                ";
                                ;
                }

                ;?>
        </div>
    </div>
</section>
<div class="goods__wrapper goods__wrapper__basket">
    Корзина на сумму: <br><span id="totalPrice">0</span> руб <br>Тип товаров: (<span id="cartCount">0</span>) <br>
    <div id="cartPreview" class="pb-5"></div>
    <button class="button button__goods__basket__clear" onclick="cart.clearCart();">Очистить</button>
    <button class="button button__goods__basket" >Купить</button>
    <div class="goods__wrapper__basket_back">Скрыть</div>
</div>
<div class="goods__basket__round"><div class="icon-cart"><span class="goods__basket__quantity"></span></div></div>
