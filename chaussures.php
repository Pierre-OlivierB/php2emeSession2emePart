<?php
// require "Historique.php";
// include('session.php');
// $_SESSION['historique']=$n;
// $retour=$_SESSION['historique']='chaussures';

include('session.php');
$retour= 'chaussures'.$actuel;

// test marche:
// session_start(); 
// $n=5;
// $retour=$n;

?>

<h1>Chaussures</h1>
    <p>
        <a href="accueil.php?retour=<?=$retour?>">Retour</a>
    </p>
    <?php



?>
