<?php
class Model_test
{
/private $_t;
/private $_rtvffgvff;
/private $_fg;
// Liste des getters
public function t()
{
  return $this->_t;
}
public function rtvffgvff()
{
  return $this->_rtvffgvff;
}
public function fg()
{
  return $this->_fg;
}
// Partie Setter
public function sett($t)
{
$t = (int) $t;

if ($t >= 1 && $t <= 100)
{
$this->_t = $t;
}
}
public function setrtvffgvff($rtvffgvff)
{
$rtvffgvff = (int) $rtvffgvff;

if ($rtvffgvff >= 1 && $rtvffgvff <= 100)
{
$this->_rtvffgvff = $rtvffgvff;
}
}
public function setfg($fg)
{
$fg = (int) $fg;

if ($fg >= 1 && $fg <= 100)
{
$this->_fg = $fg;
}
}
