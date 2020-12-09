<?php
require_once(__DIR__.'Model_fabricateur.php');
class Manager_fabricateur
{

  protected $_classe;
  protected $_attributs;
  public function fabricateur($classe,$attributs)
  {
    transformation($classe,$attributs);


  }
    public function transformation($classe,$attributs)
    {

        $att =  explode ( string ";" , string $attributs ) : array;
        $classe_attributs = [$classe,$att];
        return $classe_attributs;
      }
      public function fichier()
      {

          $res = fopen('test.txt', 'w');
          fwrite($res,"Mon texte");
          fclose($res);
        }

}
 ?>
