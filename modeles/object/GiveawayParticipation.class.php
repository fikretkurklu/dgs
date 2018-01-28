<?php

class GiveawayParticipation{

  //ATTRIBUTS
  
  private $_id;
  private $_idUser;
  private $_idGiveaway;
  private $_tradeLink;
  private $_nbreWatch;

  //MagicFUNCTION

  public function __construct($donnee){
      $this->hydrate($donnee);
  }

  public function hydrate(Array $donnee){
    foreach ($donnee as $key => $value) {
      $method = "set".ucfirst($key);

      if(method_exists($this, $method)){
        $this->$method($value);
      }
    }
  }

  //GETTERS
    
  public function getId(){
      return $this->_id;
  }

  public function getIdUser(){
    return $this->_idUser;
  }

  public function getIdGiveaway(){
    return $this->_idGiveaway;
  }

  public function getTradeLink(){
    return $this->_tradeLink;
  }
    
  public function getNbreWatch(){
    return $this->_nbreWatch;
  }


  //SETTER
    
  public function setId($id){
    $this->_id = $id;
  }

  public function setIdUser($id){
    $this->_idUser = $id;
  }
  
  public function setIdGiveaway($idGiveaway){
    $this->_idGiveaway = $idGiveaway;
  }
    

  public function setTradeLink($tradeLink){
    if(is_string($tradeLink)){
      $this->_tradeLink = $tradeLink;
    }
  }
    
  public function setNbreWatch($nbreWatch){
      $this->_nbreWatch = $nbreWatch;
  }
    

}

?>
