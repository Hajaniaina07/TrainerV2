<div class="probootstrap-backtotop"><a href="#" class="js-backtotop"><i class="icon-chevron-thin-up"></i></a></div>
<div class="container">
    <div class="row mb50">
        <div class="col-md-3">
            <div class="probootstrap-footer-widget">
                <h4><?php echo $apropos['NOM']; ?></h4>
                <p><?php echo $apropos['DESCRIPTION']; ?></p>
            </div>
        </div>
        <div class="col-md-3 col-md-push-1">
            <div class="probootstrap-footer-widget">
                <h4>OUVERTURES</h4>
                <ul class="probootstrap-footer-link">
                    <?php foreach($ouvertures as $ouverture){ ?>
                        <li><?php echo $ouverture['JOUR']; ?> : <?php echo $ouverture['HEURE']; ?></li>
                    <?php } ?>
                </ul>
            </div>
        </div>
        <div class="col-md-5 col-md-push-1">
            <div class="probootstrap-footer-widget">
                <h4>Contact Info</h4>
                <ul class="probootstrap-contact-info">
                    <?php foreach($contacts as $contact){ ?>
                        <li><i class="<?php echo $contact['CLASS']; ?>"></i> <span><?php echo $contact['TEXTE']; ?></span></li>
                    <?php } ?>
                </ul>
            </div>
        </div>

    </div>
    <div class="row">
        <div class="col-md-12 text-center border-top">
            <p class="mb0">&copy; RAHARISON Hajaniaina 10B26</p>
            <a id="login" href="<?=base_url('login');  ?>">login</a>
        </div>
    </div>
</div>