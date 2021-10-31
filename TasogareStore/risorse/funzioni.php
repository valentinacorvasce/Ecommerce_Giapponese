<?php require("config.php") ?>
<?php 

$cartellaImg = "img_prodotti";
$cartellaImg2 = "img_blog";

// FUNZIONI DI UTILITA';
function query($sql){
    global $connection;

    return mysqli_query($connection, $sql);

}

function conferma($result){
    global $connection;

    if(!$result){
        die("Ops. Qualcosa è andato storto!".mysqli_error($connection));

      }
}

function fetchArray($result){

    return mysqli_fetch_array($result);
}

function creaAvviso ($msg){
  if(!empty($msg)){

    $_SESSION['messaggio'] = $msg;

  }else{
    $msg= "";
  }
}

function mostraAvviso(){
  if(isset($_SESSION['messaggio'])){

    echo $_SESSION['messaggio'];

    unset($_SESSION['messaggio']);

  }
}

function idUltimo(){
  global $connection;

  return mysqli_insert_id($connection);
}

function mostraImg($imgProdotto){
  global $cartellaImg;

  return $cartellaImg.DS.$imgProdotto;
}

function mostraImg_2($imgBlog){
  global $cartellaImg2;

  return $cartellaImg2.DS.$imgBlog;
}


// FUNZIONI SPECIFICHE;
function mostraProdotti(){
    $ricercaProdotti = query("SELECT * FROM prodotti WHERE CAST(prezzo AS DECIMAL) = CAST(15.99 AS DECIMAL) LIMIT 3");
    // limit è una funzione di SQL per evitare che la homepage 
    // mostri tutti quanti i prodotti; il loro numero viene nella home limitato;
    conferma($ricercaProdotti);

    while($row = fetchArray($ricercaProdotti)){

        // echo $row["nome_prodotto"];

        $prodotti = <<<STRINGA_PDT
            <div class="col-lg-4 col-md-6 box1">
                <div class="card profile-card-5 h-100 text-center">
                  <div class="card-img-block">
                    <a href="#"><img class="card-img-top" src="risorse/img_prodotti/{$row['img']}" alt=""></a>
                  </div>
                    <div class="card-body pt-0">
                    <h4 class="card-title">
                        <a style="font-size:22px; color:#E24246;" href="prodotto.php?id={$row['id_prodotto']}">{$row['nome_prodotto']}</a>
                    </h4>
                    <h5>€{$row['prezzo']}</h5>
                    <br>
                    <p class="card-text">{$row['descr_prodotto']}</p>
                    <br>
                        <a href='carrello.php?add={$row['id_prodotto']}' type="button" class="btn-primary btn-block" style="text-align:center; padding:9px;">Acquista</a>
                    </div>
                </div>
                </div>
        STRINGA_PDT;
        echo $prodotti;
    }
}



function mostraCategorie(){

    $ricercaCategorie = query("SELECT * FROM categorie");
    conferma($ricercaCategorie);

          while($row = fetchArray($ricercaCategorie)){

            $categorie = <<<STRINGA_CAT
           <a href='categorie.php?id={$row['ID_cat']}' class='list-group-item'>{$row['name_cat']}</a>
           STRINGA_CAT;

           echo $categorie;
          }

}


function mostraDescr(){
    $pdtSingolo = query("SELECT * FROM prodotti WHERE id_prodotto = {$_GET['id']}");
      conferma($pdtSingolo);

      while($row = fetchArray($pdtSingolo)){

        $descr = <<<STRINGA_DESCR
        <div class="col-lg-9">
          <div class="card profile-card-5 mt-4 text-center">
            <div class="card-img-block">
              <img class="card-img-top img-fluid" src="risorse/img_prodotti/{$row['img']}" alt="">
            </div>
            <div class="card-body pt-0">
              <h3 class="card-title">{$row['nome_prodotto']}</h3>
              <h4>€{$row['prezzo']}</h4>
              <p class="card-text">{$row['descr_prodotto']}</p>
              <a style="text-align:center; padding:9px;" href="carrello.php?add={$row['id_prodotto']}" type="button" class="btn-primary btn-block">Acquista</a>
            </div>
          </div>
          <!-- /.card -->
          <div class="card card-outline-secondary my-4">
            <div class="card-header">
              Descrizione Completa
            </div>
            <div class="card-body text-center">
              <p>
              {$row['descr_lunga']}
              </p>
            </div>
          </div>
        STRINGA_DESCR;
        echo $descr;
      }
}

function pagCategoria(){

    $pdtCategoria = query("SELECT * FROM prodotti WHERE cat_prodotto = {$_GET['id']}");
    conferma($pdtCategoria);

    while($row = fetchArray($pdtCategoria)){

        $pdtSingolaCat = <<<STRINGA_PDT
        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card profile-card-5 altezza">
            <div class="card-img-block">
              <img class="card-img-top" src="risorse/img_prodotti/{$row['img']}" alt="">
            </div>
            <div class="card-body pt-0">
              <h4 class="card-title">{$row['nome_prodotto']}</h4>
              <p class="card-text">{$row['descr_prodotto']}</p>
            </div>
            <div class="card-footer">
              <a href="carrello.php?add={$row['id_prodotto']}" class="btn btn-primary">Acquista</a>
              <a href="prodotto.php?id={$row['id_prodotto']}" class="btn btn-success">Dettagli</a>
            </div>
          </div>
        </div>
        STRINGA_PDT;
        echo $pdtSingolaCat;
    }
}


function nomeCat(){

  $nomeCategoria = query("SELECT name_cat, didascalia FROM categorie WHERE ID_cat = {$_GET['id']}");

  while($row = fetchArray($nomeCategoria)){

    $mostraNome = <<<STRINGA
    <h3 class="text-center">Benvenuto nella sezione: </h3>
    <h2 class="text-center">{$row['name_cat']}</h2>
    <p class="lead">{$row['didascalia']}</p>
    STRINGA;
    echo $mostraNome;
  }

}


function catalogoProdotti (){

    $catalogo = query("SELECT * FROM prodotti");
    conferma($catalogo);

    while($row = fetchArray($catalogo)){

        $shopCatalogo = <<<CATALOGO
        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card profile-card-5 h-100">
            <div class="card-img-block">
                <img class="card-img-top" src="risorse/img_prodotti/{$row['img']}" alt="">
              </div>
                <div class="card-body pt-0">
                <h4 class="card-title">{$row['nome_prodotto']}</h4>
                <h4>€{$row['prezzo']}</h4>
                <p class="card-text">{$row['descr_prodotto']}</p>
                </div>
                <div class="card-footer">
                <a href="carrello.php?add={$row['id_prodotto']}" class="btn btn-primary">Acquista</a>
                <a href="prodotto.php?id={$row['id_prodotto']}" class="btn btn-success">Dettagli</a>
                </div>
            </div>
          </div>
        CATALOGO;
        echo $shopCatalogo;

    }
}


function prodottiAdmin(){

  $mostraPdt = query("SELECT * FROM prodotti");
  conferma($mostraPdt);

  while($row = fetchArray($mostraPdt)){
    $findCat = titoloCat($row['cat_prodotto']);

    $pdt_in_admin = <<<STRINGA
      <tr>
        <td>{$row['id_prodotto']}</td>
        <td>{$row['nome_prodotto']}</td>
        <td><img src="../risorse/img_prodotti/{$row['img']}" alt="" style="width:62px;height:62px;">
        </td>
        <td>{$findCat}</td>
        <td>€{$row['prezzo']}</td>
        <td>{$row['qnt_prodotto']}</td>
        <td><a class="btn btn-info" href="admin.php?aggiorna-pdt&id={$row['id_prodotto']}" role="button">Modifica</a></td>
        <td><a class="btn btn-danger" href="../risorse/templates/back/cancella.php?id={$row['id_prodotto']}" role="button">Cancella</a></td>
      </tr>
    STRINGA;
    echo $pdt_in_admin;
  }
}

function titoloCat($catPdt){

  $titoloCat = query("SELECT * FROM categorie WHERE ID_cat = '{$catPdt}'");
  conferma($titoloCat);

  while($row = fetchArray($titoloCat)){

    return $row['name_cat'];

  }
}


function aggiungiPdt(){

  if(isset($_POST['aggiungi'])){

    $nomePdt = $_POST['nome_pdt'];
    $catPdt = $_POST['categoria_pdt'];
    $dettagli = $_POST['dettagli'];
    $descrBreve = $_POST['desc_breve'];
    $prezzo = $_POST['prezzo'];
    $quantitaPdt = $_POST['quantita_pdt'];
    $imgPdt = $_FILES['immagine']['name']; // stato definitivo di caricamento online dell'immagine;
    $imgTemp = $_FILES['immagine']['tmp_name']; // stato transitorio di memorizzazione dell'immagine;

    move_uploaded_file($imgTemp, IMG_UPLOADS.DS.$imgPdt);

    $newPdt = query("INSERT INTO prodotti(nome_prodotto, cat_prodotto, descr_lunga, descr_prodotto, prezzo, qnt_prodotto, img) VALUES('{$nomePdt}', '{$catPdt}', '{$dettagli}', '{$descrBreve}', '{$prezzo}', '{$quantitaPdt}', '{$imgPdt}')");
    conferma($newPdt);
    creaAvviso("<div class='alert alert-success'>Un nuovo prodotto è stato correttamente aggiunto!</div>");
    header("Location: admin.php?prodotti-admin");

  }
}

function mostraCatPdt(){

  $query = query("SELECT * FROM categorie");
  conferma($query);

  while($row = fetchArray($query)){

    $cat_prodotto = <<<STRINGA
    <option value="{$row['ID_cat']}">{$row['name_cat']}</option>
    STRINGA;
    echo $cat_prodotto;
  }
}

function aggiornaProdotto(){

  if(isset($_POST['aggiorna'])){

    $nomePdt = $_POST['nome_pdt'];
    $catPdt = $_POST['categoria_pdt'];
    $dettagli = $_POST['dettagli'];
    $descrBreve = $_POST['desc_breve'];
    $prezzo = $_POST['prezzo'];
    $quantitaPdt = $_POST['quantita_pdt'];
    $imgPdt = $_FILES['immagine']['name'];
    $imgTemp = $_FILES['immagine']['tmp_name'];

    if(empty($imgPdt)){

      $cercaImg = query("SELECT img FROM prodotti WHERE id_prodotto = {$_GET['id']}");
      conferma($cercaImg);

      while($row = fetchArray($cercaImg)){

        $imgPdt = $row['img'];

      }

    }

    move_uploaded_file($imgTemp, IMG_UPLOADS.DS.$imgPdt);

    $update = query("UPDATE prodotti SET nome_prodotto = '{$nomePdt}', cat_prodotto = '{$catPdt}', descr_lunga = '{$dettagli}', descr_prodotto = '{$descrBreve}', prezzo = '{$prezzo}', qnt_prodotto = '{$quantitaPdt}', img = '{$imgPdt}'
    WHERE id_prodotto = {$_GET['id']}");

    conferma($update);
    creaAvviso("<div class='alert alert-success'>Il tuo prodotto è stato aggiornato!</div>");
    header("Location: admin.php?prodotti-admin");

  }
}

function catAdmin(){

  $catMostra = query("SELECT * FROM categorie");
  conferma($catMostra);

  while($row = fetchArray($catMostra)){

    $catID = $row['ID_cat'];
    $catTitolo = $row['name_cat'];
    $didascalia = $row['didascalia'];

    $cat_admin = <<<STRINGA
    <tr>
        <td>{$catID}</td>
        <td>{$catTitolo}</td>
        <td>{$didascalia}</td>
       
        <td><a class="btn btn-danger" href="../../risorse/templates/back/cancella-cat.php?id={$row['ID_cat']}" role="button">Cancella</a></td>
    </tr> 
    STRINGA;
    echo $cat_admin;

  }
}


function aggiungiCatAdmin(){

  if(isset($_POST['aggiungi_cat'])){

    $nomeCat = $_POST['cat_nome'];
    $didascaliaCat = $_POST['didascaliaCat'];

    if(empty($nomeCat) || $nomeCat == ""){

      echo "<div class='alert alert-warning'>Questo campo non può essere vuoto!</div>";

    }else{

    $newCat = query("INSERT INTO categorie(name_cat, didascalia) VALUES('{$nomeCat}', '{$didascaliaCat}')");
    conferma($newCat);
    creaAvviso("<div class='alert alert-success'>Hai aggiunto una nuova categoria!</div>");

  }
}

}

function ordini(){

  $ordiniMostra = query("SELECT * FROM ordini");
  conferma($ordiniMostra);

  while($row = fetchArray($ordiniMostra)){

    $ordineID = $row['id_ordine'];
    $prezzoOrdine = $row['importo_ordine'];
    $numOrdine = $row['num_ordine'];
    $statusOrdine = $row['status_ordine'];

    $ordine_admin = <<<STRINGA
    <tr>
      <th scope="row">{$ordineID}</th>
        <td>{$prezzoOrdine}</td>
        <td>{$numOrdine}</td>
        <td>{$statusOrdine}</td>
        <td><a class="btn btn-danger" href="../risorse/templates/back/cancella-ordini.php?id={$row['id_ordine']}" role="button">Cancella</a></td>
      </tr> 
    STRINGA;
    echo $ordine_admin;

  }
}


function rapporti(){

  $rapportiMostra = query("SELECT * FROM rapporti");
  conferma($rapportiMostra);

  while($row = fetchArray($rapportiMostra)){

    $rapportoID = $row['id_rapporto'];
    $idProdotto = $row['id_prodotto'];
    $idOrdine = $row['id_ordine'];
    $nomeProdotto = $row['nome_prodotto'];
    $prezzoOrdine = $row['prezzo'];
    $quantita = $row['qnt_prodotto'];

    $rapporti_admin = <<<STRINGA
    <tr>
      <th scope="row">{$rapportoID}</th>
      <td>{$idProdotto}</td>
      <td>{$idOrdine}</td>
      <td>{$nomeProdotto}</td>
      <td>€{$prezzoOrdine}</td>
      <td>{$quantita}</td>
      <td><a class="btn btn-danger" href="../risorse/templates/back/cancella-rapporti.php?id={$row['id_rapporto']}" role="button">Cancella</a></td>
    </tr>
    STRINGA;
    echo $rapporti_admin;

  }
}


function ricerca(){

  if(isset($_POST['invia_ricerca'])){

    $ricercaUtente = $_POST['ricerca'];

    // echo $ricercaUtente;

    $ricerca = query("SELECT * FROM prodotti WHERE nome_prodotto LIKE '%$ricercaUtente%'");
    conferma($ricerca);

  }

  $risultatoRicerca = mysqli_num_rows($ricerca);

  if($risultatoRicerca == 0){

    echo "<div class='alert alert-warning'>Spiacente. Non sono presenti prodotti</div>";

  }else{
    // echo "E' stato trovato un prodotto!";

    while($row = fetchArray($ricerca)){

  $mostraRicerca = <<<STRINGA
<div class="card mt-4 profile-card-5 text-center">
 <div class="card-img-block">
  <img class="card-img-top img-fluid" src="risorse/img_prodotti/{$row['img']}" alt="">
 </div>
  <div class="card-body pt-0">
    <h3 class="card-title">{$row['nome_prodotto']}</h3>
    <h4>€{$row['prezzo']}</h4>
    <p class="card-text">{$row['descr_prodotto']}</p>
    <a href="carrello.php?add={$row['id_prodotto']}" type="button" class="btn btn-primary btn-small btn-block">Acquista</a>
  </div>
</div>
<div class="card card-outline-secondary my-4">
  <div class="card-header">
    Descrizione Completa
  </div>
  <div class="card-body text-center">
    <p>
    {$row['descr_lunga']}
    </p>
  </div>
</div>
STRINGA;
echo $mostraRicerca;

    }
  }

}


function login(){
  if(isset($_POST['login'])){

    $user = $_POST['username'];
    $pass = $_POST['password'];

    $query = query("SELECT * FROM utenti WHERE username = '{$user}' AND password = '{$pass}'");
    conferma($query);

    if(mysqli_num_rows($query) ==0){

      creaAvviso("<div class='alert alert-warning'>Ops. I dati di login sono errati!</div>");
      header("Location: login.php");

    }else{

      $_SESSION['username'] = $user;
      header("Location: admin/admin.php");
    }
  }
}

/* pagina Blog e admin Blog */
function mostraBlog(){
  $ricercaBlog = query("SELECT * FROM blog WHERE date_art LIKE '%Apr%' LIMIT 3");
  conferma($ricercaBlog);

  while($row = fetchArray($ricercaBlog)){
    $cercaCategoriaBlog = titoloCatBlog($row['cat_articolo']);

      $blog = <<<STRINGA_BLOG
                      <div class="col-md-4" >
                        <div class="item-box-blog">
                          <div class="item-box-blog-image">
                            <!--Date-->
                            <div class="item-box-blog-date bg-blue-ui white"> <span class="mon">{$row['date_art']}</span> </div>
                            <!--Image-->
                            <figure> <img alt="" src="risorse/img_blog/{$row['img_articolo']}"> </figure>
                          </div>
                          <div class="item-box-blog-body">
                            <!--Heading-->
                            <div class="item-box-blog-heading">
                              <a href="articolo.php?id={$row['id_articolo']}" tabindex="0">
                                <h5>{$row['titolo_art']}</h5>
                              </a>
                            </div>
                            <!--Data-->
                            <div class="item-box-blog-data" style="padding: 15px;">
                              <p>{$cercaCategoriaBlog}</p>
                            </div>
                            <!--Text-->
                            <div class="item-box-blog-text">
                            <p>{$row['descr_art']}</p>
                            </div>
                            <div class="mt"> <a href="articolo.php?id={$row['id_articolo']}" tabindex="0" class="btn bg-blue-ui white read">LEGGI TUTTO</a> </div>
                            <!--Read More Button-->
                          </div>
                        </div>
                      </div>         
      STRINGA_BLOG;
      echo $blog;
  }
}

function titoloCatBlog($catArt){

  $titoloCatArt = query("SELECT * FROM categorie_blog WHERE id_blog = '{$catArt}'");
  conferma($titoloCatArt);

  while($row = fetchArray($titoloCatArt)){

    return $row['name_blog'];

  }
}

function nomeAutoreBlog($author){

  $nomeAutore = query("SELECT * FROM utenti WHERE id_utente = '{$author}'");
  conferma($nomeAutore);

  while($row = fetchArray($nomeAutore)){

    return $row['username'];

  }
}

function BlogCat(){

  $ricercaCatBlog = query("SELECT * FROM categorie_blog");
  conferma($ricercaCatBlog);

        while($row = fetchArray($ricercaCatBlog)){

          $categorieBlog = <<<STRINGA_CAT
          <div class="card">
            <div class="card-header color" id="headingOne">
              <h2 class="mb-0">
                <a href='catBlog.php?id={$row['id_blog']}' class='btn btn-link btn-block text-center' type='button'>{$row['name_blog']}</a>
              </h2>
            </div>
          </div>
         STRINGA_CAT;

         echo $categorieBlog;
        }
}


function singoloArticolo(){
  $artSingolo = query("SELECT * FROM blog WHERE id_articolo = {$_GET['id']}");
    conferma($artSingolo);

    while($row = fetchArray($artSingolo)){
      $cercaCategoriaBlog = titoloCatBlog($row['cat_articolo']);
      $cercaAutore = nomeAutoreBlog($row['autore']);

      $descrArt = <<<STRINGA_DESCR
      <div class="row">
               <div class="col-xl-6 mx-auto text-center">
                  <div class="section-title mb-100">
                     <p>{$cercaCategoriaBlog}</p>
                     <h4>{$row['titolo_art']}</h4>
                     <h5>Pubblicato il: {$row['date_art']}<br>Autore: <strong>{$cercaAutore}</strong> </h5>
                  </div>
               </div>
            </div>
                    <div class="row">
                      <div class="col-md-12 text-center">
                        <img class="img-responsive mx-auto d-block img-blog" src="risorse/img_blog/{$row['img_articolo']}" alt="">
                          <div style="margin:5rem 0;">
                            {$row['dettagli_art']}
                          </div>
                      </div>
                    </div>
STRINGA_DESCR;
      echo $descrArt;
    }
}

function pagCategoriaArt(){

  $artCategoria = query("SELECT * FROM blog WHERE cat_articolo = {$_GET['id']}");
  conferma($artCategoria);

  while($row = fetchArray($artCategoria)){
    $cercaCategoriaBlog = titoloCatBlog($row['cat_articolo']);

      $artSingolaCat = <<<STRINGA_PDT
      <div class="col-md-4" >
                        <div class="item-box-blog">
                          <div class="item-box-blog-image">
                            <!--Date-->
                            <div class="item-box-blog-date bg-blue-ui white"> <span class="mon">{$row['date_art']}</span> </div>
                            <!--Image-->
                            <figure> <img alt="" src="risorse/img_blog/{$row['img_articolo']}"> </figure>
                          </div>
                          <div class="item-box-blog-body">
                            <!--Heading-->
                            <div class="item-box-blog-heading">
                              <a href="articolo.php?id={$row['id_articolo']}" tabindex="0">
                                <h5>{$row['titolo_art']}</h5>
                              </a>
                            </div>
                            <!--Data-->
                            <div class="item-box-blog-data" style="padding: 15px;">
                              <p>{$cercaCategoriaBlog}</p>
                            </div>
                            <!--Text-->
                            <div class="item-box-blog-text">
                            <p>{$row['descr_art']}</p>
                            </div>
                            <div class="mt"> <a href="articolo.php?id={$row['id_articolo']}" tabindex="0" class="btn bg-blue-ui white read">LEGGI TUTTO</a> </div>
                            <!--Read More Button-->
                          </div>
                        </div>
                      </div>    
      STRINGA_PDT;
      echo $artSingolaCat;
  }
}


function catalogoBlog (){

  $listaBlog = query("SELECT * FROM blog");
  conferma($listaBlog);

  while($row = fetchArray($listaBlog)){
    $cercaCategoriaBlog = titoloCatBlog($row['cat_articolo']);

      $lista = <<<CATALOGO
      <div class="col-md-4" >
                        <div class="item-box-blog">
                          <div class="item-box-blog-image">
                            <!--Date-->
                            <div class="item-box-blog-date bg-blue-ui white"> <span class="mon">{$row['date_art']}</span> </div>
                            <!--Image-->
                            <figure> <img alt="" src="risorse/img_blog/{$row['img_articolo']}"> </figure>
                          </div>
                          <div class="item-box-blog-body">
                            <!--Heading-->
                            <div class="item-box-blog-heading">
                              <a href="articolo.php?id={$row['id_articolo']}" tabindex="0">
                                <h5>{$row['titolo_art']}</h5>
                              </a>
                            </div>
                            <!--Data-->
                            <div class="item-box-blog-data" style="padding: 15px;">
                              <p>{$cercaCategoriaBlog}</p>
                            </div>
                            <!--Text-->
                            <div class="item-box-blog-text">
                            <p>{$row['descr_art']}</p>
                            </div>
                            <div class="mt"> <a href="articolo.php?id={$row['id_articolo']}" tabindex="0" class="btn bg-blue-ui white read">LEGGI TUTTO</a> </div>
                            <!--Read More Button-->
                          </div>
                        </div>
                      </div> 
      CATALOGO;
      echo $lista;
  }
}

function nomeCat_blog(){

  $nomeCategoria = query("SELECT name_blog, didascalia_blog FROM categorie_blog WHERE id_blog = {$_GET['id']}");

  while($row = fetchArray($nomeCategoria)){

    $mostraNome = <<<STRINGA
    <h3 class="text-center">Benvenuto nella sezione: </h3>
    <h2 class="text-center">{$row['name_blog']}</h2>
    <p class="lead">{$row['didascalia_blog']}</p>
    STRINGA;
    echo $mostraNome;
  }

}

function articoliAdmin(){

  $mostraArt = query("SELECT * FROM blog");
  conferma($mostraArt);

  while($row = fetchArray($mostraArt)){
    $cercaCategoriaBlog = titoloCatBlog($row['cat_articolo']);
    $cercaAutore = nomeAutoreBlog($row['autore']);

    $art_in_admin = <<<STRINGA
      <tr>
        <td>{$row['id_articolo']}</td>
        <td>{$row['titolo_art']}</td>
        <td><img src="../risorse/img_blog/{$row['img_articolo']}" alt="" style="width:62px;height:62px;">
        </td>
        <td>{$cercaCategoriaBlog}</td>
        <td>{$row['date_art']}</td>
        <td>{$cercaAutore}</td>
        <td><a class="btn btn-info" href="admin.php?modifica&id={$row['id_articolo']}" role="button">Modifica</a></td>
        <td><a class="btn btn-danger" href="../risorse/templates/back/cancella-articolo.php?id={$row['id_articolo']}" role="button">Cancella</a></td>
      </tr>
    STRINGA;
    echo $art_in_admin;
  }
}

function nuovoArticolo(){

  if(isset($_POST['nuovo'])){

    $titleArt = $_POST['titolo'];
    $catArt = $_POST['categoria_articolo'];
    $wall = $_POST['complete-text'];
    $littleText = $_POST['little-text'];
    $datePub = $_POST['date'];
    $author = $_POST['author'];
    $imgArt = $_FILES['immagine_articolo']['name']; 
    $imgRAM = $_FILES['immagine_articolo']['ram_name']; 

    move_uploaded_file($imgRAM, IMG_UPLOADS_2.DS.$imgArt);

    $newArt = query("INSERT INTO blog(titolo_art, cat_articolo, dettagli_art, descr_art, date_art, autore, img_articolo) VALUES('{$titleArt}', '{$catArt}', '{$wall}', '{$littleText}', '{$datePub}', '{$author}', '{$imgArt}')");
    conferma($newArt);
    creaAvviso("<div class='alert alert-success'>Un nuovo articolo è stato correttamente aggiunto!</div>");
    header("Location: admin.php?lista-articoli");

  }
}

function mostraCatArt(){

  $query = query("SELECT * FROM categorie_blog");
  conferma($query);

  while($row = fetchArray($query)){

    $cat_articolo = <<<STRINGA
    <option value="{$row['id_blog']}">{$row['name_blog']}</option>
    STRINGA;
    echo $cat_articolo;
  }
}

function mostraAutore(){

  $query = query("SELECT * FROM utenti");
  conferma($query);

  while($row = fetchArray($query)){

    $autore_articolo = <<<STRINGA
    <option value="{$row['id_utente']}">{$row['username']}</option>
    STRINGA;
    echo $autore_articolo;
  }
}

function modificaArticolo (){

  if(isset($_POST['aggiorna'])){

    $titleArt = $_POST['titolo'];
    $catArt = $_POST['categoria_articolo'];
    $wall = $_POST['complete-text'];
    $littleText = $_POST['little-text'];
    $datePub = $_POST['date'];
    $author = $_POST['author'];
    $imgArt = $_FILES['immagine_articolo']['name']; 
    $imgTemp = $_FILES['immagine_articolo']['tmp_name']; 

    if(empty($imgArt)){

      $cercaImgArt = query("SELECT img_articolo FROM blog WHERE id_articolo = {$_GET['id']}");
      conferma($cercaImgArt);

      while($row = fetchArray($cercaImgArt)){

        $imgArt = $row['img_articolo'];

      }

    }

    move_uploaded_file($imgTemp, IMG_UPLOADS_2.DS.$imgArt);

    $update = query("UPDATE blog SET titolo_art = '{$titleArt}', cat_articolo = '{$catArt}', dettagli_art = '{$wall}',
    descr_art = '{$littleText}', date_art = '{$datePub}', autore = '{$author}', img_articolo = '{$imgArt}' WHERE id_articolo = {$_GET['id']}");

    conferma($update);
    creaAvviso("<div class='alert alert-success'>Hai modificato correttamente!</div>");
    header("Location: admin.php?lista-articoli");

}

}


function categorieBlog(){

  $showCatBlog = query("SELECT * FROM categorie_blog");
  conferma($showCatBlog);

  while($row = fetchArray($showCatBlog)){

    $catID = $row['id_blog'];
    $catTitolo = $row['name_blog'];
    $didascaliaBlog = $row['didascalia_blog'];

    $cat_admin_blog = <<<STRINGA
    <tr>
        <td>{$catID}</td>
        <td>{$catTitolo}</td>
        <td>{$didascaliaBlog}</td>
       
        <td><a class="btn btn-danger" href="../../risorse/templates/back/cancella-cat-articoli.php?id={$row['id_blog']}" role="button">Cancella</a></td>
    </tr> 
    STRINGA;
    echo $cat_admin_blog;

  }
}

function aggiungiCat_blog(){

  if(isset($_POST['aggiungi_cat_blog'])){

    $nomeCat = $_POST['cat_nome_blog'];
    $testoBlog = $_POST['didascaliaBlog'];

    if(empty($nomeCat) || $nomeCat == ""){

      echo "<div class='alert alert-warning'>Questo campo non può essere vuoto!</div>";

    }else{

    $newCat = query("INSERT INTO categorie_blog(name_blog, didascalia_blog) VALUES('{$nomeCat}', '{$testoBlog}')");
    conferma($newCat);
    creaAvviso("<div class='alert alert-success'>Hai aggiunto una nuova categoria!</div>");

  }
}

}

?>