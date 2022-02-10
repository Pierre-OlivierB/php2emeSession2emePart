<?php
// require "Historique.php";
// include('session.php');
// $retour=$_SESSION['historique']='casque';
// $_SESSION['historique']=$n;

include('session.php');
$retour= 'casque';
// $retour= 'casque'.$actuel;


// test marche:
// $n=4;
// session_start(); 
// $retour=$n;
?>

<h1>Casque</h1>
    <p>
        <a href="accueil.php?retour=<?=$retour?>">Retour</a>
    </p>