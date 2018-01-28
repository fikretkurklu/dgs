<?php


class GiveawayManager{

  private $db;

  public function __construct($db){

    $this->setDb($db);
  }

  public function setDb(PDO $db){
    $this->_db = $db;
  }

  public function add(Giveaway $giveaway){
      $prep = $this->_db->prepare('INSERT INTO giveaway (name, minimumUser, participation, isAvailable) VALUES (:name, :minimumUser, :participation, :isAvailable)');

      $prep->execute(array(
        ':name' => $giveaway->getName(),
        ':minimumUser' => $giveaway->getMinimumUser(),
        ':participation' => $giveaway->getParticipation(),
        ':isAvailable' => $giveaway->getIsAvailable()
      ));
  }

  public function delete($id){
    $prep = $this->_db->prepare('DELETE FROM giveaway WHERE id = :id');

    $prep->execute(array(':id' => $id));
  }

  public function getList(){
    $result = $this->_db->query('SELECT * FROM giveaway WHERE isAvailable = True');
    return $result;
  }


}

?>
