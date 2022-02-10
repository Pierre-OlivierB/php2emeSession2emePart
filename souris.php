    <?php
// require "Historique.php";

$n=1;

include('session.php');

// $_SESSION['historique']=$n;
$retour=$n;

// $retour=$_SESSION['historique']='souris';
?>

<h1>Souris</h1>
    <p>
        <a href="accueil.php?retour=<?=$retour?>">Retour</a>
    </p>