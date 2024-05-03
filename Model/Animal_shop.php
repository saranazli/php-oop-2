<?php 

  class AnimalShop{

    public $price;
    public $medaglietta;
    public $hairAccessories;

    public function __construct( int $_price, string $_medaglietta, string $_hairAccessories){
      
      $this->price = $_price
      $this->medaglietta = $_medaglietta;
      $this->hairAccessories = $_hairAccessories;
    }

  }

  var_dump($AnimalShop);

?>