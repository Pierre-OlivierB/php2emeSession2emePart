<?php
// require "Historique.php";
// include('session.php');
// $_SESSION['historique']=$n;
// $_SESSION['historique']='alteres';
// $page=$_SESSION['historique'];
// visite($page);
include('session.php');
$retour= 'alteres';
// $retour= 'alteres'.$actuel;

//test marche:
// session_start(); 
// $n=3;
// $retour=$n;
?>

<h1>Alteres</h1>
<p>
    <a href='accueil.php?retour=<?=$retour?>'>Retour</a>
</p>
