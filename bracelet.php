<?php
// require "Historique.php";

$n=6;

include('session.php');

// $_SESSION['historique']=$n;
$retour=$n;

// $retour=$_SESSION['historique']='bracelet';
?>

<h1>Bracelet</h1>
    <p>
        <a href="accueil.php?retour=<?=$retour?>">Retour</a>
    </p>
