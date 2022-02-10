    <?php
// require "Historique.php";
// include('session.php');
// $retour=$_SESSION['historique']='robot';
// $_SESSION['historique']=$n;

include('session.php');
$retour= 'robot';
// $retour= 'robot'.$actuel;

//test marche:
// session_start(); 
// $n=2;
// $retour=$n;
?>

<h1>Robot</h1>
    <p>
        <a href="accueil.php?retour=<?=$retour?>">Retour</a>
    </p>