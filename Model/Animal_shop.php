<?php 

  class AnimalShop{

    public $name;
    public $price;
    public $medaglietta;
    public $hairAccessories;

    public function __construct( string $_name, int $_price, string $_medaglietta, string $_hairAccessories){
      
      $this->name = $_name;
      $this->price = "&euro;" . " " . $_price;
      $this->medaglietta = $_medaglietta;
      $this->hairAccessories = $_hairAccessories;
    }

    function getName(){
  
      return $this->name;
  
    }

    function getPrice(){
  
      return $this->price;
  
    }

  }


?>