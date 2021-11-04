<?php

function my_reverse_str(){
    $str = "Les choses que l'on
    possede finissent par nous posseder";
    $i = -1;
    while ($str[$i] != NULL) {
        echo $str[$i];
        $i--;
    }
}

my_reverse_str();

?>