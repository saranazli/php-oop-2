
<?php 

  class Dog extends AnimalShop {

    use Category;
    public $toys;
    public $bones;

    public function __construct (string $_img, string $_name, int $_price, string $_medaglietta, string $_hairAccessories, string $_toys, string $_bones){

      parent::__construct ($_img, $_name, $_price, $_medaglietta, $_hairAccessories);

      $this->toys = $_toys;
      $this->bones = $_bones;
      
    }

  }

?>