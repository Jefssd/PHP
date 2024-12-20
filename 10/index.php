<?php 
$i = 1;

while($i <= 10){
  echo $i - " ";
  $i++;

  echo "<hr>";
}

$contador = 1;
$soma = 0;

while($contador <= 10){
  $soma += $contador;
  $contador++;
}

echo "a soma dos numeros de 1 a 10 é {$soma}";
?> 