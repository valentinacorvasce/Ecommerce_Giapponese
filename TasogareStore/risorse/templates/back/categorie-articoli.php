<?php require("../risorse/funzioni.php") ?>

<?php 

session_start();

?>

<?php aggiungiCat_blog(); ?>
<div class="row">
<div class="col-md-12">
<h1 class="my-5"> Gestisci le categorie</h1>
<h4><?php mostraAvviso(); ?></h4>
</div>
</div>

<div class="row">
<div class= "col-md-8">
<table class="table table-bordered table-responsive-xl">
<thead>
  <tr>
       <th>Id</th>
       <th>Nome</th>
       <th>Didascalia</th>
  </tr>
</thead>
<tbody>

<?php 

categorieBlog();

?>
   
</tbody>
</table>
</div>

<div class="col-md-4">
<form action="" method="post">
    
        <div class="form-group">
            <label for="categoria">Nome Categoria</label>
            <input name="cat_nome_blog" type="text" class="form-control">
        </div>
        
        <div class="form-group">
            <label for="categoria">Didascalia</label>
            <textarea name="didascaliaBlog" type="text" class="form-control"></textarea>
        </div>

        <div class="form-group">
            
            <input name="aggiungi_cat_blog" type="submit" class="btn btn-primary" value="Aggiungi">
        </div>      
    </form>
</div>
</div>