    <?php
// require "Historique.php";

$n=2;

include('session.php');

// $retour=$_SESSION['historique']='robot';
// $_SESSION['historique']=$n;
$retour=$n;
?>

<h1>Robot</h1>
    <p>
        <a href="accueil.php?retour=<?=$retour?>">Retour</a>
    </p>