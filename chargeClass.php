<?php
function chargeClasse($classe){
  try{
  	require 'modeles/object/'.$classe .'.class.php';
  }catch(Exception $e){
  	
  }
}

spl_autoload_register('chargeClasse');
