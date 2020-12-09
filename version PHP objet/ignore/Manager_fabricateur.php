<?php
require_once(__DIR__.'Model_fabricateur.php');
class Manager_fabricateur
{

  protected $_classe;
  protected $_attributs;
  public function fabricateur($classe,$attributs)
  {
    transformation($classe,$attributs);
    fabricateur_fichier($classe);
    ecriture_primaire($classe,$classe_attributs);

  }
    public function transformation($classe,$attributs)
    {

        $att =  explode ( string " " , string $attributs ) : array;
        $classe_attributs = [$classe,$att];
        return $classe_attributs;
      }
      public function fabricateur_fichier($classe)
      {
        $classe = $classe + ".php";
        $res = fopen($classe, 'w');
        fclose($res);
        }
      public function ecriture_primaire($classe,$classe_attributs)
      {
        $res = fopen("fichier.txt", "a+");
        fwrite($res,"<?php");
        fwrite($res,"\n");
        fwrite($res,"class Model_");
        fwrite($res,$classe);
        fwrite($res,"\n");
        fwrite($res,"{");
        fwrite($res,"\n");
        fclose($res);
        }

}
 ?>
