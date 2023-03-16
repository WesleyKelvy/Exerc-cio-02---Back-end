<?php

// DÁ "Time limit exceeded" NO BEECROWD, PORÉM O CODIGO ENTREGA OS MESMOS RESULTADOS.

$n = readline();
$imp = [];
$par = [];

for($i=0 ; $i<$n; $i++){
  $num = readline();
  if($num %2 == 0){
    $par[] = $num;
  } else{
    $imp[] = $num;
  }
}

sort($imp);
sort($par);
//O sort ordena a array em ordem crescente. Também existe o ksort, 
//que faz o inverso

for($i=0 ; $i<count($par) ; $i++){
  // count serve para contar a quantidade de valores em um array
echo "{$par[$i]}\n";
}
for($i = count($imp) -1; $i>=0 ; $i--){
  echo "{$imp[$i]}\n";
}
?>
