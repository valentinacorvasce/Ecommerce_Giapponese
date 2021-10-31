<?php include '../../config.php'; ?>

<?php 

session_start();

?>

<?php
if(isset($_GET['id'])){

    $cancella_rapporto = query("DELETE FROM rapporti WHERE id_rapporto = $_GET[id]");
    conferma($cancella_rapporto);

    creaAvviso("<div class='alert alert-danger'>Hai eliminato un Rapporto!</div>");
    header("Location: ../../../admin/admin.php?rapporti");
}else{
    header("Location: ../../../admin/admin.php?rapporti");
}