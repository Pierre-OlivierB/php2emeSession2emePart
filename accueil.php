<?php 
include"session.php";

$_SESSION["visites"] = [
    'souris'=>1528723031,
    'casque'=>1528723027,
    'chaussures'=>1528723021,
    'robot'=>1528723018,
    'alteres'=>1528723036,
    'bracelet'=>1528723033,
    'montre'=>1528723035
];

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
        echo '<br />';
        echo 'Bonjour ',$_SESSION["nom"],'<br />'; 
        echo 'session_id() = ',session_id(),'<br />'; 
    ?>

</body>
</html>