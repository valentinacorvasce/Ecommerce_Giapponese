<?php 

ob_start();


// session_destroy();

// COSTANTI PER SETTARE TUTTI I PERCORSI PER I TEMPLATES GRAFICI;
// Ecco qui una costante che serve per separare i vari percorsi dei file
// e recuperarli in modo più efficiente. Tale costante predefinita di PHP è DS;
// una volta impostata questa costante è possibile rimuovere gli slash ai percorsi dei file, come segue;
// perché li inserisce lei in automatico;
/* defined("DS")? null:  */define("DS", DIRECTORY_SEPARATOR);
/* defined("FRONT_END")? null:  */define("FRONT_END", __DIR__.DS."templates/front");
// Se anziché dir ci inseriamo la costante FILE otteniamo la visualizzazione di tutti i file presenti 
// nel percorso che stiamo settando;
/* defined("BACK_END")? null:  */define("BACK_END", __DIR__.DS."templates/back");
/* defined("IMG_UPLOADS")? null:  */define("IMG_UPLOADS", __DIR__.DS."img_prodotti");
define("IMG_UPLOADS_2", __DIR__.DS."img_blog");

// echo IMG_UPLOADS_2;



/* echo BACK_END; */

// COSTANTI PER CONFIGURARE IL DATABASE;
define("DB_HOST", "localhost");
define("DB_USER", "valentinaweb");
define("DB_PASSWORD", "");
define("DB_NAME", "my_valentinaweb");

$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

/* if(!$connection){

    echo "Ops, non è stato possibile stabilire una connessione al Database!";

}else{
    echo "Ce l'hai fatta! Sei connesso al Database!";
} 

*/

 require_once("funzioni.php");
 include $_SERVER['DOCUMENT_ROOT']."/carrello.php";

?>