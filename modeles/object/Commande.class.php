<?php

class Commande{

  //ATTRIBUTS
  
  private $_id;
  private $_idUser;
  private $_idCommande;
  private $_tradeLink;
  private $_commandeType;
  private $_commandeOk = false;

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

  public function getIdCommande(){
    return $this->_idCommande;
  }

  public function getTradeLink(){
    return $this->_tradeLink;
  }
    
  public function getCommandeType(){
    return $this->_commandeType;
  }
  
  public function getCommandeOk(){
    return $this->_commandeOk;
  }

  //SETTER
    
  public function setId($id){
    $this->_id = $id;
  }

  public function setIdUser($id){
    $this->_idUser = $id;
  }
  
  public function setIdCommande($idCommande){
    $this->_idCommande = $idCommande;
  }
    
  public function setCommandeType($commandeType){
    $this->_commandeType = $commandeType;
  }
  

  public function setTradeLink($tradeLink){
    if(is_string($tradeLink)){
      $this->_tradeLink = $tradeLink;
    }
  }
    
  public function setCommandeOk($commandeOk){
      $this->_tradeLink = $commandeOk;
  }
    

}

?>
