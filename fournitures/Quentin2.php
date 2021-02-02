<?php
class Model_Quentin2
{
private $_q;
private $_l;
private $_z;
private $_k;
// Liste des getters
public function q()
{
  return $this->_q;
}
public function l()
{
  return $this->_l;
}
public function z()
{
  return $this->_z;
}
public function k()
{
  return $this->_k;
}
// Partie Setter
public function setq($q)
{
$q = (int) $q;

if ($q >= 1 && $q <= 100)
{
 $this->_q = $q;
}
}
public function setl($l)
{
$l = (int) $l;

if ($l >= 1 && $l <= 100)
{
 $this->_l = $l;
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
public function setk($k)
{
$k = (int) $k;

if ($k >= 1 && $k <= 100)
{
 $this->_k = $k;
}
}
