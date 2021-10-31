<?php require("../risorse/funzioni.php") ?>
<?php aggiungiPdt(); ?>

<div class="container">
    <div>
    <h3 class="page- my-5">Aggiungi un nuovo prodotto</h3>
    </div>

<form action="" method="post" enctype="multipart/form-data">
<div class="row">
<div class="col-md-8">
<div class="form-group">
    <label for="nome">Nome </label>
        <input type="text" name="nome_pdt" class="form-control">  
    </div>
    <div class="form-group">
           <label for="dettagli">Descrizione Completa</label>
      <textarea name="dettagli"  cols="30" rows="8" class="form-control" id="editor1"></textarea>
      <script>CKEDITOR.replace('editor1');</script>
    </div>
    
    <div class="form-group">
        <label for="info">Descrizione Breve</label>
   <textarea name="desc_breve" cols="30" rows="3" class="form-control" type="text" id="editor2"></textarea>
   <script>CKEDITOR.replace('editor2');</script>
 </div>
</div><!--fine col-8-->

<div class="col-md-4">

<div class="form-group">
        <label for="prezzo">Prezzo</label>
        <input type="number"  name="prezzo" class="form-control"  step=".01" min="0"> 
        <!-- L'attributo "step" qui sopra serve per dire al browser che il campo deve accettare numeri decimali; -->
    </div>
    <div class="form-group">
         <label for="categoria">Categoria</label>
        <select name="categoria_pdt"  class="form-control">
        <option value="">Seleziona</option>
          <?php mostraCatPdt(); ?> 
          
        </select>
</div>

    <div class="form-group">
        <label for="quantita">Quantità</label>
      <input type="number" name="quantita_pdt" class="form-control" min="0">
      <!-- L'attributo "min" serve per far partire i numeri che si selezionano nel campo da zero
      ed evitare così che si possano selezionare e visualizzare i numeri negativi; -->
  </div>

    <div class="form-group">
        <label for="immagine">Immagine</label>
        <input type="file" name="immagine">  
    </div>  
    
    <div class="form-group">
     <input type="submit" name="aggiungi" class="btn btn-success btn-lg" value="Aggiungi">
    </div>

</div><!--fine col-4-->
</div>
</form>

</div><!--contenuto-->