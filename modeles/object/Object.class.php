<?php


class Object{

  private $_id;
  private $_name;
  private $_price;
  private $_category;
  private $_nbreStock;
  private $_image;

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

  public function getImage(){
    return $this->_image;
  }

  public function getName(){
    return $this->_name;
  }

  public function getPrice(){
    return $this->_price;
  }

  public function getNbreStock(){
    return $this->_nbreStock;
  }

  public function getCategory(){
    return $this->_category;
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

  public function setImage($image){
      $this->_image = $image;
  }

  public function setNbreStock($nbreStock){
      $this->_nbreStock = $nbreStock;
  }

  public function setPrice($price){
    if(is_string($price)){
      $this->_price = $price;
    }
  }

  public function setCategory($category){
      $this->_category = $category;
  }

}

 ?>
