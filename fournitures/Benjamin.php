<?php
class Model_Benjamin
{
private $_maxime;
private $_quentin;
private $_julien;
// Liste des getters
public function maxime()
{
  return $this->_maxime;
}
public function quentin()
{
  return $this->_quentin;
}
public function julien()
{
  return $this->_julien;
}
// Partie Setter
public function setmaxime($maxime)
{
$maxime = (int) $maxime;

if ($maxime >= 1 && $maxime <= 100)
{
 $this->_maxime = $maxime;
}
}
public function setquentin($quentin)
{
$quentin = (int) $quentin;

if ($quentin >= 1 && $quentin <= 100)
{
 $this->_quentin = $quentin;
}
}
public function setjulien($julien)
{
$julien = (int) $julien;

if ($julien >= 1 && $julien <= 100)
{
 $this->_julien = $julien;
}
}
