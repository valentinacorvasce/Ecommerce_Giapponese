<?php require_once("risorse/config.php"); ?>

<?php include(FRONT_END.DS."header.php"); ?>

    <!-- Page Content -->
    <div class="container my-5">

      <div class="row">
      <div class="col-lg-3">
      <?php include(FRONT_END.DS."sidebar.php"); ?></div>

      <?php 

      mostraDescr();
      
     /*  $pdtSingolo = query("SELECT * FROM prodotti WHERE id_prodotto = {$_GET['id']}");
      conferma($pdtSingolo);

      while($row = fetchArray($pdtSingolo)): */
      
      ?>

<!-- <div class="col-lg-9">

<div class="card mt-4">
  <img class="card-img-top img-fluid" src="../risorse/<?php // echo $row['img'] ?>" alt="">
  <div class="card-body">
    <h3 class="card-title"><?php // echo $row['nome_prodotto'] ?></h3>
    <h4>€<?php // echo $row['prezzo'] ?></h4>
    <p class="card-text"><?php // echo $row['descr_prodotto'] ?></p>
    <button type="button" class="btn bg-primary btn-small btn-block">Acquista</button>
  </div>
</div>


<div class="card card-outline-secondary my-4">
  <div class="card-header">
    Descrizione Completa
  </div>
  <div class="card-body">
    <p>
    <?php // echo $row['descr_lunga'] ?>
    </p>
  </div>
</div> -->


        <!--   <div class="card card-outline-secondary my-4">
          <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
            <div class="card-header">
              Recensioni
            </div>
            <div class="card-body">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis et enim aperiam inventore, similique necessitatibus neque non! Doloribus, modi sapiente laboriosam aperiam fugiat laborum. Sequi mollitia, necessitatibus quae sint natus.</p>
              <small class="text-muted">Pubbicata il 3 ottobre 2017</small>
              <hr>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis et enim aperiam inventore, similique necessitatibus neque non! Doloribus, modi sapiente laboriosam aperiam fugiat laborum. Sequi mollitia, necessitatibus quae sint natus.</p>
              <small class="text-muted">Pubbicata il 3 ottobre 2017</small>
              <hr>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis et enim aperiam inventore, similique necessitatibus neque non! Doloribus, modi sapiente laboriosam aperiam fugiat laborum. Sequi mollitia, necessitatibus quae sint natus.</p>
              <small class="text-muted">Pubbicata il 3 ottobre 2017</small>
              <hr>
              <a href="#" class="btn btn-info">Lascia una recensione</a>
            </div>
          </div>
          <!-- /.card --> 

        </div>
        <!-- /.col-lg-9 -->
       
      </div>

    </div>
    <!-- /.container -->

    <!-- Footer -->
   <?php include(FRONT_END.DS."footer.php"); ?>