<?php require("../risorse/funzioni.php") ?>

<?php nuovoArticolo(); ?>
<div class="container">
    <div>
    <h3 class="page- my-5">Aggiungi un nuovo Articolo</h3>
    </div>
<form action="" method="post" enctype="multipart/form-data">
<div class="row">
<div class="col-md-8">
<div class="form-group">
    <label for="title">Titolo </label>
        <input type="text" name="titolo" class="form-control">  
    </div>
    <div class="form-group">
           <label for="wall-text">Testo Completo</label>
      <textarea name="complete-text"  cols="30" rows="8" class="form-control" id="editor1"></textarea>
      <script>CKEDITOR.replace('editor1');</script>
    </div>
    
    <div class="form-group">
        <label for="info-brevi">Descrizione Breve</label>
   <textarea name="little-text" cols="30" rows="3" class="form-control" type="text" id="editor2"></textarea>
   <script>CKEDITOR.replace('editor2');</script>
 </div>
</div><!--fine col-8-->

<div class="col-md-4">

<div class="form-group">
        <label for="data-pubblicazione">Data di Pubblicazione</label>
        <input type="text" name="date" class="form-control">
        
        
    </div>
    <div class="form-group">
         <label for="categoria">Categoria</label>
        <select name="categoria_articolo"  class="form-control">
        <option value="">Seleziona</option>
           <?php mostraCatArt(); ?>
          
        </select>
</div>

<div class="form-group">
         <label for="autore">Autore</label>
        <select name="author"  class="form-control">
        <option value="">Seleziona</option>
        <?php mostraAutore(); ?>
          
        </select>
</div>

    <div class="form-group">
        <label for="immagine">Immagine</label>
        <input type="file" name="immagine_articolo">  
    </div>  
    
    <div class="form-group">
     <input type="submit" name="nuovo" class="btn btn-success btn-lg" value="Aggiungi">
    </div>

</div><!--fine col-4-->
</div>
</form>

</div><!--contenuto-->