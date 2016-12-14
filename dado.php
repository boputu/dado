<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php

class jugadorDado
{

  function __construct()
  {
    # code...
  }

private $minNumDado=0;
private $maxNumDado=0;
private $tirardado=0;

//Getters

public function getminNumDado(){
  return $this->minNumDado;
}

public function getmaxNumDado(){
  return $this->maxNumDado;
}

//Setters

public function setmaxNumDado($maxNumDado){
  if ($maxNumDado>12) {
    $this->maxNumDado=12;
  }else {
    $this->maxNumDado=$maxNumDado;
  }
}

public function setminNumDado($minNumDado){
  if ($minNumDado<0) {
    $this->minNumDado=0;
  }else {
    $this->minNumDado=$minNumDado;
  }
}

public function tirardado()
{
  return $this->tirardado=rand($this->minNumDado,$this->maxNumDado);
}

}





     ?>
  </body>
</html>
