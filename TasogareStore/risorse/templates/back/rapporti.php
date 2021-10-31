<?php require("../risorse/funzioni.php") ?>

<?php 

session_start();

?>

<div class="col-md-12">
    <div class="row">
        <h1 class="my-5">Rapporti</h1>
    </div>
    <div class="row">
        <h4><?php mostraAvviso(); ?></h4>
    </div>


    <div class="row">
    <table class="table table-bordered table-responsive-xl">
        <thead>
            <tr>
                <th>Id Rapporto</th>
                    <th>Id Prodotto</th>
                    <th>Id Ordine</th>
                    <th>Nome Prodotto</th>
                    <th>Prezzo</th>
                    <th>Quantita</th>
             </tr>
        </thead>
            <tbody>
            <?php rapporti(); ?>
        </tbody>
        </table>
            </div>

        </div>