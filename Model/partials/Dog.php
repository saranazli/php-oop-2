
<?php 

  class Dog extends AnimalShop {

    public $toys;
    public $bones;

    public function __construct ( string $_name, int $_price, string $_medaglietta, string $_hairAccessories, string $_toys, string $_bones){

      parent::__construct ( $_name, $_price, $_medaglietta, $_hairAccessories);

      $this->toys = $_toys;
      $this->bones = $_bones;
      
    }

  }

?>