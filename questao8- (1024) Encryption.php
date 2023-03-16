<?php 

// 1024 - Criptografia
// DÁ "Time limit exceeded" NO BEECROWD, PORÉM O CODIGO ENTREGA OS MESMOS RESULTADOS.


$n = readline();
for($w = 0; $w < $n; $w++){
  $texto = readline();
  $tam = strlen($texto); //strlen($xx) dá o tamanho da string.
  $resultado = "";

  for($a = 0; $a < $tam; $a++){
    if(ctype_alpha($texto[$a])){
      $texto[$a] = chr(ord($texto[$a])+3);
      //chr() serve para transforma em caractere de acordo com o número de $xx dentro da tabela ASCII;
      //ord() serve para saber o número do caractere na tabela ASCII;
      $resultado .= $texto[$a];
    }else{
      $resultado .= $texto[$a];
      }
    }
$resultado = strrev($resultado);//strrev: inverte a ordem dos caracteres

for($a = (int)($tam / 2) ; $a < $tam ; $a++){
  $resultado[$a] = chr(ord($resultado[$a])-1);
}
echo "{$resultado}\n";
}
?>

