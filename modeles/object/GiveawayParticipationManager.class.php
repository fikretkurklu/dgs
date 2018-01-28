<?php

class GiveawayPartcipationManager{

  private $_db;

  public function __construct($db){
    $this->setDb($db);
  }

  public function setDb(PDO $db){
    $this->_db = $db;
  }

  public function add(GiveawayPartcipation $giveawayPartcipation){
    $req = $this->_db->prepare('INSERT INTO giveawayPartcipation (id, idUser, idGiveaway, tradeLink, nbreWatch) VALUES (:id, :idUser, :idGiveaway, :tradeLink, :nbreWatch)');

    $req->execute(array(
      ':id' => $commande->getId(),
      ':idUser' => $commande->getIdUser(),
      ':idGiveaway' => $commande->getIdGiveaway(),
      ':tradeLink' => $commande->getTradeLink(),
      ':nbreWatch' => $commande->getNbreWatch()
    ));
  }

  public function delete(Int $id){
    $req = $this->_db->prepare('DELETE FROM giveawayPartcipation WHERE idUser = ?');

    $req->execute(array('?' => $id));
  }

  }


 ?>
