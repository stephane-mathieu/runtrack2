<?php

display_number();

function display_number(){
    $i = 0;
    while($i != 1337){
        $i++;
        echo '</br>';
         if(!($i == 26 || $i == 37 || $i == 88 || $i == 1111)) {
             echo $i;
        }
    }
}
?>