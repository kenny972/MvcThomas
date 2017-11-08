<?php

class User {

  protected $name;
  protected $age;


  //Setters
  public function setName($name){
    $this->name = $name;
  }

  public function setAge($age){
    $this->age = $age;
  }

  //Getters

  public function getName() {
    return $this->name;
  }

  public function getAge() {
    return $this->age;
  }

  public function __construct(array $data) {
    foreach ($data as $key => $value) {
      $method = "set" . ucfirst($key);
      if(method_exists($this, $method)) {
        $this->$method($value);
      }
    }
  }
}


 ?>
