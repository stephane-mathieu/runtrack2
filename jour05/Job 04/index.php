<?php

function calcule($a,$operator,$b){
switch($operator){
    case "+" :
    $total =  $a+$b;
    return($total);
    break;

    case "-" :
    $total =  $a-$b;
    return($total);
    break;

    case "*" :
    $total =  $a*$b;
    return($total);
    break;

    case "/" :
    $total =  $a/$b;
    return($total);
    break;

    case "%" :
    $total =  $a%$b;
    return($total);
    break;
    return (0);
}

}
   echo calcule(10,"*",10);

?>