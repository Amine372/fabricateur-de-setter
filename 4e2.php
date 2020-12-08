<?php
class Model_4e2
{
/private $_phacophère;
/private $_éléphant;
/private $_bon;
// Liste des getters
public function phacophère()
{
  return $this->_phacophère;
}
public function éléphant()
{
  return $this->_éléphant;
}
public function bon()
{
  return $this->_bon;
}
// Partie Setter
public function setphacophère($phacophère)
{
$phacophère = (int) $phacophère;

if ($phacophère >= 1 && $phacophère <= 100)
{
 $this->_phacophère = $phacophère;
}
}
public function setéléphant($éléphant)
{
$éléphant = (int) $éléphant;

if ($éléphant >= 1 && $éléphant <= 100)
{
 $this->_éléphant = $éléphant;
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
