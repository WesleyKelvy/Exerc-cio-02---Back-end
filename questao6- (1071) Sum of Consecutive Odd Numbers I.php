<?php 

// 1071 - Soma de Impares Consecutivos I

$x = readline();
$y = readline();
$soma = 0;

if ($x > $y){
  list($x,$y) = array($y,$x);
}

for ($i = $x +1; $i < $y; $i++){
  if($i % 2 != 0){
    $soma += $i;
    }
}
echo "$soma\n";
?>