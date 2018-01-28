<?php


class ObjectManager{

  private $db;

  public function __construct($db){

    $this->setDb($db);
  }

  public function setDb(PDO $db){
    $this->_db = $db;
  }

  public function add(Object $object){
      $prep = $this->_db->prepare('INSERT INTO object (name, price, category, nbreStock, image) VALUES (:name, :price, :category, :nbreStock, :image)');

      $prep->execute(array(
        ':name' => $object->getName(),
        ':price' => $object->getPrice(),
        ':category' => $object->getCategory(),
        ':nbreStock' => 0,
        ':image' => $object->getImage()
      ));
  }

  public function delete($id){
    $prep = $this->_db->prepare('DELETE FROM object WHERE id = :id');

    $prep->execute(array(':id' => $id));
  }
    
  public function getObject($id){
    $result = $this->_db->query('SELECT * FROM object WHERE id='.$id);
    return $result;
  }
    
  public function getList(){
    $result = $this->_db->query('SELECT * FROM object');
    return $result;
  }

  public function getListNonStock(){
    $result = $this->_db->query('SELECT * FROM object WHERE stock = 0');
    return $result;
  }

  public function getListCsgo(){
    $result = $this->_db->query('SELECT * FROM object WHERE category = "csgo"');
    return $result;
  }

  public function getListDota(){
    $result = $this->_db->query('SELECT * FROM object WHERE category = "dota"');
    return $result;
  }

  public function getListSteam(){
    $result = $this->_db->query('SELECT * FROM object WHERE category = "steamkey"');
    return $result;
  }

  public function updateNbreStock($id, $nbreStock){
    $this->_db->exec('UPDATE object SET nbreStock = '. $nbreStock .' WHERE id = ' . $id);
  }
    
  public function objectExist($id){
    $rep = $this->_db->prepare('SELECT COUNT(*) as nbre FROM object WHERE id = :id');
    $rep->execute(array(
      ':id' => $id
      ));
    return $rep;
  }

}

?>
