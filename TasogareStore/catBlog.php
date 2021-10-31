<?php require_once("risorse/config.php"); ?>

<?php include(FRONT_END.DS."header.php"); ?>

    <!-- Page Content -->
    <div class="container-fluid my-5">

      <!-- Jumbotron Header -->
      <header class="jumbotron my-4 text-center">
       <?php nomeCat_blog(); ?>
        
        <a href="lista-articoli.php" class="btn btn-primary btn-lg">TUTTI GLI ARTICOLI</a>
      </header>

      <!-- Page Features -->
      <div class="row text-center">

      <?php pagCategoriaArt(); ?>

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

 <!-- Footer -->
<?php include(FRONT_END.DS."footer.php"); ?>
