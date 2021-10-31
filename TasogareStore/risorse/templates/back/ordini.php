<?php require("../risorse/funzioni.php") ?>

<?php 

session_start();

?>

<div class="col-md-12">
    <div class="row">
        <h1 class="my-5">Tutti gli Ordini</h1>
    </div>
    <div>
    <h4><?php mostraAvviso(); ?></h4>
    </div>

    <div class="row">
    <table class="table table-bordered table-responsive-xl">
        <thead>
            <tr>
                <th>Id</th>
                    <th>Importo </th>
                    <th>Num Ordine</th>
                    <th>Stato</th>
             </tr>
        </thead>
            <tbody>
                <?php ordini(); ?>
</tbody>
</table>
    </div>

</div>