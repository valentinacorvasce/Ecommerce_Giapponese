<?php include '../../config.php'; ?>

<?php 

session_start();

?>

<?php
if(isset($_GET['id'])){

    $cancella_ordine = query("DELETE FROM ordini WHERE id_ordine = $_GET[id]");
    conferma($cancella_ordine);

    creaAvviso("<div class='alert alert-danger'>Hai eliminato un ordine!</div>");
    header("Location: ../../../admin/admin.php?ordini");
}else{
    header("Location: ../../../admin/admin.php?ordini");
}