<?php
// require "Historique.php";

$n=4;

include('session.php');

// $retour=$_SESSION['historique']='casque';
// $_SESSION['historique']=$n;
$retour=$n;
?>

<h1>Casque</h1>
    <p>
        <a href="accueil.php?retour=<?=$retour?>">Retour</a>
    </p>