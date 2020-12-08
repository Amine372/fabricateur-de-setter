<?php
class Model_4e2bis
{
/private $_mouton;
/private $_manioc;
// Liste des getters
public function mouton()
{
  return $this->_mouton;
}
public function manioc()
{
  return $this->_manioc;
}
// Partie Setter
public function setmouton($mouton)
{
$mouton = (int) $mouton;

if ($mouton >= 1 && $mouton <= 100)
{
 $this->_mouton = $mouton;
}
}
public function setmanioc($manioc)
{
$manioc = (int) $manioc;

if ($manioc >= 1 && $manioc <= 100)
{
 $this->_manioc = $manioc;
}
}
