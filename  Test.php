<?php
class Model_ Test
{
private $_Mattei;
private $_ Lemoine;
private $_ automatisme;
// Liste des getters
public function Mattei()
{
  return $this->_Mattei;
}
public function  Lemoine()
{
  return $this->_ Lemoine;
}
public function  automatisme()
{
  return $this->_ automatisme;
}
// Partie Setter
public function setMattei($Mattei)
{
$Mattei = (int) $Mattei;

if ($Mattei >= 1 && $Mattei <= 100)
{
 $this->_Mattei = $Mattei;
}
}
public function set Lemoine($ Lemoine)
{
$ Lemoine = (int) $ Lemoine;

if ($ Lemoine >= 1 && $ Lemoine <= 100)
{
 $this->_ Lemoine = $ Lemoine;
}
}
public function set automatisme($ automatisme)
{
$automatisme = (int) $ automatisme;

if ($ automatisme >= 1 && $ automatisme <= 100)
{
 $this->_ automatisme = $ automatisme;
}
}
