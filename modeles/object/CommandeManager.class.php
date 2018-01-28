<?php

class CommandeManager{

  private $_db;

  public function __construct($db){
    $this->setDb($db);
  }

  public function setDb(PDO $db){
    $this->_db = $db;
  }

  public function add(Commande $commande){
    $req = $this->_db->prepare('INSERT INTO commande (id, idUser, idCommande, tradeLink, commandeType, commandeOk) VALUES (:id, :idUser, :idCommande, :tradeLink, :commandeType, :commandeOk)');

    $req->execute(array(
      ':id' => $commande->getId(),
      ':idUser' => $commande->getIdUser(),
      ':idCommande' => $commande->getIdCommande(),
      ':tradeLink' => $commande->getTradeLink(),
      ':commandeType' => $commande->getCommandeType(),
      ':commandeOk' => $commande->getCommandeOk()
    ));
  }

  public function delete(Int $id){
    $req = $this->_db->prepare('DELETE FROM commande WHERE idUser = ?');

    $req->execute(array('?' => $id));
  }

  public function getList(){
    $req = $this->_db->query('SELECT * FROM commande');

    return $req;
  }
    
  public function getListCommandeNotOk(){
      $req = $this->_db->query('SELECT * FROM commande WHERE commandeOk = false');
      
      return $req;
  }

  public function getListById($id){
    $req = $this->_db->prepare("SELECT * FROM commande WHERE idCommande = :id");
    $req->execute(array(':id' => $id));
    return $req;
  }
  
  public function getListByType($giveawayType){
    $req = $this->_db->prepare("SELECT * FROM commande WHERE commandeType = :commandeType");
    $req->execute(array(':commandeType' => $commandeType));
    return $req;
  }

  public function alreadyAvoid($idUser, $idCommande){
    $req = $this->_db->prepare("SELECT COUNT(*) as nbre FROM commande WHERE idUser = :id AND idCommande = :idCommande");
    $req->execute(array(':id' => $idUser, ':idCommande' => $id));
    return $req;
  }
    
  public function updateOk($id){
    
    $this->_db->exec('UPDATE commande SET commandeOk = 1 WHERE id = ' . $id);
  
  }
}


 ?>
