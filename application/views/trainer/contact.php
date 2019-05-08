
  <!-- START: section -->
  <section class="probootstrap-intro probootstrap-intro-inner" style="background-image: url(<?=base_url("assets/trainer/")?>img//hero_bg_1_b.jpg);" data-stellar-background-ratio="0.5">
    <div class="container">
      <div class="row">
        <div class="col-md-7 probootstrap-intro-text">
          <h1 class="probootstrap-animate" data-animate-effect="fadeIn"> <?php echo $titre; ?> </h1>
        </div>
      </div>
    </div>
    <span class="probootstrap-animate"><a class="probootstrap-scroll-down js-next" href="#next-section">Scroll down <i class="icon-chevron-down"></i></a></span>
  </section>
  <!-- END: section -->
  <main>
    <section id="next-section" class="probootstrap-section">
      <div class="container">
        <div class="col-md-6">
            <form action="Send" method="post" class="probootstrap-form">
              <div class="row">
                  <?php if (isset($message)) { ?> <h6 style="color: #990000">erreur : <?php echo $message?></h6> <?php } ?>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="fname">First Name</label>
                    <input type="text" class="form-control" id="fname" name="nom">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="lname">Last Name</label>
                    <input type="text" class="form-control" id="lname" name="prenom">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email">
              </div>
              <div class="form-group">
                <label for="subject">Subject</label>
                <input type="text" class="form-control" id="subject" name="objet">
              </div>
              <div class="form-group">
                <label for="message">Message</label>
                <textarea cols="30" rows="10" class="form-control" id="message" name="message"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" class="btn btn-primary" id="submit" name="submit" value="Envoyer Message">
              </div>
            </form>
          </div>
          <div class="col-md-5 col-md-push-1">
            <h3 class="mt0">Entrer en contact</h3>
            <ul class="probootstrap-contact-info">
                <?php foreach($contacts as $contact){ ?>
                    <li><i class="<?php echo $contact['CLASS']; ?>"></i> <span><?php echo $contact['TEXTE']; ?></span></li>
                <?php } ?>
            </ul>

          </div>
      </div>
    </section>
    
  </main>