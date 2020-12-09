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
    ecriture_primaire($classe);
    declaration_attributs($classe,$classe_attributs);

  }
    public function transformation($classe,$attributs)
    {

        $att =  explode ( string " " , string $attributs ) : array;
        $classe_attributs = [$classe,$att];
        return $classe_attributs;
      }
      public function fabricateur_fichier($classe)
      {
        $nom_classe = $classe + ".php";
        $res = fopen($classe, 'w');
        fclose($res);
        return $classe_attributs;
      }
      public function ecriture_primaire($classe)
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
        public function declaration_attributs($classe,$classe_attributs)
        {
          $cases_tableau = count($classe_attributs);
          $res = fopen("fichier.txt", "a+");
          for ($i = 1; $i <= $cases_tableau; $i++)
          {
            echo $i;
          }
        }

}
 ?>
