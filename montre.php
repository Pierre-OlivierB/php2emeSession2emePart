    <?php
// require "Historique.php";

$n=7;

include('session.php');

// $_SESSION['historique']=$n;
$retour=$n;

// $retour=$_SESSION['historique']='montre';
?>

<h1>Montre</h1>
    <p>
        <a href="accueil.php?retour=<?=$retour?>">Retour</a>
    </p>