    <?php
// require "Historique.php";
// include('session.php');
// $_SESSION['historique']=$n;
// $retour=$_SESSION['historique']='souris';



include('session.php');
$retour= 'souris';
// $retour= 'souris'.$actuel;


//test marche:
// session_start(); 
// $n=1;
// $retour=$n;
?>

<h1>Souris</h1>
    <p>
        <a href="accueil.php?retour=<?=$retour?>">Retour</a>
    </p>