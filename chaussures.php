<?php
// require "Historique.php";

$n=5;

include('session.php');

// $_SESSION['historique']=$n;
$retour=$n;

// $retour=$_SESSION['historique']='chaussures';
?>

<h1>Chaussures</h1>
    <p>
        <a href="accueil.php?retour=<?=$retour?>">Retour</a>
    </p>
    <?php



?>
