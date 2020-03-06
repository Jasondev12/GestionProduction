<?php
//Attribution des variables de session
$lvl=(isset($_SESSION['level']))?(int) $_SESSION['level']:1;
$id=(isset($_SESSION['id']))?(int) $_SESSION['id']:0;
$pseudo=(isset($_SESSION['pseudo']))?$_SESSION['pseudo']:'';
?>


<body>
<div class="nav">
    <h1 class="titrenav">Gestion de production</h1>
<div class="bouton-nav">
    <a href="#">Accueil</a>
    <a href="#">Nouvelle production</a>
    <a href="#">Historique</a>
    <a href="#">Administration</a>
    <a href="#">Déconnexion</a>
</div>
</div>
