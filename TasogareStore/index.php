<?php require_once("risorse/config.php"); ?>

<?php include(FRONT_END.DS."header.php"); ?>

<?php 

session_start();

?>

    <!-- Page Content -->
    <div class="container-fluid">
    

      <!-- SIDEBAR -->
      <div class="row">
        <div class="col-md-9 order-md-9">
        <?php include(FRONT_END.DS."carousel.php"); ?>
          
          </div>

          <div class="col-md-3 order-md-3">
            <?php include(FRONT_END.DS."sidebar.php"); ?>
          </div>
      </div>
          
      <div class="row">
        <div class="col-sm-4 box-1">
          <i class="material-icons sizing">local_shipping</i>
          <h4><b>Consegna Gratuita</b></h4>
          <p>in Italia, per ordini superiori ai €49!</p>
        </div>
    
        <div class="col-sm-4 box-2">
          <i class="material-icons sizing">payment</i>
          <h4><b>Pagamenti Sicuri</b></h4>
          <p>tramite PayPal per essere sempre tutelato in caso di prodotto difettato
          </p>
        </div>
    
        <div class="col-sm-4 box-3">
          <i class="material-icons sizing">category</i>
          <h4><b>Articoli selezionati</b></h4>
          <p>della tradizione Giapponese</p>
        </div>
      </div>

      <div class="row">
      <div class="col-lg-12">
      <h1 class="text-center my-5">Promo in Evidenza a 15,99!</h1>
      </div>
      </div>

      <div class="row" style="margin-bottom: 7rem;">
          <?php mostraProdotti(); ?>
            <!-- <div class="col-lg-4 col-md-6 box1">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" width="100" height="130" src="img/maglia1.jpg" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#">Prodotto 1</a>
                  </h4>
                  <h5>€24.99</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 box2">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" width="100" height="130" src="img/maglia2.jpg" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#">Prodotto 2</a>
                  </h4>
                  <h5>€24.99</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur! Lorem ipsum dolor sit amet.</p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 box3">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" width="100" height="130" src="img/maglia3.jpg" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#">Prodotto 3</a>
                  </h4>
                  <h5>€24.99</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 box4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" width="100" height="130" src="img/maglia4.jpg" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#">Prodotto 4</a>
                  </h4>
                  <h5>€24.99</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 box5">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" width="100" height="130" src="img/maglia5.jpg" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#">Prodotto 5</a>
                  </h4>
                  <h5>€24.99</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur! Lorem ipsum dolor sit amet.</p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 box6">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" width="100" height="130" src="img/maglia6.jpg" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#">Prodotto 6</a>
                  </h4>
                  <h5>€24.99</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div> -->

        <h1><?php // echo $_SESSION['prodotto_1']; ?></h1>
      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <div class="wrapper">
        <div class="row">
            <div class="col-md-8 offset-md-5">             
              <!-- Begin Mailchimp Signup Form -->
                <div id="mc_embed_signup" style="margin-top:20vh;position:relative;">
                <form action="https://gmail.us17.list-manage.com/subscribe/post?u=4b442614d35cfd718ab7dade3&amp;id=b4485b62c4" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                    <div id="mc_embed_signup_scroll">
                <div class="mc-field-group">
                  <input style="background-color:#DDD5D0;box-shadow: 0px 8px 18px #000;margin:0 auto;width:50%;margin-bottom:15px; border-radius:20px;" type="email" value="" name="EMAIL" class="required email form-control" id="mce-EMAIL">
                </div>
                  <div id="mce-responses" class="clear text-white">
                    <div class="response text-white" id="mce-error-response" style="display:none"></div>
                    <div class="response text-white" id="mce-success-response" style="display:none"></div>
                  </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_4b442614d35cfd718ab7dade3_b4485b62c4" tabindex="-1" value=""></div>
                    <div class="clear"><button class="btn btn-danger btn-block" style="box-shadow: 0px 8px 18px #000;font-size:22px;border-radius:20px;height:50px;width:50%;" type="submit" value="Voglio Iscrivermi!" name="subscribe" id="mc-embedded-subscribe" class="button"><strong>VOGLIO ISCRIVERMI!</strong></button></div>
                    </div>
                </form>
                </div>
                <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[5]='MMERGE5';ftypes[5]='phone';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
                <!--End mc_embed_signup-->

            </div>
        </div>
      </div>

      <div class="container-fluid">
      <div class="row">
        <div class="col-md-6">
        <img src="img/gatto.svg" width="400" alt="">
        </div>

        <div class="col-md-6">
       <h2 class="text-center" style="margin:5rem 0;">Non perdere le vantaggiose offerte a cadenza settimanale su tutti i nostri prodotti</h2>
        </div>

      </div>
      </div>

    <!-- Footer -->
   <?php include(FRONT_END.DS."footer.php"); ?>