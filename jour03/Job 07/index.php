
<?php

function my_swap_str(){
    $str ="Certaines choses changent, et d'autres ne changeront jamais.";
    $i=0;
    $j=1;
    while($str[$j] != NULL){
        $stock = $str[$i];
        $str[$i] = $str[$j];
        $str[$j] = $stock;
        echo $str[$i];
        $str[$i] = $str[$j];
        $j++;
    }
    echo $str[$i];

}

my_swap_str();


?>