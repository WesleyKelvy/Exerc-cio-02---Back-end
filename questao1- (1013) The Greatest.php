<?php 

//URI Online Judge | 1013

$values = readline();
$values = explode(" ", $values);
 $maior = -999999999;
 
 for($x =0; $x < count ($values); $x++){
     if ($maior < $values[$x]){
         $maior = $values[$x];
     }
 }
 echo "$maior eh o maior\n"

?>