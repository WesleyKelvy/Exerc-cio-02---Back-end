<?php 

//1101 - Sequência de Números e Soma

while(1){
  $var = readline();
  $var = explode (" ", $var);
  $soma = 0;
  
  if(($var[0] <= 0) or ($var[1] <= 0)){
    break;
  }else if($var[0] > $var[1]){
    for($var1 = $var[1]; $var1 <= $var[0]; $var1++){
        echo "$var1 ";
        $soma += $var1;
    }
    echo ("Sum=$soma\n");
  }else{
    for($var1 = $var[0]; $var1 <= $var[1]; $var1++){
        echo "$var1 ";
        $soma += $var1;
    }
    echo ("Sum=$soma\n");
  }
}

?>
