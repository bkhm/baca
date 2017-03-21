<?php

$mes = 'Enero';

 switch($mes){

    case  'Diciembre':
    echo "feliz nadviad";
    break;
    case  'Enero':
    echo "feliz año nuevo";
    break;
    default:
    echo "Este mes no se celebra nada";
    break;

 }

echo "<br>";
 if ($mes == 'Diciembre'){
   echo "feliz navidad";
 } else if($mes == 'Enero'){
   echo "Feliz año nuevo";
 } else {
   echo "Este mes no se celebra nada";
 }
