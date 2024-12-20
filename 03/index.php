<?php 
$obj = new stdClass();

$obj->nome = "jeferson";
$obj->cpf = "0807875644";
$obj->email = "jm@.com";

$cadastro =
  [
  "nome"=>"jeferson",
  "cpf"=>"123456788",
  "email"=>"jef2.com",
  ];
$mjCadastro = (object) $cadastro

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>03 STDCLASS</title>
</head>

<body>
  <ul>
    <li>Nome:<?=$mjCadastro->nome?></li>
    <li>CPF:<?=$mjCadastro->cpf?></li>
    <li>EMAIL:<?=$mjCadastro->email?></li>
  </ul>
</body>

</html>