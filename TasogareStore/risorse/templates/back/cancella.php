<?php include '../../config.php'; ?>

<?php 

session_start();

?>

<?php
if(isset($_GET['id'])){

    $cancella_pdt = query("DELETE FROM prodotti WHERE id_prodotto = $_GET[id]");
    conferma($cancella_pdt);

    creaAvviso("<div class='alert alert-danger'>Il prodotto è stato correttamente eliminato!</div>");
    header("Location: ../../../admin/admin.php?prodotti-admin");
}else{
    header("Location: ../../../admin/admin.php?prodotti-admin");
}




?>