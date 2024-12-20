<?php 

// $mes = 04;
$mes = date('m');
$resultado = '';
switch($mes){
  case '01':
    $resultado = "janeiro";
  break;
  
  case '02':
    $resultado = "fevereiro";
  break;

  case '03':
    $resultado = "março";
  break;

  case '04':
    $resultado = "abril";
  break;

  case '05':
    $resultado = "maio";
  break;

  case '06':
    $resultado = "junho";
  break;

  case '07':
    $resultado = "julho";
  break;

  case '08':
    $resultado = "agosto";
  break;

  case '09':
    $resultado = "setembro";
  break;

  case '10':
    $resultado = "outubro";
  break;

  case '11':
    $resultado = "novembro";
  break;

  case '12':
    $resultado = "dezembro";
  break;
}

echo "o mes atual é {$resultado}";
?>