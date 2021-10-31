<?php 
// Codice per il Recaptcha;
if(isset($_POST["btnSubmit"])){

    $chiaveSegreta = "6LdR0roaAAAAACQv-yii4YLxTyFSYGM-VuZYhr0N";
    $verifica = $_POST["g-recaptcha-response"];
    $remoteIP = $_SERVER["REMOTE_ADDR"];

    $url = "https://www.google.com/recaptcha/api/siteverify?secret=$chiaveSegreta&response=$verifica&remoteip=$remoteIP";

    $risposta = file_get_contents($url);

    $risposta = json_decode($risposta);

    if($risposta->success){


// Codice per attivazione del Form;
$error = "";
$message = "";

if($_POST){

    if(!$_POST["txtName"]){

        $error = "E' necessario inserire il tuo nome!";

    }

    if(!$_POST["txtEmail"]){

        $error = "Inserisci una mail!";

    }

    if(!$_POST["txtMsg"]){

        $error = "Inserisci un messaggio di testo!";

    }

    if($_POST["txtEmail"] && filter_var($_POST["txtEmail"], FILTER_VALIDATE_EMAIL) === false){

        $error = "Ops, l'indirizzo mail inserito non è valido!";
    }

    if($error != ""){

        $error = "<div class='alert alert-warning' role='alert'>Ops, abbiamo rilevato i seguenti errori nella tua compilazione: ".$error."</div>";

    }else{

        $address = "lilithsixx@gmail.com";
        $name = $_POST["txtName"];
        $text = $_POST["txtMsg"];
        $headers = "From: ".$_POST["txtEmail"];

        if(mail($address, $name, $text, $headers)){

            $message = "<div class='alert alert-success' role='alert'> E' andato tutto a buon fine. Grazie per averci contattati! </div>";

        }else{

            $message = "<div class='alert alert-danger' role='alert'> Ops, si è verificato un errore durante l'invio! </div>";
        }
        
    }


}
    }else{
        $captchaFail =  "<h3 style='color:#E24246; margin:5px;'>Ops. Fai attenzione al Captcha!</h3>";
    }
}

?>


<?php require_once("risorse/config.php"); ?>

<?php include(FRONT_END.DS."header.php"); ?>

<div class="background" style="padding:20px">
    <div class="container contact-form">
                <div class="contact-image">
                    <img src="img/daruma.png" alt="daruma"/>
                </div>
                <form method="post">
                    <h3><strong>Per contattarci compila il form</strong></h3>
                    <div><?php echo $error.$message; ?></div>
                <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <textarea name="txtMsg" class="form-control" placeholder="Il tuo messaggio *" style="width: 100%; height: 150px;"></textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" name="txtName" class="form-control" placeholder="Il tuo nome *" value="" />
                            </div>
                            <div class="form-group">
                                <input type="text" name="txtEmail" class="form-control" placeholder="La tua mail *" value="" />
                            </div>
                            <div class="form-group">
                                <div><?php echo $captchaFail; ?></div>
                                <div class="g-recaptcha my-5" data-sitekey="6LdR0roaAAAAANro5lhCM5aBqDJpZq6PSTc9_y7M"></div>
                                <input type="submit" name="btnSubmit" class="btnContact" value="INVIA" />
                            </div>
                        </div>
                    </div>
                </form>
    </div>
</div>

 <!-- Footer -->
 <?php include(FRONT_END.DS."footer.php"); ?>