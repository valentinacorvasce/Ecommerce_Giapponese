<?php include '../../config.php'; ?>

<?php 

session_start();

?>

<?php
if(isset($_GET['id'])){

    $cancella_cat = query("DELETE FROM categorie WHERE ID_cat = $_GET[id]");
    conferma($cancella_cat);

    creaAvviso("<div class='alert alert-danger'>La categoria è stata correttamente eliminata!</div>");
    header("Location: ../../../admin/admin.php?categorie");
}else{
    header("Location: ../../../admin/admin.php?categorie");
}