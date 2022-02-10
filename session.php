<?php
// session_start(); 

// if (! isset($_SESSION["historique"]) ) {
   
 
//   //   - enregistrer la date/heure d’ouverture de la session. 
//   $_SESSION["historique"] = array(); 
//   //   - récupérer l’identifiant de la session (pour info). 
//   $session = session_id(); 
//   //   - préparer un message. 
//   $message = "Nouvelle session : $session - $n"; 
//   // var_dump($n);
// }
// if(isset($_SESSION['historique'][$n]))
// {
//   $_SESSION['historique'][$n]++;
// }
// else { 
//   if(isset($array))
//     {
//         $_SESSION['historique'][$n]=1;
//     }
//   // $n.=+$n;
//   $historique = $_SESSION["historique"]; 
//   //   - récupérer l’identifiant de la session (pour info). 
//   $session = session_id(); 

//   $_SESSION["historique"][] = $n; 
//   //   - préparer un message. 
//   $message = "Session déjà ouverte: $session - $n"; 
//   // var_dump($n);
// } 
// // Détermination de la date et de l’heure actuelle (pas celle 
// // de l’ouverture de la session). 
// $actuel = 'Nous sommes le '.date('d/m/Y').' ; il est '.date('H:i:s');

// $pages=[
//   1=>"souris",
//   2=>"robot",
//   3=>"alteres",
//   4=>"casque",
//   5=>"chaussures",
//   6=>"bracelet",
//   7=>"montre",
// ];

// if (isset ($pages[$n])){
//   echo $pages[$n];
// }
// $test=$pages[$n];

session_start(); 
// Tester si la session est nouvelle (cad ouverte par 
// l’appel session_start() ci-dessus) ou ancienne (cad ouverte 
//par un appel antérieur à session_start()). 
// Le mieux est de tester si une de nos variables de session 
// est déjà enregistrée. 
if (! isset($_SESSION["date"]) ) { 
  // Variable "date" pas encore enregistrée. 
  // => nouvelle session. 
  // => ouvrir la session au niveau applicatif. 
  // Pour cet exemple : 
  //   - déterminer la date/heure d’ouverture de la session. 
  $date = date('\l\e d/m/Y à H:i:s'); 
  //   - enregistrer la date/heure d’ouverture de la session. 
  $_SESSION["date"] = $date; 
  //   - récupérer l’identifiant de la session (pour info). 
  $session = session_id(); 
  //   - préparer un message. 
  $message = "Nouvelle session : $session - $date"; 
} else { 
  // Variable "date" déjà enregistrée. 
  // => ancienne session. 
  // => récupérer les variables de session utilisées  
  //    dans ce script. 
  // Pour cet exemple : 
  //   - date/heure d’ouverture de la session. 
  $date = $_SESSION["date"]; 
  //   - récupérer l’identifiant de la session (pour info). 
  $session = session_id(); 
  //   - préparer un message. 
  $message = "Session déjà ouverte: $session - $date"; 
} 
// Détermination de la date et de l’heure actuelle (pas celle 
// de l’ouverture de la session). 
$actuel = ' à '.date('H:i:s'); 
?>