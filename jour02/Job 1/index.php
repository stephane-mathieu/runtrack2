<?php

display_number();

function display_number(){
    $i = 0;
    while($i != 1337){
        $i++;
        echo '</br>';
        if($i == 42) {
            echo "<b><u>".$i."</u></b>";
        }
        else{
            echo $i;
        }
    }
}
?>