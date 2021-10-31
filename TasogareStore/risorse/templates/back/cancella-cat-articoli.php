<?php include '../../config.php'; ?>

<?php 

session_start();

?>

<?php
if(isset($_GET['id'])){

    $cancella_cat_blog = query("DELETE FROM categorie_blog WHERE id_blog = $_GET[id]");
    conferma($cancella_cat_blog);

    creaAvviso("<div class='alert alert-danger'>La categoria è stata correttamente eliminata!</div>");
    header("Location: ../../../admin/admin.php?categorie-articoli");
}else{
    header("Location: ../../../admin/admin.php?categorie-articoli");
}