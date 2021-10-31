<?php require("../risorse/funzioni.php") ?>

<?php

if(isset($_GET['id'])){

    $query = query("SELECT * FROM blog WHERE id_articolo = {$_GET['id']}");

    while($row = fetchArray($query)){

        $titleArt = $row['titolo_art'];
        $catArt = $row['cat_articolo'];
        $wall = $row['dettagli_art'];
        $littleText = $row['descr_art'];
        $datePub = $row['date_art'];
        $author = $row['autore'];
        $imgArt = $row['img_articolo'];

        $imgArt = mostraImg_2($row['img_articolo']);

    }
    modificaArticolo();
}

?>


<div class="container">
    <div>
    <h3 class="page- my-5">Modifica Articolo</h3>
    </div>
<form action="" method="post" enctype="multipart/form-data">
<div class="row">
<div class="col-md-8">
<div class="form-group">
    <label for="title">Titolo </label>
        <input type="text" name="titolo" class="form-control" value="<?php echo $titleArt; ?>">  
    </div>
    <div class="form-group">
           <label for="wall-text">Testo Completo</label>
      <textarea name="complete-text"  cols="30" rows="8" class="form-control" id="editor1"><?php echo $wall; ?></textarea>
      <script>CKEDITOR.replace('editor1');</script>
    </div>
    
    <div class="form-group">
        <label for="info-brevi">Descrizione Breve</label>
   <textarea name="little-text" cols="30" rows="3" class="form-control" type="text" id="editor2"><?php echo $littleText; ?></textarea>
   <script>CKEDITOR.replace('editor2');</script>
 </div>
</div><!--fine col-8-->

<div class="col-md-4">

<div class="form-group">
        <label for="data-pubblicazione">Data di Pubblicazione</label>
        <input type="text" name="date" class="form-control" value="<?php echo $datePub; ?>">
        
        
    </div>
    <div class="form-group">
         <label for="categoria">Categoria</label>
        <select name="categoria_articolo"  class="form-control">
        <option value="<?php echo $catArt; ?>"><?php echo titoloCatBlog($catArt); ?></option>
           <?php mostraCatArt(); ?>
          
        </select>
</div>

<div class="form-group">
         <label for="autore">Autore</label>
        <select name="author"  class="form-control">
        <option value="<?php echo $author; ?>"><?php echo nomeAutoreBlog($author); ?></option>
        <?php mostraAutore(); ?>
          
        </select>
</div>

    <div class="form-group">
        <label for="immagine">Immagine</label>
        <input type="file" name="immagine_articolo">
        <img width="100" src="../../risorse/<?php echo $imgArt; ?>" alt="">  
    </div>  
    
    <div class="form-group">
     <input type="submit" name="aggiorna" class="btn btn-success btn-lg" value="Aggiorna">
    </div>

</div><!--fine col-4-->
</div>
</form>

</div><!--contenuto-->