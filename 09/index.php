<?php 
$a = 5;
$b = 10;

if($a == $b){
  echo "os valores sao iguais. <hr>";
}else{
  echo "os valores sao diferentes. <hr>";
}


$c = 5;
$d = "5";

if($c === $d){
  echo "os valores sao iguais. <hr>";
}else{
  echo "os valores sao diferentes. <hr>";
}


$e = 5;
$f = 5;

if($e != $f){
  echo "os valores sao diferentes. <hr>";
}else{
  echo "os valores sao iguais. <hr>";
}

$g = 5;
$h = "5";

if($g !== $h){
  echo "os valores sao diferentes. <hr>";
}else{
  echo "os valores sao iguais. <hr>";
}

$g = 5;
$h = 10;

if($g < $h){
  echo "{$g} é menor que {$h} <hr>";
}else{
  echo "{$g} é maoir que {$h} <hr>";
}

$g = 15;
$h = 10;

if($g > $h){
  echo "{$g} é maoir que {$h} <hr>";
}else{
  echo "{$g} é menor que {$h} <hr>";
}

$g = 15;
$h = 10;

if($g <= $h){  
  echo "{$g} é menor ou igual a  {$h} <hr>";
}else{
  echo "{$g} não é menor ou igual a {$h} <hr>";
}

$g = 15;
$h = 10;

if($g >= $h){
  echo "{$g} é maior ou igual a {$h} <hr>";
}else{
  echo "{$g} não é maior ou igual a  {$h} <hr>";
}
?>