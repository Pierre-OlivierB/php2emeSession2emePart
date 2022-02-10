    <?php
// require "Historique.php";
// include('session.php');
// $_SESSION['historique']=$n;
// $retour=$_SESSION['historique']='montre';

include('session.php');
$retour= 'montre'.$actuel;

// test marche:
// session_start(); 
// $n=7;
// $retour=$n;
?>

<h1>Montre</h1>
    <p>
        <a href="accueil.php?retour=<?=$retour?>">Retour</a>
    </p>