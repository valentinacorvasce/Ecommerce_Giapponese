<?php require_once("risorse/config.php"); ?>

<?php include(FRONT_END.DS."header.php"); ?>

        <div class="container wrap">

            <?php singoloArticolo(); ?>
                    <!--.row-->
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-12 space">
                <a href="lista-articoli.php"><h2 class="text-center">Torna all'archivio</h2></a>
                </div>
            </div>
            </div>





<!-- Categorie Blog -->
<?php include(FRONT_END.DS."categorieBlog.php"); ?>

<!-- Footer -->
<?php include(FRONT_END.DS."footer.php"); ?>