<?php 

session_start();

?>

<!DOCTYPE html>
<html lang="it">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Tasogare Area Admin</title>

    <!-- CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">

    <!-- Custom CSS -->
    <link href="css/custom-admin.css" rel="stylesheet">
<!-- Google Fonts -->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Caudex:wght@400;700&display=swap" rel="stylesheet">
    <!--  material icon-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
    rel="stylesheet">

    <!-- CDN per l'editor di testo presente nella pagina Admin;-->
    <script src="//cdn.ckeditor.com/4.16.0/full/ckeditor.js"></script>
    

</head>

<body>

<nav class="navbar navbar-light" style="background-color:transparent;">
  <div class="navbar-header">
    <img src="../img/pesci.svg" width="110"><a href="admin.php">Tasogare Admin</a>
      <a class="navbar-brand" href="../index.php">Visita il Sito</a>
    </div>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="material-icons ">account_circle</i>
        <?php

        if(isset($_SESSION['username'])){

          echo 'Ciao, '.$_SESSION['username'];

        }else{
          echo "<div class='alert alert-warning'>Utente non riconosciuto</div>";
        }


         ?> <b class="caret"></b>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="logout.php"><i class="material-icons">power_settings_new</i> Log Out</a>
        </div>
      </li>
    </ul>
  </div>
</nav>