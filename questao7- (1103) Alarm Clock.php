<?php 

// 1103 - Alarme Despertador
// BEECROWD NAO ACEITA, PORÉM O CODIGO ENTREGA OS MESMOS RESULTADOS.

while(1){
  $num = readline();
  $num = explode(" ", $num);

//algoritmo usa a lógica com os valores todos em minutos.
  
  if(($num[0] == 0) and ($num[1] == 0) and ($num[2] == 0) and ($num[4] == 0)){
    break;
  }else if((($num[2]*60) + $num[3]) < (($num[0]*60) + $num[1])){
    $aux = 1440 - (($num[0]*60) + $num[1]);
    //1440 é o total de minutos de um dia
    $calc = $aux + (($num[2]*60) + $num[3]);
  }else{
    $calc = (($num[0]*60) + $num[1]) - (($num[2]*60) + $num[3]);
  }
  echo abs($calc), "\n";
}
?>
