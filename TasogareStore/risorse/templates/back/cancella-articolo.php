<?php include '../../config.php'; ?>

<?php 

session_start();

?>

<?php
if(isset($_GET['id'])){

    $cancella_art = query("DELETE FROM blog WHERE id_articolo = $_GET[id]");
    conferma($cancella_art);

    creaAvviso("<div class='alert alert-danger'>L'articolo è stato correttamente eliminato!</div>");
    header("Location: ../../../admin/admin.php?lista-articoli");
}else{
    header("Location: ../../../admin/admin.php?lista-articoli");
}




?>