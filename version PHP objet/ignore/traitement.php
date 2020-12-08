<?php
if(isset($_POST['ok']))
{
  $get_event = new Manager_fabricateur;
  $donnee = $get_event->fabricateur();
}
 ?>
