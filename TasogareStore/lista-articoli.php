<?php require_once("risorse/config.php"); ?>

<?php include(FRONT_END.DS."header.php"); ?>


<div class="container wrap">

            <div class="row">
               <div class="col-xl-6 mx-auto text-center">
                  <div class="section-title mb-100">
                     <p>i nostri approfondimenti sulla cultura Giapponese</p>
                     <h4>News e curiosità per voi</h4>
                  </div>
               </div>
            </div>
           
                    <div class="row">
                     <?php catalogoBlog(); ?>
                    </div>
                    <!--.row-->

</div>

<div class="container">
  <div class="row">
    <div class="col-md-12 space">
      <a href="blog.php"><h2 class="text-center">TORNA ALLA SEZIONE BLOG</h2></a>
    </div>
  </div>
</div>

<!-- Categorie Blog -->
<?php include(FRONT_END.DS."categorieBlog.php"); ?>

<!-- Footer -->
<?php include(FRONT_END.DS."footer.php"); ?>