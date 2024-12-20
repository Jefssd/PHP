<?php 

date_default_timezone_set('America/Sao_Paulo');
$hora = date('H');
$cumprimento = match($hora){
  "01" => "bom dia!",
  "02" => "bom dia!",
  "03" => "bom dia!",
  "04" => "bom dia!",
  "05" => "bom dia!",
  "06" => "bom dia!",
  "07" => "bom dia!",
  "08" => "bom dia!",
  "09" => "bom dia!",
  "10" => "bom dia!",
  "11" => "bom dia!",
  "12" => "boa tarde!",
  "13" => "boa tarde!",
  "14" => "boa tarde!",
  "15" => "boa tarde!",
  "16" => "boa tarde!",
  "17" => "boa tarde!",
  "18" => "boa tarde!",
  "19" => "boa noite",
  "20" => "boa noite",
  "21" => "boa noite",
  "22" => "boa noite",
  "23" => "boa noite",
  "24" => "boa noite",
};


echo "ola {$cumprimento}";
?>