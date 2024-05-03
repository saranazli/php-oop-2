<?php 

  class Cat extends AnimalShop{

    public $catHygenProducts;
    public $catDresses;

    public function __construct ( string $_medaglietta, string $_hairAccessories, string $_catHygenProducts, string $_catDresses ){

      parent::__construct($_medaglietta, $_hairAccessories);

      $this->catHygenProducts = $_catHygenProducts;
      $this->catDresses = $_catDresses;


    }
  }

?>