<?php 

//  (1168) LED

$n = readline();
for($i = 0; $i < $n; $i++){
  $num = readline();
  $tam = strlen($num); //strlen($xx) dá o tamanho da string.
  $soma = 0;

for($a = 0; $a < $tam; $a++){
    if($num[$a] == 1){
      $soma += 2;
    }else if($num[$a] == 2){
      $soma += 5;
    }else if($num[$a] == 3){
      $soma += 5;
    }else if($num[$a] == 4){
      $soma += 4;
    }else if($num[$a] == 5){
      $soma += 5;
    }else if($num[$a] == 6){
      $soma += 6;
    }else if($num[$a] == 7){
      $soma += 3;
    }else if($num[$a] == 8){
      $soma += 7;
    }else if($num[$a] == 9){
      $soma += 6;
    }else if($num[$a] == 0){
      $soma += 6;
    }
  }
  echo "$soma leds\n";
}
?>
