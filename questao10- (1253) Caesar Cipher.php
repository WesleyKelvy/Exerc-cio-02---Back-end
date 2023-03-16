<?php

//(1253)Caesar_Cipher

$n = readline();

for($i=0 ; $i<$n ; $i++){
  $texto = readline();
  $salto = readline();
  $texto = strtoupper($texto);
  //Transforma qualquer caractere alfabético em maiúsculo. Tem também o strtolower($var);
  $completo = "";

  for($a=0 ; $a<strlen($texto) ; $a++){
    if((ord($texto[$a])-$salto)<65){
      $format = 91 - 65 - ($salto - (ord($texto[$a]))); 
      $new_letra = chr($format);

      $completo .= $new_letra;
    } else{
      $new_letra = chr(ord($texto[$a])-$salto);
      $completo .= $new_letra;
    }

  }
  echo "{$completo}\n";
}
?>