<?php require APPROOT . '/views/inc/header.php'; ?>
<?php
echo '
<section id="faq" class="help__item">
    <div class="container">
        <div class="help__faq">

            <h2 class="help__faq__subtitle">
                Часто задаваемые вопросы
            </h2>
            <span class="icon-bubbles4 icon_chat"></span>';

            for ($i=0;$i<count($data['faq']);$i++)
            {
                echo '<h3 class="help__faq__questions">'. $data['faq'][$i]->question .'</h3>
                <h3 class="help__faq__answers">'. $data['faq'][$i]->answer .'</h3>';
            }

        echo '</div>
        <div class="row">';

                for ($i=0;$i<count($data['number_helps_types']);$i++)
                {
                    echo '
                    <div class="col-md-6 col-lg-4 media__center">
                    <h2 class="help__subtitle">
                        <span class="'. $data['number_helps_types'][$i]->icon .'"></span>
                        '. $data['number_helps_types'][$i]->type_russian .'
                    </h2>
                    <ul class="help__descr">';
                    foreach ($data['number_helps_sections'] as $section)
                    {
                        if ($section->type_russian == $data['number_helps_types'][$i]->type_russian)
                        {
                            echo '<li  class="help__text"><a href="'.URLROOT.'/helps/show/'.$section->section .'">'. $section->section_russian .'</a></li>';
                        }
                        
                    }

                    echo '<ul>
                </div>
                    ';
                }

            echo '</div>
        ';

        echo '
    </div>
</section>
';
;?>
<?php require APPROOT . '/views/inc/footer.php';?>
