<?php 
// $nomes = 
// [
//   "jef", "alice", "aline", "gi"
// ];

// foreach($nomes as $nome){
//   echo $nome . "<hr>";

// }

$cadastro = 
[
  "nome" => "alice", 
  "idade" => 3, 
  "cpf" => "14356754433"
];


foreach($cadastro as $chave => $valor){
    echo $nome . "{$chave}: {$valor} <br>";
  
  }
?>