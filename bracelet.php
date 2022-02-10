<?php
// require "Historique.php";
// include('session.php');
// $_SESSION['historique']=$n;
// $retour=$_SESSION['historique']='bracelet';

include('session.php');
$retour= 'bracelet';
// $retour= 'bracelet'.$actuel;

//test marche:
// $n=6;
// session_start(); 
// $retour=$n;
?>

<h1>Bracelet</h1>
    <p>
        <a href="accueil.php?retour=<?=$retour?>">Retour</a>
    </p>
