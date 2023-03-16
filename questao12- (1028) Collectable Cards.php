<?php

// DÁ "Time limit exceeded" NO BEECROWD, PORÉM O CODIGO ENTREGA OS MESMOS RESULTADOS.

//(1789) The Race of Slugs
while(1) { 
  $n = readline();
  $maior = 0;
  
  if($n == "" or $n== " "){
    break;
    //Forma de tratar o erro EOF, testando a entrada.
  }

  $veloc_s = readline();
  $veloc_s = explode(" ", $veloc_s);
  for($c=0 ; $c<$n ; $c++){
    $veloc = $veloc_s[$c];
    
    if($veloc>$maior){
      $maior = $veloc;
      if($veloc<10){
        $m = 1;
      } else if($veloc>=10 && $veloc<20){
        $m = 2;
      } else{
        $m = 3;
      }
    }
  }

  echo "{$m}\n";
}
?>
