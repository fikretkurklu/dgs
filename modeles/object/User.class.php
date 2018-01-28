<?php

/*
* Class User 
*/

class User{

  //ATTRIBUTS

  private $_id;
  private $_steamid;
  private $_tradeLink;
  private $_name;
  private $_communityURL;
  private $_avatar;
  private $_referralLink;
  private $_nbreDiamonds = 0;
  private $_code;
  private $_miniAvatar;
  private $_affiliated = False;

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

  public function getAffiliated(){
    return $this->_affiliated;
  }

  public function getMiniAvatar(){
    return $this->_miniAvatar;
  }

  public function getCode(){
    return $this->_code;
  }

  public function getReferralLink(){
    return $this->_referralLink;
  }
  public function getAvatar(){
    return $this->_avatar;
  }

  public function getId(){
    return $this->_id;
  }

  public function getName(){
    return $this->_name;
  }

  public function getCommunityURL(){
    return $this->_communityURL;
  }

  public function getNbreDiamonds(){
      return $this->_nbreDiamonds;
  }
  
  public function getTradeLink(){
    return $this->_tradeLink;
  }
  
  public function getSteamid(){
    return $this->_steamid;
  }


  //SETTER

  public function setAffiliated($affiliated){
    return $this->_affiliated = $affiliated;
  }

  public function setMiniAvatar($miniAvatar){
    return $this->_miniAvatar = $miniAvatar;
  }

  public function setCode($code){
    $this->_code = $code;
  }

  public function setReferralLink($referralLink){
    $this->_referralLink = $referralLink;
  }

  public function setAvatar($avatar){
    $this->_avatar = $avatar;
  }
  
  public function setSteamid($steamid){
    $this->_steamid = $steamid;
  }
  
  public function setTradeLink($tradeLink){
    $this->_tradeLink = $tradeLink;
  }

  public function setId($id){
      $this->_id = $id;
  }

  public function setName($name){
    if(is_string($name)){
      $this->_name = $name;
    }
  }

  public function setCommunityURL($communityURL){
    if(is_string($communityURL)){
      $this->_communityURL = $communityURL;
    }
  }

  public function setNbreDiamonds($nbreDiamonds){
      $this->_nbreDiamonds = $nbreDiamonds;
  }
  
  
}

 ?>
