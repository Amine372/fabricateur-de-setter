<?php
class Model_4e2
{
/private $_phacoph�re;
/private $_�l�phant;
/private $_bon;
// Liste des getters
public function phacoph�re()
{
  return $this->_phacoph�re;
}
public function �l�phant()
{
  return $this->_�l�phant;
}
public function bon()
{
  return $this->_bon;
}
// Partie Setter
public function setphacoph�re($phacoph�re)
{
$phacoph�re = (int) $phacoph�re;

if ($phacoph�re >= 1 && $phacoph�re <= 100)
{
 $this->_phacoph�re = $phacoph�re;
}
}
public function set�l�phant($�l�phant)
{
$�l�phant = (int) $�l�phant;

if ($�l�phant >= 1 && $�l�phant <= 100)
{
 $this->_�l�phant = $�l�phant;
}
}
public function setbon($bon)
{
$bon = (int) $bon;

if ($bon >= 1 && $bon <= 100)
{
 $this->_bon = $bon;
}
}
