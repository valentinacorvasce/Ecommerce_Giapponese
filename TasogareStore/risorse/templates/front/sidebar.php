<form action="ricerca.php" method="post">

<div class="input-group">

<input type="text" class="form-control" placeholder="Cerca i tuoi Prodotti" name="ricerca">

<span>
  <button class="btn btn-primary" type="submit" name="invia_ricerca"><i class="material-icons box-icon">search</i></button>
</span>


</div>


</form>

          <h2 class="title text-center">Categorie</h2>
          <div class="list-mb-5 lista">

          <?php 

          mostraCategorie();

          /* $query = "SELECT * FROM categorie";

          $mostraCat = mysqli_query($connection, $query);

          if(!$mostraCat){

            die("Ops. Qualcosa è andato storto!".mysqli_error($connection));

          }

          // Rensiamo dinamiche le Categorie mostrandole attraverso un ciclo;
          while($row = mysqli_fetch_array($mostraCat)){

           echo "<a href='#' class='list-group-item'>{$row['name_cat']}</a>";

          } */

          ?>

           <!--  <a href="#" class="list-group-item">Categoria 1</a>
            <a href="#" class="list-group-item">Categoria 2</a>
            <a href="#" class="list-group-item">Categoria 3</a> -->
          </div>
