<?php
$meses = array(
  'Enero', 'febrero', 'Marzo', 'Abril',
  'Mayo', 'Junio', 'Julio', 'Agosto',
'Septiembre','Octubre','Noviembre','Diciembre'
);

$persona = array('Telefono' => 3111286434, 'Edad'=> 30, 'Pais'=>'México');


?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Foreach</title>
  </head>
  <body>
    <h1>Persona</h1>

    <ul>
      <?php foreach ($persona as $key => $pern) {
        echo '<li>'.$key." : ".$pern.'</li>';
      } ?>

    </ul>

    <!--  <?php
      foreach($persona as $llave => $persn){

        echo "<h3>".$llave."</h3>".$persn."<br>";

      }

     ?>-->




  </body>
</html>
