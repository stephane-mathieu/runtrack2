<?php

function display_str(){
    $str = "Tous ces instants seront perdus dans le temps comme les larmes sous la pluie.";
    $i = 0;
    while($str[$i] != NULL){
        echo $str[$i];
        $i = $i + 2;
    }

}
display_str();

?>