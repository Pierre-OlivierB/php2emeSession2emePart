<?php
include('session.php');

$numArticle = array();

if (isset($_GET['retour'])) {
    $retour = $_GET['retour'];

    $numArticle[] = $actuel;

    if (!isset($_SESSION['test'])) {
        $_SESSION['test'] = array();
    }
    $message = $_SESSION['test'];

    if (isset($_SESSION['test'])) {
        if ($lookfor = array_search($retour, $message)) {
            $_SESSION['test'][$retour] = $actuel;
        }
        $_SESSION['test'][$retour] = $actuel;
    }
    if (!isset($_SESSION['test']) && is_array($_SESSION['test'])) {
        $_SESSION['test'] = $retour;
    }


    $message = array_reverse($_SESSION['test']);
    arsort($message);
    while (count($message) > 3) {

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
    if (isset($_GET['retour'])) {
        $numSees=count($message);
        $dernier = 'dernier article visité:';
        $derniers= 'derniers articles visités:';
        if($numSees==1)
        {
            $numSees.=" ".$dernier;
        }
        else
        {
            $numSees.=" ".$derniers;
        }
        echo "<h2 />$numSees</h2>";
        if (isset($_SESSION['test'])) {
            foreach ($message as $key => $value) {
                echo "<br />" . $key . " : " . $value . "<br />";
            }
        }
    }
    ?>

</body>

</html>