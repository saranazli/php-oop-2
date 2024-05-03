<?php 

  class AnimalShop{

    public $medaglietta;
    public $hairAccessories;

    public function __construct( string $_medaglietta, string $_hairAccessories){
      
      $this->medaglietta = $_medaglietta;
      $this->hairAccessories = $_hairAccessories;
    }

  }

  var_dump($AnimalShop);

?>