<?php
require 'Manager_fabricateur.php';
if(isset($_POST['ok']))
{
  $classe = $_POST['classe'];
  $attributs = $_POST['attributs'];
  $get_event = new Manager_fabricateur;
  $donnee = $get_event->fabricateur($classe,$attributs);
}
 ?>
