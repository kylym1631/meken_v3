<?php require APPROOT . '/views/inc/header.php'; ?>
<section class="check__ticket">
    <div class="container">
        <div class="title title__check">Проверка заказа</div>
        <div class="row pt-20">
            <div class="col-md-6 ">
                <div class="check__rb__img">
                    <?php
                    for ($i=0;$i<count($data['avia_logo']);$i++)
                    {
                        $values = [];
                        $values = explode('_',$data['avia_logo'][$i]);
                        echo "
                        <label class=\"cur-p check__border\">
                            <input type=\"radio\" class=\"option-input radio\" name=\"check__avia\" value=\"". $values[1] ."\"";
                        if (substr($data['avia_logo'][$i],0,2) == '01')
                        {
                            echo "checked";
                        }
                        echo "/>
                            <img width=\"40%\" src=\"". URLROOT ."/img/aviacompanies/". $data['avia_logo'][$i] ."\">
                        </label >
                    ";
                    }

                    ;?>
                </div>

            </div>
            <div class="col-md-6 ">
                <div class="login-box">
                    <h2>Заполните данные</h2>
                    <form>
                        <div class="user-box">
                            <input id="input-code_or_number" type="text" name="" autocomplete="off" required>
                            <label id="code_or_number">Код брони или номер билета</label>
                        </div>
                        <div class="user-box user-box_last_name">
                            <input id="input-last_name" type="text" name="" autocomplete="off" required>
                            <label>Фамилья</label>
                        </div>
                        <a id="check__here" href="#quick__check">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            Проверить здесь
                        </a>
                        <a id="check__on__site" href="#">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            Проверить на сайте авиакомпании
                        </a>
                    </form>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="quick__look" id="quick__check">
                     <div class="title title__check">Ваш заказ</div>
                    <div class="check__wrapper">
                        <iframe  id="iframe"src="" frameborder="" width="100%" height="400px"></iframe>
                    </div>
                </div>
            </div>
            <div class="col-md-6"></div>
        </div>
    </div>
</section>
<?php require APPROOT . '/views/inc/footer.php';?>
