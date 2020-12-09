<?php
class Model_fabricateur
{
private $_classe;
private $_attributs;

// Liste des getters
public function classe()
{
  return $this->_classe;
}
public function attributs()
{
  return $this->_attributs;
}
// Partie Setter
public function setclasse($classe)
{
$classe = (int) $classe;

if ($classe >= 1 && $classe <= 100)
{
 $this->_classe = $classe;
}
}
public function setattributs($attributs)
{
$attributs = (int) $attributs;

if ($attributs >= 1 && $attributs <= 100)
{
 $this->_attributs = $attributs;
}
}

}
