<div class="container-fluid">
    <a href="TheTrainer" class="probootstrap-logo">The Trainer<span>.</span></a>

    <a href="#" class="probootstrap-burger-menu visible-xs" ><i>Menu</i></a>
    <div class="mobile-menu-overlay"></div>

    <nav role="navigation" class="probootstrap-nav hidden-xs">
        <ul class="probootstrap-main-nav">
            <?php foreach($menu as $M){ ?>
                <li
                    <?php if (isset($active)) {
                        if ($active == $M['NOM']) { ?> class="active" <?php };
                    }else { if (isset($M['CLASS'])) { ?> class="<?php echo $M['CLASS']; ?>" <?php } ; } ?>
                >
                    <a href="<?=base_url($M['LIENS']);  ?>" ><?php echo $M['NOM']; ?></a>
                </li>

            <?php } ?>

        </ul>
        <ul class="probootstrap-header-social hidden-xs">
            <li><a href="#"><i class="icon-twitter"></i></a></li>
            <li><a href="#"><i class="icon-facebook2"></i></a></li>
            <li><a href="#"><i class="icon-instagram2"></i></a></li>
        </ul>
    </nav>
</div>