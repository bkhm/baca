<?php
$meses = array(
  'Enero', 'febrero','Marzo','Abril',
  'Mayo','Junio','Julio','Agosto',
'Septiembre','Octubre','Noviembre','Diciembre'
);

$numeros = array(1,22,33,2,7,6,7,3,68,14,3,54,37,300 );

//sort($meses);
rsort($meses);

rsort($numeros);

 ?>

 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>Meses del año</title>
   </head>
   <body>

     <h1>Meses del año</h1>
     <ul>
       <?php foreach($meses as $mes){echo '<li>'.$mes.'</li>';} ?>
       <br>
       <?php foreach($numeros  as $nums){echo '<li>'.$nums.'</li>';} ?>
        </ul>

   </body>
 </html>
