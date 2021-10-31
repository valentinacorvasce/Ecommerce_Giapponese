<?php include $_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.'risorse'.DIRECTORY_SEPARATOR.'config.php'; ?>

<?php include ('../risorse/templates/back/header.php'); ?>

<?php 

session_start();

?>

<?php 

if(!isset($_SESSION['username'])){

    header("Location: ../../index.php");

}

?>


<?php 

// ini_set('display_errors',1);
// error_reporting(E_ALL);

?>

        <div id="page-wrapper">

        <div class="row">
            <div class="col-md-9 order-md-9"> 
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header my-5">
                           Pannello di amministrazione 
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="material-icons">dashboard</i> Dashboard
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <?php 

                if($_SERVER['REQUEST_URI'] == "/admin/" || $_SERVER['REQUEST_URI'] == "/admin/admin.php"){

                    include ('../risorse/templates/back/content_admin.php');

                }

                if(isset($_GET['ordini'])){

                    include ('../risorse/templates/back/ordini.php');

                }

                if(isset($_GET['prodotti-admin'])){

                    include ('../risorse/templates/back/prodotti_admin.php');

                }

                if(isset($_GET['aggiungi'])){

                    include ('../risorse/templates/back/aggiungi.php');

                }

                if(isset($_GET['aggiorna-pdt'])){

                    include ('../risorse/templates/back/aggiorna.php');

                }

                if(isset($_GET['categorie'])){

                    include ('../risorse/templates/back/categorie-admin.php');

                }

                if(isset($_GET['rapporti'])){

                    include ('../risorse/templates/back/rapporti.php');

                }

                if(isset($_GET['lista-articoli'])){

                    include ('../risorse/templates/back/vedi-articoli.php');

                }

                if(isset($_GET['nuovo-articolo'])){

                    include ('../risorse/templates/back/aggiungi-articolo.php');

                }

                if(isset($_GET['modifica'])){

                    include ('../risorse/templates/back/modifica-articolo.php');

                }

                if(isset($_GET['categorie-articoli'])){

                    include ('../risorse/templates/back/categorie-articoli.php');

                }

                ?>

            </div>
            <!-- /.container-fluid -->
        </div>
        
        <?php include ('../risorse/templates/back/sidebar.php'); ?>
            
    </div>

        </div>
        <!-- /#page-wrapper -->
        <?php include ('../risorse/templates/back/footer.php'); ?>
        



