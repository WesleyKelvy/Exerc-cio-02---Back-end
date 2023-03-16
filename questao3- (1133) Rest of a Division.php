<?php 

//1133 - Resto da Divisão


$x = readline();
$y = readline();

if ($x > $y){
  for($i = $y+1; ($i < $x) ; ($i++)){
    if(($i % 5 == 2) or ($i % 5 == 3)){
      echo "$i\n";
      }
  }
}else{
  for($i = $x+1; $i < $y; ($i++)){
    if(($i % 5 == 2) or ($i % 5 == 3)){
    echo "$i\n";
    }
  } 
}

?>