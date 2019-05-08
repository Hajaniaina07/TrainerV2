
  <!-- START: section -->
  <section class="probootstrap-intro probootstrap-intro-inner" style="background-image: url(<?=base_url("assets/trainer/")?>img/hero_bg_1_b.jpg);" data-stellar-background-ratio="0.5">
    <div class="container">
      <div class="row">
        <div class="col-md-7 probootstrap-intro-text">
          <h1 class="probootstrap-animate" data-animate-effect="fadeIn"><?php echo $titre; ?></h1>
          <div class="probootstrap-subtitle probootstrap-animate" data-animate-effect="fadeIn">
          </div>
        </div>
      </div>
    </div>
    <span class="probootstrap-animate"><a class="probootstrap-scroll-down js-next" href="#next-section">Scroll down <i class="icon-chevron-down"></i></a></span>
  </section>
  <!-- END: section -->
  <main>
    <section id="next-section" class="probootstrap-section">
      <div class="container">
        <div class="row">
            <?php foreach($autres as $gallery){ ?>
                <div class="col-md-4 col-sm-6">
                    <figure><a href="<?=base_url("assets/")?>img/<?php echo $gallery['DOSSIER']; ?>/<?php echo $gallery['NOM']; ?>" class="image-popup"><img src="<?=base_url("assets/")?>img/<?php echo $gallery['DOSSIER']; ?>/<?php echo $gallery['NOM']; ?>" alt="<?php echo $gallery['ALT']; ?>" class="img-responsive img-rounded"></a></figure>
                </div>
            <?php } ?>
        </div>
      </div>
    </section>
    
  </main>