<?php

include_once('Perfil.php');
include_once('Collector.php');

class 	PerfilCollector extends Collector
{
  
  function showPerfil() {
    $rows = self::$db->getRows("SELECT * FROM perfil ");        
    echo "linea 1";
    $arrayLeccion= array();        
    foreach ($rows as $c){
      $aux = new Perfil($c{'idperfil'},$c{'tipo'},$c{'img'},$c{'nombre'},$c{'nacimiento'});
      array_push($arrayLeccion, $aux);
    }
    return $arrayLeccion;        
  }


}
?>

