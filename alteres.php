<?php
// require "Historique.php";

$n=3;
include('session.php');

// $_SESSION['historique']=$n;
$retour=$n;

// $_SESSION['historique']='alteres';
// $page=$_SESSION['historique'];
// visite($page);
?>

<h1>Alteres</h1>
<p>
    <a href='accueil.php?retour=<?=$retour?>'>Retour</a>
</p>
