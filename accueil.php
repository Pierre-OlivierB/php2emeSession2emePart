<?php
include('session.php');

//instanciation d'un tableau
$numArticle = array();
//instanciation d'une constante
const NMB_SEES=3;

//si il y a eu une visite
if (isset($_GET['retour'])) {
    //j'attrappe la visite
    $retour = $_GET['retour'];

    //j'insère mon timestamp actuel dans le tableau instancié au début
    $numArticle[] = $actuel;

    //si ma session n'est pas instancier,
    //alors ma session, ici que j'appelle test, est un tableau
    if (!isset($_SESSION['test'])) {
        $_SESSION['test'] = array();
    }
    //j'attrappe mon tableau que je lie à une variable
    $message = $_SESSION['test'];

    //si ma session est instanciée
    if (isset($_SESSION['test'])) {
        //je regarde dans mon tableau si le nom de la page retournée est présente
        //si c'est le cas, on ne modifie que le timestamp 
        if ($lookfor = array_search($retour, $message)) {
            $_SESSION['test'][$retour] = $actuel;
        }
        $_SESSION['test'][$retour] = $actuel;
    }
    //si ma session est instanciée mais n'a pas de valeur insérée.
    //condition de ma première visite
    if (!isset($_SESSION['test']) && is_array($_SESSION['test'])) {
        $_SESSION['test'] = $retour;
    }

    //j'attrappe mon tableau de visites, dont j'inverse le sens
    $message = array_reverse($_SESSION['test']);
    //je range mon tableau selon le timestamp
    arsort($message);
    //je compte le nombre de valeurs définie par ma costante dans le tableau
    while (count($message) > NMB_SEES) {
        //j'enlève le reste tant que je suis audessus de ma constante
        $longueur = array_pop($message);
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <ul>
        <li><a href="souris.php">Souris</a></li>
        <li><a href="robot.php">Robot</a></li>
        <li><a href="alteres.php">Altères</a></li>
        <li><a href="casque.php">Casque</a></li>
        <li><a href="chaussures.php">Chaussures</a></li>
        <li><a href="bracelet.php">Bracelet</a></li>
        <li><a href="montre.php">Montre</a></li>
    </ul>


    
    <?php
    //si il a eu une visite
    if (isset($_GET['retour'])) {
        //je compte le nombre de messages affichés
        $numSees=count($message);
        //j'instancie 2 variables correspondantes
        $dernier = 'dernier article visité:';
        $derniers= 'derniers articles visités:';
        //je concatène la variable à mon compteur correspondant
        if($numSees==1)
        {
            $numSees.=" ".$dernier;
        }
        else
        {
            $numSees.=" ".$derniers;
        }
        //j'affiche dans mon titre s'il y a eu une visite
        echo "<h2 />$numSees</h2>";
        //j'affiche mon historique de visites de pages
        if (isset($_SESSION['test'])) {
            foreach ($message as $key => $value) {
                echo "<br />" . $key . " : " . $value . "<br />";
            }
        }
    }
    ?>

</body>

</html>