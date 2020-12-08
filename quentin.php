<?php
class Model_quentin
{
/private $_a;
/private $_z;
// Liste des getters
public function a()
{
  return $this->_a;
}
public function z()
{
  return $this->_z;
}
// Partie Setter
public function seta($a)
{
$a = (int) $a;

if ($a >= 1 && $a <= 100)
{
$this->_a = $a;
}
}
public function setz($z)
{
$z = (int) $z;

if ($z >= 1 && $z <= 100)
{
$this->_z = $z;
}
}
