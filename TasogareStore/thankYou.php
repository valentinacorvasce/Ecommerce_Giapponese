<?php require_once("risorse/config.php"); ?>
<?php require_once("carrello.php"); ?>
<?php include(FRONT_END.DS."header.php"); ?>


<div class="container">
    <h2 class="display-4 text-center" style="margin-top:20vh;">Grazie per l'acquisto!</h2>

    <?php 

    // TX, AMT, CC e ST sono variabili di default che vengono 
    // utilizzate per le richieste di tipo GET;
    // TX indica la transazione; 
    // AMT indica la quantità (amount) in int o float;
    // CC indica il Currency Code, cioè la valuta;
    // e ST indica lo stato della richiesta;

    transazioni();
    /* if(isset($_GET['tx'])){

      $prezzo = $_GET['amt'];
      $valuta = $_GET['cc'];
      $transazione = $_GET['tx'];
      $stato = $_GET['st'];

      $invioOrdine = query("INSERT INTO ordini(importo_ordine, num_ordine, status_ordine, cur_ordine) VALUES ('{$prezzo}', '{$valuta}', '{$transazione}', '{$stato}')");
      conferma($invioOrdine);

      session_destroy();

    }else{
      header("Location: index.php");
    } */
    
    
    
    ?>



</div>
