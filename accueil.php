<?php
include('session.php');

if(isset($_GET['retour']))
    {
        $retours=$_GET['retour'];
        $retour=array();
        $retour=array($retours=>$actuel);


        // var_dump($retour);
        // $pages=[
        //     1=>"souris",
        //     2=>"robot",
        //     3=>"alteres",
        //     4=>"casque",
        //     5=>"chaussures",
        //     6=>"bracelet",
        //     7=>"montre",
        // ];

        if(!isset($_SESSION['test']))
        {
            $_SESSION['test']=array();
            // echo "test init";
        }
        if(isset($_SESSION['test']))
        {

            $_SESSION['test'][]=$retour;
            // array_unshift($_SESSION['test'],$retour);
            
            // echo "test set";
        }
        if(!isset($_SESSION['test']) && is_array($_SESSION['test']))
        {
            $_SESSION['test']=$retour;
            // echo "test 1";
        }
        $message=$_SESSION['test'];
        
        $message=array_reverse($_SESSION['test']);
        while(count($message)>3)
        {
            // echo "ok";
            // echo 'Nmb :'.count($message).'<br />';
            $longueur=array_pop($message);
        }
       

        foreach ($message as $key=> $value)
        {
            foreach($value as $k=>$v)
            {
              echo ($k." : ".$v.'<br />');  
            }
            
            // var_dump($key);
            // var_dump($value);
        }
        // print_r($message);
        // var_dump($message);
        // unset($longueur);
    }
    // var_dump($_SESSION['test']);

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
    // $n=$_GET['retour'];
    // require_once("Historique.php");
    // include('session.php');
    
    // // if(isset($_SESSION['historique'])){
    // //     echo $_SESSION['historique'], '<br />';
    // //     $_SESSION['historique']+=$_SESSION['historique'];
    // // }

    // // $histoire=array();
    // if(isset($_SESSION['historique'])){
    //     // echo $_SESSION['historique'];
    //     $n=$_SESSION['historique'];
        // $hist='';
        // $m[$_SESSION['historique']]=$hist;
        // echo $hist;
        // Historique::$test=$test;
        // visite($test);
        // echo $m[2];
    // }

//     $stack = array("orange", "banana", "apple", "raspberry");
// $fruit = array_pop($stack);
// print_r($stack);
    ?>

</body>
</html>