<?php 

// 1789 - A Corrida de Lesmas

while(1) {
  $lesmas = readline();
  if($lesmas == "" || $lesmas == " "){
    break;
    //Forma de tratar o erro EOF, testando a entrada.
  }
  
  $velocidades = readline();
  $velocidades = explode(" ", $velocidades);

  
  if(max($velocidades) < 10){
    echo "1\n";
  }else if(max($velocidades) >= 10 and max($velocidades)< 20){
    echo "2\n";
  }else{
    echo "3\n";
  }
}
?>

