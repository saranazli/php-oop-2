<?php 

  class Shop{

    public $medaglietta;
    public $hairAccessories;

    public function __construct( string $_medaglietta, string $_hairAccessories){
      
      $this->medaglietta = $_medaglietta;
      $this->hairAccessories = $_hairAccessories;
    }
    
  }


?>