<?php

class UserManager{

  //ATTRIBUTS

  private $_db;

  //METHODS

  public function __construct($db){
    $this->setDb($db);
  }

  public function setDb(PDO $db){
    $this->_db = $db;
  }

  public function add(User $user){
      
        $prep = $this->_db->prepare('INSERT INTO user (name, communityURL, nbreDiamonds, steamid, avatar, referralLink, miniAvatar, affiliated) VALUES (:name, :communityURL, :nbreDiamonds, :steamid, :avatar, :referralLink, :miniAvatar, :affiliated)');
    
        $prep->execute(array(
            ':name' => $user->getName(),
            ':communityURL' => $user->getCommunityURL(),
            ':nbreDiamonds' => $user->getNbreDiamonds(),
            ':steamid' =>$user->getSteamid(),
            ':avatar' =>$user->getAvatar(),
            ':referralLink' => $user->getReferralLink(),
            ':miniAvatar' => $user->getMiniAvatar(),
            ':affiliated' => $user->getAffiliated()
        ));
  }

  public function delete($id){
    $prep = $this->_db->prepare('DELETE FROM user WHERE id = :id');

    $prep->execute(array(':id' => $id));
  }

  public function updateDiamond($user){
    $prep = $this->_db->prepare('UPDATE user SET nbreDiamonds = :nbreDiamonds WHERE steamid = :steamid');

    $prep->execute(array(
        ':nbreDiamonds' => $user->getNbreDiamonds(),
        ':steamid' => $user->getSteamid()
        ));
    
  }

  
  public function getUserByReferralLink($referralLink){
    $rep = $this->_db->prepare('SELECT * FROM user WHERE referralLink = :referralLink');
    $rep->execute(array(
        ':referralLink' => $referralLink
      )); 
    return $rep;
  }

   public function getUser($steamid){
    $rep = $this->_db->prepare('SELECT * FROM user WHERE steamid = :steamid');
    $rep->execute(array(
      ':steamid' => $steamid
      ));
    
    return $rep;
  }
  
  public function getUserBySteamId($steamid){
    $rep = $this->_db->prepare('SELECT COUNT(*) as nbre FROM user WHERE steamid = :steamid');
    $rep->execute(array(
        ':steamid' => $steamid
    ));
    return $rep;
  }

  public function getList(){
    $rep = $this->_db->query('SELECT * FROM user');
    return $rep;
  }

  public function getId($communityURL){
    $rep = $this->_db->prepare('SELECT id FROM user WHERE communityURL = :communityURL');
    $rep->execute(array(
        ':communityURL' => $communityURL
    ));
    
    return $rep;
  }

  public function updateName($name, $steamid){
    
    $req = $this->_db->prepare('UPDATE user SET name = :name WHERE steamid = :steamid');
    $req->execute(array(
        ":name" => $name,
        ":steamid" => $steamid
    ));
  }

  public function updateAvatar($avatar, $steamid){
    
    $req = $this->_db->prepare('UPDATE user SET avatar = :avatar WHERE steamid = :steamid');
    $req->execute(array(
        ":avatar" => $avatar,
        ":steamid" => $steamid
    ));
  }

  public function updateAffiliated($affiliated, $steamid){
    
    $req = $this->_db->prepare('UPDATE user SET affiliated = :affiliated WHERE steamid = :steamid');
    $req->execute(array(
        ":affiliated" => $affiliated,
        ":steamid" => $steamid
    ));
  }

  public function updateMiniAvatar($miniAvatar, $steamid){

    $req = $this->_db->prepare('UPDATE user SET miniAvatar = :miniAvatar WHERE steamid = :steamid');
    $req->execute(array(
        ':miniAvatar' => $miniAvatar,
        ':steamid' => $steamid
      ));
  }

  public function updateTradeLink($steamid, $tradeLink){

    $req = $this->_db->prepare('UPDATE user SET tradeLink = :tradeLink WHERE steamid = :steamid');
    $req->execute(array(
        ":tradeLink" => $tradeLink,
        ":steamid" => $steamid
    ));
  }

  public function updateCommunityURL($steamid, $communityURL){
    $req = $this->_db->prepare('UPDATE user SET communityURL = :communityURL WHERE steamid = :steamid');
    $req->execute(array(
        ":communityURL" => $communityURL,
        ":steamid" => $steamid
    ));
  }

  public function tradeLinkIsExist($tradeLink){

    $req = $this->_db->prepare('SELECT COUNT(*) as nbre FROM user WHERE tradeLink = :tradeLink');
    $req->execute(array(
        ':tradeLink' => $tradeLink
      ));
    
    return $req;
  }

  public function referralLinkIsExist($referralLink){

    $req = $this->_db->prepare('SELECT COUNT(*) as nbre FROM user WHERE referralLink = :referralLink');
    $req->execute(array(
        ':referralLink' => $referralLink
      ));
    
    return $req;
  }

  public function addingReferralLink($steamid, $referralLink){

    $req = $this->_db->prepare('UPDATE user SET code = :code WHERE steamid = :steamid');
    $req->execute(array(
        ':code' => $referralLink,
        ':steamid' => $steamid
      ));

  }
  
}