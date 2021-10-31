<?php require_once("risorse/config.php"); ?>

<?php include(FRONT_END.DS."header.php"); ?>

    <!-- Page Content -->
    <div class="container-fluid my-5">

      <!-- Jumbotron Header -->
      <header class="jumbotron my-4 text-center">
        <h1 class="">Catalogo dei Prodotti</h1>
        <p class="lead">Il nostro catalogo online offre una vasta gamma di prodotti selezionati, dall'oggettistica tradizionale giapponese ai gadget di intrattenimento tipici del giovane mondo Otaku. Sfoglialo e approfitta dei nostri prezzi competitivi!</p>
        <a href="checkout.php" class="btn btn-primary btn-lg">Acquista!</a>
      </header>

      <!-- Page Features -->
      <div class="row text-center">

        <?php catalogoProdotti(); ?>
        <!-- <div class="col-lg-3 col-md-6 mb-4"> 
              <div class="card altezza">
            <img class="card-img-top" src="http://placehold.it/500x325" alt="">
            <div class="card-body">
              <h4 class="card-title">Nome Prodotto</h4>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">Acquista</a>
              <a href="#" class="btn btn-success">Dettagli</a>
            </div>
          </div>
        </div> -->
        

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

 <!-- Footer -->
<?php include(FRONT_END.DS."footer.php"); ?>
