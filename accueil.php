<?php
include('session.php');

$numArticle=array();

if(isset($_GET['retour']))
    {
        $retour=$_GET['retour'];


        $numArticle[]=$actuel;

        var_dump($numArticle);

        

        if(!isset($_SESSION['test']))
        {
            $_SESSION['test']=array();
           
        }
        $message=$_SESSION['test'];
  
        $lookfor = array_search($retour,$message);
        echo "<br />".$lookfor."<br />";

        if(isset($_SESSION['test']))
        {
            if ($lookfor = array_search($retour,$message)) {
                echo $lookfor;
            }

            $_SESSION['test'][]=$retour;

        }
        if(!isset($_SESSION['test']) && is_array($_SESSION['test']))
        {
            $_SESSION['test']=$retour;

        }
        
        
        $message=array_reverse($_SESSION['test']);
        while(count($message)>3)
        {

            $longueur=array_pop($message);
        }
       var_dump($message);

        foreach ($message as $key=> $value)
        {
            echo "<br />".$value."<br />";

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

    ?>

</body>
</html>