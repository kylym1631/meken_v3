<?php require APPROOT . '/views/inc/header.php'; ?>
<?php include_once APPROOT . '/views/pages/_s_slider_i.php'  ;?>
    <section class="ticket">
        <script charset="utf-8" src="<?php echo $data['white_label']->white_label ;?>" async></script>
    </section>
<?php include_once APPROOT . '/views/pages/_popular.php'  ;?>
<?php include_once APPROOT . '/views/pages/_reason.php'  ;?>
    <section class="us">
        <div class="us__info">
            <div class="us__address"><?php echo $data['city'][0]->address;?></div>
            <a href="tel:+79268453222" class="footer__phone"><?php echo $data['city'][0]->number_1;?></a>
            <a href="tel:+79067453222" class="footer__phone"><?php echo $data['city'][0]->number_2;?></a>
        </div>
        <iframe src="<?php echo $data['city'][0]->link;?>" width="100%" height="100%" frameborder="0"></iframe>
    </section>


<?php require APPROOT . '/views/inc/footer.php'; ?>