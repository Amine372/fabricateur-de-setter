<?php
require_once(__DIR__.'Model_fabricateur.php');
class Manager_fabricateur
{

  protected $_classe;
  protected $_attributs;
  protected $classe_attributs;

  public function fabricateur($classe,$attributs)
  {
    transformation($classe,$attributs);


  }
    public function transformation($classe,$attributs)
    {

        $att =  explode ( string ";" , string $attributs ) : array
        $classe_attributs = [$classe,$att]
        return $classe_attributs;
      }

}
 ?>
