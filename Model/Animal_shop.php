<?php 

  class AnimalShop{

    public $img;
    public $name;
    public $price;
    public $medaglietta;
    public $hairAccessories;

    public function __construct( string $_img, string $_name, int $_price, string $_medaglietta, string $_hairAccessories){
      
      $this->img = $_img;
      $this->name = $_name;
      $this->price = "&euro;" . " " . $_price;
      $this->medaglietta = $_medaglietta;
      $this->hairAccessories = $_hairAccessories;
    }

    function getImg(){
  
      return $this->img;
  
    }

    function getName(){
  
      return $this->name;
  
    }

    function getPrice(){
  
      if(!is_numeric($this->price)){
        throw new Exception('non è un prezzo valido');
      }
      return $this->price;
  
    }

    function getMedaglietta(){
  
      return $this->medaglietta;
  
    }

    function getHair(){
  
      return $this->hairAccessories;
  
    }

  }

  trait Category{

    public $category;

    public function __construct(string $_category){

      $this->category = $_category;
      
    }

    public function getCategory(){

      return $this->category;
    }
  }

?>