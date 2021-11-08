<?php

function occurrences($str,$char){

$i = 0;
$ct = 0;
while (isset($str[$i])) {
    $a = 0;
    while(isset($char[$a])){
        if($str[$i] == $char[$a]){
             $ct++;
          }
          $a++;
     }
     $i++;
}
return($ct);
}

     echo occurrences("bonjour","b");


?>