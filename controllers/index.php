<?php
// 1 Charger les classes et outils nécessaires
require_once("../model/UserManager.php");

require_once("../entities/User.php");

$UserManager = new UserManager();

// 2 Executer la logiques (if, variables, transformations...)

// l'utilisateur soumet un formualire d'inscription et on récupère ses données
  // $data = [
  //   "name" => "Victor",
  //   "age" => 30
  // ];
  // //Crée un objet utilisateur sur la base des données reçues
  // $user = new User($data);
  //
  // //Enregistre cet utilisateur dans notre base de données
  // $UserManager->addUser($user);

//On récupère un tableau contenant les infos utilisateur depuis la BD
$data  = $UserManager->getUser("Jean");
//On hydrate un objet avec ce tableau
$user = new User($data);

// 3 Afficher la vue
include "../views/indexVue.php";
 ?>
