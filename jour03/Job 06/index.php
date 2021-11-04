<?php

function my_reverse_str(){
    $str = "Les choses que l'on
    possede finissent par nous posseder.";
    $i = -1;
    while (isset($str[$i])) {
        echo $str[$i];
        $i--;
    }
}

my_reverse_str();
