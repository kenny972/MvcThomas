<?php

class UserManager {

  //Méthode qui retourne la connexion à la base de données

  public function getDb() {
    $db = new PDO('mysql:host=localhost;dbname=test', "", "");
    return $db;
  }

  //Méthode qui ajoute un utilisateur en base de données
  public function addUser(User $user) {
    $db = $this->getDb();
    $request = $db->prepare("INSERT INTO User (name, age) VALUES(:name, :age)");
    $request->execute([
      ":name"=> $user->getName(),
      ":age"=> $user->getAge()
    ]);
  }

  //Méthode récupère un utilisateur en base de données
  public function getUser($name) {
    $db = $this->getDb();

    $request = $db->prepare("SELECT * FROM User WHERE name= ?");
    $request->execute([$name]);

    $data = $request->fetch(PDO::FETCH_ASSOC);
    return $data;

  }
}

 ?>
