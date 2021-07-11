<?php require APPROOT . '/views/inc/header.php'; ?>
<?php
echo '<section class="help__show">
<div class="container">
<div class="help__faq">
     <h2 class="help__faq__subtitle">
                    '. $data['section']->section_russian .'
    </h2>';
foreach ($data['helps'] as $help)
    {
    if ($help->section == $data['section']->section)
    {
        echo '<h3 class="help__faq__questions">'. $help->question .'</h3>
                <h3 class="help__faq__answers">'. $help->answer .'</h3>';
    }
    }
echo '
</div>
</div>
</section>';
; ?>
<?php require APPROOT . '/views/inc/footer.php';?>
