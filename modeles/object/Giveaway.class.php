<?php


class Giveaway{

  private $_id;
  private $_name;
  private $_minimumUser;
  private $_participation;
  private $_isAvailable;

  public function __construct($array){

    $this->hydrate($array);
  }

  public function hydrate($donnee){
    foreach ($donnee as $key => $value) {
      $method = "set".ucfirst($key);

      if(method_exists($this, $method)){
        $this->$method($value);
      }
    }
  }

  public function getId(){
    return $this->_id;
  }

  public function getName(){
    return $this->_name;
  }

  public function getMinimumUser(){
    return $this->_minimumUser;
  }

  public function getParticipation(){
    return $this->_price;
  }

  public function getIsAvailable(){
    return $this->_isAvailable;
  }

  //SETTER

  public function setId($id){
    $this->_id = $id;
  }

  public function setName($name){
    if(is_string($name)){
      $this->_name = $name;
    }
  }

  public function setMinimumUser($minimumUser){
    $this->_minimumUser = $minimumUser;
  }

  public function setParticipation($participation){
    $this->_participation = $participation;
  }

  public function setIsAvailable($isAvailable){
    $this->_isAvailable = $isAvailable;
  }

}

 ?>
