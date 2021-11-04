<?php

function display_str_a(){
    $voyelles = "aeiouyAEIOUY";
    $i = 0;
    $str = "I'm sorry Dave I'm afraid I can't
    do that";
    while (isset($str[$i])) {
        $a = 0;
        while(isset($voyelles[$a])){
            if($str[$i] == $voyelles[$a]){
                echo $voyelles[$a];
            }
            $a++;
        }
        $i++;
    }
}

display_str_a();

?>