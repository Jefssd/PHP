<?php 
$criarArquivo = fopen("arquivo.txt", "w");

if($criarArquivo){
$texto =  "jeferson araujo souza";
fwrite($criarArquivo, $texto);
fclose($criarArquivo);
echo "arquivo gravado com sucesso";
}else{
  echo "não foi possivel criar o arquivo";
}



$lerArquivo = fopen("arquivo.txt", "r");
if($lerArquivo){
  while($linha = fgets(($lerArquivo))!== false){
    echo $linha;
  }
  fclose($lerArquivo);
  }else{
    echo "nao foi possivel ler arquivo";
  }

?>