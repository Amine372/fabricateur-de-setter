<?php
class Model_fabricateur
{
private $_classe;
private $_attributs;
protected $classe_attributs;
// Liste des getters
public function classe()
{
  return $this->_classe;
}
public function attributs()
{
  return $this->_attributs;
}
public function classe_attributs()
{
  return $this->_classe_attributs;
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
public function setclasse_attributs($classe_attributs)
{
$classe_attributs = (int) $classe_attributs;

if ($classe_attributs >= 1 && $classe_attributs <= 100)
{
 $this->_classe_attributs = $classe_attributs;
}
}
}
