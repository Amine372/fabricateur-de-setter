<?php
require_once(__DIR__.'Model_fabricateur.php');
class Manager_fabricateur
{

  protected $_classe;
  protected $_attributs;
  public function fabricateur($classe,$attributs)
  {
    transformation($classe,$attributs);
    fichier($classe);

  }
    public function transformation($classe,$attributs)
    {

        $att =  explode ( string " " , string $attributs ) : array;
        $classe_attributs = [$classe,$att];
        return $classe_attributs;
      }
      public function fichier($classe)
      {
        $classe = $classe + ".php";
        $res = fopen($classe, 'w');
        fclose($res);
        }

}
 ?>
