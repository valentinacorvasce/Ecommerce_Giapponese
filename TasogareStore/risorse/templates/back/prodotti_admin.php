<?php require("../risorse/funzioni.php") ?>

<?php 

session_start();

?>

<h3 class="my-5">
Tutti i Prodotti
</h3>
<?php mostraAvviso(); ?>
<table class="table table-bordered table-responsive-xl">
<thead>
<tr>
<th>ID</th>
<th>Titolo</th>
<th>Immagine</th>
<th>Categoria</th>
<th>Prezzo</th>
<th>Magazzino</th>
</tr>
</thead>
<tbody>

<?php

   prodottiAdmin();

?>

</tbody>


</table>