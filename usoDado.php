<?php



include 'dado.php';

$tirar = new JugadorDado();

$tirar->setminNumDado(-4);
$tirar->setmaxNumDado(16);


for ($i=0; $i <12 ; $i++) {
  echo $tirar->tirardado();
  echo "<br>";
}

 ?>
